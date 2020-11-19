<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\SchoolBlock;
use App\HocMaiClass;
use App\HocMaiAppVersion;
use App\Livestream;
use App\AnotherVideo;
use App\Teacher;
use App\LivestreamAnotherVideo;
use App\HocMaiHeader;
use App\HocMaiFooter;
use App\BankBranch;
use App\Bank;
use App\HocmaiBank;
use App\HocmaiCod;
use APV\User\Services\UserService;
use App\LivestreamDetail;
use App\RateApp;
use App\Event;
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
        $result['medium_cover'] = getUrlFull($value->image_medium);
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
            $CurrentTimeServer = Carbon::now('Asia/Ho_Chi_Minh');
            $stamp = strtotime($CurrentTimeServer); // get unix timestamp
            $time_in_ms =(int) $stamp*1000;
            $curentTimeCreate = RateApp::where('customer_id', $customerId)->pluck('created_at');
            //$date = $this->curentTimeCreate->format('Y-m-d hh:ii:ss',$curentTimeCreate);
            foreach ($curentTimeCreate as $key => $value) {
                $date = $value->format('Y-m-d H:i:s');
            }
            $stamp1 = strtotime($date);
            //dd($stamp1);
            $time_in_ms_create = (int)$stamp1*1000;
           // dd($curentTimeCreate,'vs' ,$CurrentTimeServer);
            $milliseconds =(int)($time_in_ms - $time_in_ms_create);
            //dd($duration); 
            //convert in time
            $seconds = floor($milliseconds / 1000);
            $minutes = floor($seconds / 60);
            $hours = floor($minutes / 60);
           // $milliseconds = $milliseconds % 1000;
            $seconds = $seconds % 60;
            $minutes = $minutes % 60;
        
            $format = '%u:%02u:%02u';
            $time = sprintf($format, $hours, $minutes, $seconds);
            $result = [
                'customer_id' => $dataByCustomerId->customer_id,
                'customer_username' => $dataByCustomerId->customer_username,
                'customer_comment' => $dataByCustomerId->customer_comment,
                'rate' => $dataByCustomerId->rate,
                'version' => $dataByCustomerId->version,
                'os' => $dataByCustomerId->os,
                'durationTimeRate'=> $time,
            ];
            return $this->responseSuccess($result);
        }
        $result = [];
        return $this->responseNotFound($result); 
        
    }
    // api events
    public function getEvent(Request $request){
        $result = [];
        $now = Carbon::now();
        $now = $now->toDateTimeString();
        //start_time <= now <= end_time
        $data= Event::whereDate('start_time', '<=', $now)
            ->whereDate('end_time', '>=', $now)
            ->get();
        foreach ($data as $key => $value) {
            $result[$key]['event_id'] = $value->id;
            $result[$key]['event_name'] = $value->name;
            $result[$key]['event_banner'] = getUrlFull($value->banner);
            $result[$key]['event_start_time'] = $value->start_time;
            $result[$key]['event_end_time'] = $value->end_time;
            $result[$key]['event_UrlWebNew'] = $value->urlWebView;
            $result[$key]['event_fullScreen'] = $value->fullScreen;
            $result[$key]['event_login_require'] = $value->login_require;
            $result[$key]['event_is_public'] = $value->is_public;
            $result[$key]['event_deep_link'] = $value->deep_link;
            $result[$key]['event_adjust'] = $value->event_adjust;
        }
        return $this->responseSuccess($result);
    }
    public function getEventDetail(Request $request){
        $result = [];
        $input = $request->all();
        $id = $input['id'];
        $event = Event::find($id);
        if (!$event) {
            return $result;
        }
            $result['event_name'] = $event->name;
            $result['event_banner'] = getUrlFull($event->banner);
            $result['event_start_time'] = $event->start_time;
            $result['event_end_time'] = $event->end_time;
            $result['event_UrlWebNew'] = $event->urlWebView;
            $result['event_fullScreen'] = $event->fullScreen;
            $result['event_login_require'] = $event->login_require;
            $result['event_is_public'] = $event->is_public;
            $result['event_deep_link'] = $event->deep_link;
            $result['event_adjust'] = $event->event_adjust;
        return $result;
    }

    public function postAppVersionDetail(Request $request)
    {
        $res = [];
        $input = $request->all();
        $osId = $input['os_id'];
        $data = HocMaiAppVersion::where('os_id', $osId)->where('status', APP_ACTIVE)->first();
        if (!$data) {
            return $this->responseSuccess($res);
        }
        // $res['app_id'] = $data->app_id;
        $res['os_id'] = $data->os_id;
        $res['app_version'] = $data->app_version;
        $res['adjust_event'] = $data->adjust_event;
        $res['desc'] = $data->desc;
        return $this->responseSuccess($res);
    }

    public function getBankList(Request $request)
    {
        //Id Bank, Bank image, Bank Name, Account holder, Account number, Branch
        $res = [];
        $hocmaiBank = HocmaiBank::all();
        foreach ($hocmaiBank as $key => $value)
        {
            $bank_image = $bank_name = $branch_name = null;
            $bank = Bank::find($value->bank_id);
            $branch = BankBranch::find($value->branch_id);
            if ($branch) {
                $branch_name = $branch->branch_name;
            }
            if ($bank) {
                $bank_image = $bank->bank_image;
                $bank_name = $bank->bank_name;
            }
            $res[$key]['bank_id'] = $value->bank_id;
            $res[$key]['bank_image'] = url($bank_image);
            $res[$key]['bank_name'] = $bank_name;
            $res[$key]['account_holder'] = $value->account_holder;
            $res[$key]['account_number'] = $value->account_number;
            $res[$key]['branch_id'] = $value->branch_id;
            $res[$key]['branch_name'] = $branch_name;
        }
        return $this->responseSuccess($res);
    }

    public function postCod(Request $request)
    {
        $input = $request->all();
        $hocmaiCodId = HocmaiCod::create($input)->id;
        return $this->responseSuccess(['hocmai_cod_id' => $hocmaiCodId]);
    }

    public function postCodList(Request $request)
    {
        $input = $request->all();
        if (!isset($input['token']) || $input['token'] != 'cavoisatthu2016') {
            return $this->responseSuccess(['data' => 'no permission']);
        }
        $list = HocmaiCod::orderBy('id', 'DESC');
        if (isset($input['limit'])) {
            $list = $list->skip(0)->take($input['limit']);
        }
        $list = $list->get();
        $result = array();
        foreach ($list as $key => $value) {
            $result[$key]['user_id'] = $value->user_id;
            $result[$key]['user_name'] = $value->user_name;
            $result[$key]['user_phone_account'] = $value->user_phone_account;
            $result[$key]['user_phone_cod'] = $value->user_phone_cod;
            $result[$key]['email'] = $value->email;
            $result[$key]['course_id_register'] = $value->course_id_register;
            $result[$key]['course_name_register'] = $value->course_name_register;
            $result[$key]['package_time_id_register'] = $value->package_time_id_register;
            $result[$key]['package_time_name_register'] = $value->package_time_name_register;
            $result[$key]['base_price'] = $value->base_price;
            $result[$key]['sale_price'] = $value->sale_price;
            $result[$key]['address'] = $value->address;
            $result[$key]['created_at'] = $value->created_at;
        }
        return $this->responseSuccess($result);
    }
}
