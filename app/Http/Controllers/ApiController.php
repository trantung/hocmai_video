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
use App\HocmaiHeader;
use App\HocmaiFooter;
use APV\User\Services\UserService;
use APV\LivestreamDetail;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
		$data = SchoolBlock::all();
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key]['school_block_id'] = $value->id;
            $result[$key]['school_block_name'] = $value->name;
            $result[$key]['school_block_avatar'] = getUrlFull($value->avatar);
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

    public function getVideoUrlByLivestream($livestreamId)
    {
        $listId = LivestreamAnotherVideo::where('livestream_id', $livestreamId)->pluck('another_video_id');
        $data = AnotherVideo::whereIn('id', $listId)->get();
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key]['video_url'] = getLivestreamUrl($value->source_id);
        }
        return $result;
    }

    public function formatLivestream($value)
    {
        $result = [];
        $startTime = getTimeLivestreamPlay($value);
        $duration = getDurationLivestream($value->id);
        $livestreamStartTime = $this->userService->getTimePlay($value);
        $livestreamEndTime = $livestreamStartTime + $duration * 60;
        $endTime = date('Y-m-d H:i:s', $livestreamEndTime);
        $status = apiStatusLivestream($livestreamStartTime, $livestreamEndTime);

        $teacher = $this->getTeacherInfo($value->teacher_id);

        $result['livestream_id'] = $value->id;
        $result['name'] = $value->name;
        $result['video_url'] = $this->getVideoUrlByLivestream($value->id);
        $result['small_cover'] = getUrlFull($value->image_small);
        $result['big_cover'] = getUrlFull($value->image_big);
        $result['subject_id'] = $value->subject_id;
        $result['subject_name'] = getMonNameById($value->subject_id);
        $result['class_id'] = $value->class_id;
        $result['class_name'] = getClassNameById($value->class_id);
        $result['description'] = $value->description;
        $result['start_time'] = Carbon::createFromFormat('Y-m-d H:i:s', $startTime)->toDateTimeString();
        $result['end_time'] = $endTime;
        $result['expire_date'] = $value->end_time;
        $result['livestream_status'] = $status['livestream_status'];
        $result['livestream_status_name'] = $status['livestream_status_name'];

        $result['teacher_name'] = $teacher['name'];
        $result['teacher_image'] = $teacher['avatar'];
        $result['like_number'] = $this->getLikeNumber($value->id);
        $result['view_number'] = $this->getViewNumber($value->id);

        return $result;
    }

    public function commonFormatGetLivestream($data, $filter = null)
    {
        $result = [];

        foreach ($data as $key => $value) {
            if (!$filter) {
                $result[$value->id] = $this->formatLivestream($value);
            }
            if ($filter == FILTER_DAY) {
                $keyDay = date('m/d', strtotime($value->timer_clock));
                $result[$keyDay][$value->id] = $this->formatLivestream($value);
            }
            if ($filter == FILTER_HOUR) {
                $keyHour = date('H:i', strtotime($value->timer_clock));
                $result[$keyHour][$value->id] = $this->formatLivestream($value);
            }
        }
        return $result;
    }

    public function getLivestreamShort($time, $classId = null)
    {
        $result = [];
        $livestreamStart = Livestream::where('end_time', '>=', $time);
        if ($classId) {
            $livestreamStart = $livestreamStart->where('class_id', $classId);
        }
        //danh sach livestream dang ngay
        $livestreamStart = $livestreamStart->where('status_time', IS_PUBLISH_ACTIVE)
            ->whereDate('created_at', $time)
            ->get();
        //danh sach livestream hen gio
        $livestreamClocker = Livestream::where('end_time', '>=', $time);
        if ($classId) {
            $livestreamClocker = $livestreamClocker->where('class_id', $classId);
        }
        $livestreamClocker = $livestreamClocker->where('status_time', IS_PUBLISH_INACTIVE)
            ->whereDate('timer_clock', $time)
            ->get();
        $start = $this->commonFormatGetLivestream($livestreamStart);
        $clocker = $this->commonFormatGetLivestream($livestreamClocker);
        $result = array_merge($start, $clocker);

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
            $listClass['class_id'] = $listClassId->id;
            $listClass['class_name'] = $listClassId->name;
        }
        return $listClass;
    }

    public function detail(Request $request)
    {
        $classId = null;
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
            $listClassId = HocMaiClass::find($classId);
        }
        $id = $input['schoolblock_id'];
        
        $listClass = $this->getListClassByParam($input);
        $now = date('Y/m/d');
        $timeNow = date('Y-m-d');
        $timeYesterday = date('Y-m-d', strtotime( '-1 days' ) );
        $yesterday = date('Y/m/d', strtotime( '-1 days' ) );
        $currentTitle = 'Hôm nay (' . $now .')';
        $yesterdayTitle = $yesterday;
        $listLivestreamCurrent = $this->getLivestreamShort($timeNow);

        $result = array(
            'list_class' =>$listClass,
            'list_livestream' => [
                $currentTitle => $this->getLivestreamShort($timeNow, $classId),
                $yesterday => $this->getLivestreamShort($timeYesterday, $classId)
            ]
        );
        $response = array(
            'status' => 'success',
            'data' => $result
        );
        return response()->json($response);
    }

    public function responseSuccess($result)
    {
        $data = array(
            'status' => 'success',
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
            $duration = getDurationLivestream($value->id);
            $livestreamStartTime = $this->userService->getTimePlay($value);
            $livestreamEndTime = $livestreamStartTime + $duration * 60;
            if ($livestreamStartTime < $timeNow && $timeNow < $livestreamEndTime) {
                $result[] = $value;
            }
        }
        $listClass = $this->getListClassByParam($input);
        $data = array(
            'list_class' =>$listClass,
            'list_livestream' => $this->commonFormatGetLivestream($result),
        );

        return $this->responseSuccess($data);
    }

    public function livestreamCalendar(Request $request)
    {
        $input = $request->all();
        $now = Carbon::now();
        $now = $now->toDateTimeString();
        $data = Livestream::where('status_time', IS_PUBLISH_INACTIVE)
            ->where('timer_clock', '>', $now)
            ->where('end_time', '>=', $now);

        if (isset($input['date_time_day'])) {
            $day = $input['date_time_day'];
            $date = date('Y-m-d', strtotime($day));
            $data = $data->whereDate('timer_clock', $date)->get();
            $result = $this->commonFormatGetLivestream($data, FILTER_HOUR);
            return $this->responseSuccess($result);
        }
        $data = $data->get();
        $listClass = $this->getListClassByParam($input);
        $result = array(
            'list_class' =>$listClass,
            'list_livestream' => $this->commonFormatGetLivestream($data, FILTER_DAY),
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

    /**
     * @api {get} /header/ Request Header information
     * @apiName GetHeader
     * @apiGroup Header
     *
     * @apiParam {Number} id Headers unique ID.
     *
     * @apiSuccess {String} firstname Firstname of the Header.
     * @apiSuccess {String} lastname  Lastname of the Header.
     *
     * @apiSuccessExample Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "firstname": "John",
     *       "lastname": "Doe"
     *     }
     *
     * @apiError HeaderNotFound The id of the Header was not found.
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "UserNotFound"
     *     }
     */
    public function getHeader()
    {
        $result = [];

        $data = HocmaiHeader::all();
        foreach ($data as $key => $value) {
            $result[$key]['header_id'] = $value->id;
            $result[$key]['header_desc'] = $value->desc;
            $result[$key]['header_image'] = getUrlFull($value->image);
            $result[$key]['header_start_time'] = $value->start_time;
            $result[$key]['header_end_time'] = $value->end_time;
        }
        return $this->responseSuccess($result);
    }
    public function getFooter()
    {
        $result = [];
        $data = HocmaiFooter::all();
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
}
