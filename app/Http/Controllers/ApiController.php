<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\SchoolBlock;
use App\HocMaiClass;
use App\Livestream;
use App\AnotherVideo;
use App\Teacher;
use App\LivestreamAnotherVideo;
use App\HocMaiHeader;
use App\HocMaiFooter;
use APV\User\Services\UserService;
use App\LivestreamDetail;
use App\RateApp;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function formatClassByBlock($data)
    {
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key]['class_id'] = $value->id;
            $result[$key]['class_name'] = $value->name;
        }
        return $result;
    }
    public function index()
    {
		$data = SchoolBlock::all();
        $result = [];
        foreach ($data as $key => $value) {
            $listClass = getListClassByBlock($value->id);
            $result[$key]['school_block_id'] = $value->id;
            $result[$key]['school_block_name'] = $value->name;
            $result[$key]['school_block_avatar'] = getUrlFull($value->avatar);
            $result[$key]['school_block_list_class'] = $this->formatClassByBlock($listClass);
        }
        $response = array(
            'status' => 'success',
            'data' => $result
        );
        return response()->json($response);
    }

    public function getLikeNumber($livestreamId)
    {
        return null;
    }

    public function getViewNumber($livestreamId)
    {
        return null;
    }

    public function getVideoUrlByLivestream($livestreamId, $time = null)
    {
        $listId = LivestreamAnotherVideo::where('livestream_id', $livestreamId)->pluck('another_video_id');
        $data = AnotherVideo::whereIn('id', $listId)->get();
        $start = $end = null;
        if ($time) {
            $start = $time['start_time'];
            $end = $time['end_time'];
        }
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key]['video_url'] = getLivestreamUrl($value->source_id);
            $result[$key]['video_start_time'] = $start;
            $result[$key]['video_end_time'] = $end;
        }
        return $result;
    }

    public function formatLivestream($value)
    {
        $result = [];
        $startTime = getTimeLivestreamPlay($value);

        $livestreamStartTime = getTimePlayLivestream($value);
        $livestreamEndTime = getEndTimeLivestream($value);

        $endTime = date('Y-m-d H:i:s', $livestreamEndTime);
        $status = apiStatusLivestream($livestreamStartTime, $livestreamEndTime);
        $startTimeFormat = Carbon::createFromFormat('Y-m-d H:i:s', $startTime)->toDateTimeString();

        $teacher = $this->getTeacherInfo($value->teacher_id);

        $result['livestream_id'] = $value->id;
        $result['name'] = $value->name;
        $result['video_url'] = $this->getVideoUrlByLivestream($value->id, ['start_time' => $startTimeFormat, 'end_time' => $endTime]);
        $result['small_cover'] = getUrlFull($value->image_small);
        $result['big_cover'] = getUrlFull($value->image_big);
        $result['subject_id'] = $value->subject_id;
        $result['subject_name'] = getMonNameById($value->subject_id);
        $result['class_id'] = $value->class_id;
        $result['class_name'] = getClassNameById($value->class_id);
        $result['description'] = trim(preg_replace('/\s\s+/', ' ', $value->description));
        $result['start_time'] = $startTimeFormat;
        $result['end_time'] = $endTime;
        $result['expire_date'] = $value->end_time;
        $result['require_login'] = $value->require_login;
        $result['repeat'] = $value->repeat;
        $result['require_login'] = $value->require_login;
        $result['livestream_status'] = $status['livestream_status'];
        $result['livestream_status_name'] = $status['livestream_status_name'];

        $result['teacher_name'] = $teacher['name'];
        $result['teacher_image'] = $teacher['avatar'];
        $result['like_number'] = $this->getLikeNumber($value->id);
        $result['view_number'] = $this->getViewNumber($value->id);
        $result['is_livestreams'] = $value->is_livestreams;
        return $result;
    }

    public function commonFormatGetLivestream($data, $input = null)
    {
        $result = [];

        foreach ($data as $key => $value) {
            if (!$input) {
                //api dang phat: livestream dang phat
                $result[$value->id] = $this->formatLivestream($value);
            }
            if (isset($input['date_time']) && !empty($input['date_time'])) {
                $keyDay = date('d/m/Y', strtotime($value->timer_clock));
                $keyHour = date('H:i', strtotime($value->timer_clock));
                if (isset($input['date_time_day']) && !empty($input['date_time_day'])) {
                    $result[$keyDay][$keyHour][$value->id] = $this->formatLivestream($value);
                } else {
                    $result[$keyDay][$value->id] = $this->formatLivestream($value);
                }

            }
        }
        return $result;
    }
    public function getDataPlayFinish($data, $input)
    {
        $result = [];
        $now = Carbon::now();
        $now = $now->toDateTimeString();
        $timeNow = strtotime($now);
        foreach ($data as $key => $value) {
            $livestreamStartTime = getTimePlayLivestream($value);
            $livestreamEndTime = getEndTimeLivestream($value);
            $keyDay = date('d/m/Y', strtotime($value->timer_clock));
            $keyHour = date('H:i', strtotime($value->timer_clock));
            if ($timeNow > $livestreamEndTime) {
                if (isset($input['date_time']) && !empty($input['date_time'])) {
                    if (isset($input['date_time_day']) && !empty($input['date_time_day'])) {
                        $result[$keyDay][$keyHour][$value->id] = $this->formatLivestream($value);
                    } else {
                        $result[$keyDay][$value->id] = $this->formatLivestream($value);
                    }
                } 
            }

        }
        return $result;
    }
    public function getLivestreamShort($time, $input)
    {
        $result = [];
        $now = Carbon::now();
        $now = $now->toDateTimeString();
        $timeNow = strtotime($now);
        //danh sach livestream dang ngay
        $data = Livestream::where('end_time', '>=', $now);
        if (isset($input['class_id'])) {
            $data = $data->where('class_id', $input['class_id']);
        }
        if (isset($input['schoolblock_id'])) {
            $data = $data->where('schoolblock_id', $input['schoolblock_id']);
        }

        if (isset($input['date_time']) && !empty($input['date_time'])) {
            $day = $input['date_time'];
            $date = date('Y-m-d', strtotime($day));
            $data = $data->whereDate('timer_clock', $date)->get();
            $result = $this->getDataPlayFinish($data, $input);
            return $result;
        }
        $data = $data->whereDate('timer_clock', $time)->get();
        foreach ($data as $key => $value) {
            $livestreamStartTime = getTimePlayLivestream($value);
            $livestreamEndTime = getEndTimeLivestream($value);
            if ($timeNow > $livestreamEndTime) {
                $result[$value->id] = $this->formatLivestream($value);
            }

        }
        return $result;
    }
    public function getListClassByParam($input)
    {
        $listClass = [];
        if (isset($input['schoolblock_id'])) {
            $hocmaiClass = HocMaiClass::where('schoolblock_id', $input['schoolblock_id'])->get();
        } else {
            $hocmaiClass = HocMaiClass::all();
        }

        if(!isset($input['class_id'])){
            foreach ($hocmaiClass as $key => $value) {
                $listClass[$key]['class_id'] = $value->id;
                $listClass[$key]['class_name'] = $value->name;
            }
        }else{
            $class = HocMaiClass::find($input['class_id']);
            $listClass['class_id'] = $input['class_id'];
            $listClass['class_name'] = $class->name;
        }
        return $listClass;
    }

    public function detail(Request $request)
    {
        $classId = null;
        $result = [];
        $now = date('d/m/Y');
        $timeNow = date('Y-m-d');
		$input = $request->all();

        if (!isset($input['schoolblock_id']) || empty($input['schoolblock_id'])) {
            $response = array(
                'status' => 'Fail',
                'data' => []
            );
            return response()->json($response);
        }
        if (isset($input['class_id'])) {
            $classId = $input['class_id'];
        }
        $date_time_day = $date_time = null;
        if (isset($input['date_time_day']) && !empty($input['date_time_day'])) {
            $date_time_day = $input['date_time_day'];
        }
        if (isset($input['date_time']) && !empty($input['date_time'])) {
            $date_time = $input['date_time'];
        }
        $input['date_time'] = $date_time;
        $input['date_time_day'] = $date_time_day;
        $listLivestreamDate = [];
        if (isset($input['date_time']) && !empty($input['date_time'])) {
            $listLivestreamDate = $this->getLivestreamShort($timeNow, $input);
        }

        unset($input['date_time']);
        unset($input['date_time_day']);
        $input['class_id'] = $classId;
        $listClass = $this->getListClassByParam($input);
        $timeYesterday = date('Y-m-d', strtotime( '-1 days' ) );
        $yesterday = date('d/m/Y', strtotime( '-1 days' ) );
        $currentTitle = $now;
        $yesterdayTitle = $yesterday;

        // dd($this->getListLivestreamGroupDate($input));

        $result = array(
            'list_class' => $listClass,
            'list_livestream' => $this->getListLivestreamGroupDate($input),
        );
        // $result = array(
        //     'list_class' => $listClass,
        //     'list_livestream' => [
        //         $currentTitle => $this->getLivestreamShort($timeNow, $input),
        //         $yesterday => $this->getLivestreamShort($timeYesterday, $input),
        //     ]
        // );

        if (isset($date_time_day)) {
            $result['list_livestream_date'] = $listLivestreamDate;
        }
        $response = array(
            'status' => 'success',
            'data' => $result
        );
        return response()->json($response);
    }
    public function getListLivestreamGroupDate($input)
    {
        $listTime = $this->getCommonLivestream();
        $res = array();
        foreach ($listTime as $key => $value) {
            $newKey = date("d/m/Y", strtotime($value));
            $res[$newKey] = $this->getLivestreamShort($value, $input);
        }
        return $res;
    }

    public function getCommonLivestream()
    {
        $now = Carbon::now();
        $now = $now->toDateTimeString();
        $data = Livestream::where('end_time', '>=', $now)
            ->select(DB::raw('DATE(timer_clock) as time_key'))
            ->groupBy('time_key')
            ->orderBy('time_key', 'DESC')
            ->pluck('time_key');
        foreach ($data as $key => $value) {
            if (!$value) {
                unset($data[$key]);
            }
        }
        return $data;

    }

    public function responseSuccess($result)
    {
        $data = array(
            'status' => 'success',
            'data' => $result
        );
        return response($data, 200);
    }

    public function responseNotFound($result)
    {
        $data = array(
            'status' => 'Not found',
            'data' => $result
        );
        return response($data, 200);
    }
    // api đang phát
    public function livestreamPlayCurrent(Request $request)
    {
        $input = $request->all();
        $now = Carbon::now();
        $now = $now->toDateTimeString();
        $timeNow = strtotime($now);
        $data = Livestream::where('end_time', '>=', $now);
        if (isset($input['class_id'])) {
            $data = $data->where('class_id', $input['class_id']);
        }
        if (isset($input['schoolblock_id'])) {
            $data = $data->where('schoolblock_id', $input['schoolblock_id']);
        }
        $data = $data->get();
        $result = [];
        foreach ($data as $key => $value) {
            //thoi gian ket thuc livestream
            $livestreamStartTime = getTimePlayLivestream($value);
            $livestreamEndTime = getEndTimeLivestream($value);
            if ($livestreamStartTime < $timeNow && $timeNow < $livestreamEndTime) {
                $result[$key] = $value;
            }
        }
        $listClass = $this->getListClassByParam($input);
        $data = array(
            'list_class' => $listClass,
            'list_livestream' => $this->commonFormatGetLivestream($result),
        );

        return $this->responseSuccess($data);
    }
    //api lich phat
    public function livestreamCalendar(Request $request)
    {
        $input = $request->all();
        $now = Carbon::now();
        $now = $now->toDateTimeString();
        $dateNow = date('Y-m-d');
        $data = Livestream::where('end_time', '>=', $now);
        if (isset($input['schoolblock_id'])) {
            $data = $data->where('schoolblock_id', $input['schoolblock_id']);
        }
        if (isset($input['class_id'])) {
            $data = $data->where('class_id', $input['class_id']);
        }
        $listClass = $this->getListClassByParam($input);
        $input['date_time'] = FILTER_DAY;
        //hiển thị là group theo giờ
        if (isset($input['date_time_day'])) {
            $day = $input['date_time_day'];
            $date = date('Y-m-d', strtotime($day));
            $data = $data->whereDate('timer_clock', $date)->get();
            $result = array(
                'list_class' => $listClass,
                'list_livestream' => $this->commonFormatGetLivestream($data, $input),
            );
            return $this->responseSuccess($result);
        }
        //hiển thị group theo ngaỳ
        $data = $data->whereDate('timer_clock', '>=', $dateNow)->orderBy('timer_clock', 'ASC')->get();
        $result = array(
            'list_class' => $listClass,
            'list_livestream' => $this->commonFormatGetLivestream($data, $input),
        );
        return $this->responseSuccess($result);
    }
    public function getTeacherInfo($teacherId){
        $result = [];
        $teacher = Teacher::find($teacherId);
        if (!$teacher) {
            return $result;
        }
        $result['name'] = $teacher->name;
        $result['desc'] = $teacher->desc;
        $result['avatar'] = getUrlFull($teacher->avatar);
        return $result;
    }
    // chi tiêt video
    public function livestreamDetail(Request $request){
        $input= $request->all();
        $id = $input['livestream_id'];
        $livestreamDetail = Livestream::find($id);
        // dd($livestreamDetail);
        $livstreamDes = $this->formatLivestream($livestreamDetail);
        $result = array(
            'time_start' => date('H:i', strtotime($livestreamDetail->timer_clock)),
            'livestream_detail' => $livstreamDes,
            'teacher' => $this->getTeacherInfo($livestreamDetail->teacher_id)
        );
        return $this->responseSuccess($result);
    }

    public function getHeader()
    {
        $result = [];

        $data = HocMaiHeader::all();
        foreach ($data as $key => $value) {
            $result[$key]['header_id'] = $value->id;
            $result[$key]['header_desc'] = $value->desc;
            $result[$key]['header_image'] = getUrlFull($value->image);
            $result[$key]['header_start_time'] = $value->start_time;
            $result[$key]['header_end_time'] = $value->end_time;
            $result[$key]['header_text_color'] = $value->color;
        }
        return $this->responseSuccess($result);
    }
    public function getFooter()
    {
        $result = [];
        $data = HocMaiFooter::all();
        foreach ($data as $key => $value) {
            $result[$key]['footer_id'] = $value->id;
            $result[$key]['footer_desc'] = $value->desc;
            $result[$key]['footer_image'] = getUrlFull($value->image);
            $result[$key]['footer_start_time'] = $value->start_time;
            $result[$key]['footer_end_time'] = $value->end_time;
        }
        return $this->responseSuccess($result);
    }

    public function dataLivestream(Request $request)
    {
        $input = $request->all();
        $livestreamId = $input['livestream_id'];
        $data = $input['data'];
        $id = LivestreamDetail::create(['livestream_id' => $livestreamId, 'data' => $data])->id;
        return $this->responseSuccess($id);
    }
    // api rate app
    public function rateApp(Request $request)
    {
        $input = $request->all();
        $id = RateApp::create($input)->id;
        $result = [
            'id' => $id,
            'rate' => $input['rate'],
            'version' => $input['version'],
            'os' => $input['os'],
        ];
        return $this->responseSuccess($result);
    }
    public function currentRate(Request $request)
    {
        $input = $request->all();
        $customerId = $customerUsername = null;
        if (isset($input['customer_id']) && !empty($input['customer_id'])) {
            $customerId = $input['customer_id'];
        }
        if (isset($input['customer_username']) && !empty($input['customer_username'])) {
            $customerUsername = $input['customer_username'];
        }
        $dataByCustomerId = RateApp::where('customer_id', $customerId)
            ->where('os', $input['os'])
            ->where('version', $input['version'])
            ->orderBy('id', 'DESC')->first();
        if ($dataByCustomerId) {
            $result = [
                'customer_id' => $dataByCustomerId->customer_id,
                'customer_username' => $dataByCustomerId->customer_username,
                'customer_comment' => $dataByCustomerId->customer_comment,
                'rate' => $dataByCustomerId->rate,
                'version' => $dataByCustomerId->version,
                'os' => $dataByCustomerId->os,
            ];
            return $this->responseSuccess($result);
        }
        $result = [];
        return $this->responseNotFound($result); 
        
    }

}
