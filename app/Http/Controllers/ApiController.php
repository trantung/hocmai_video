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

    public function commonFormatGetLivestream($data, $filter = null)
    {
        $result = [];

        foreach ($data as $key => $value) {
            $teacher = $this->getTeacherInfo($value->teacher_id);
            if ($filter) {
                $keyHour = date('H:i', strtotime($value->timer_clock));
                $result[$keyHour][$value->id]['livestream_id'] = $value->id;
                $result[$keyHour][$value->id]['video_url'] = $this->getVideoUrlByLivestream($value->id);
                $result[$keyHour][$value->id]['small_cover'] = getUrlFull($value->image_small);
                $result[$keyHour][$value->id]['big_cover'] = getUrlFull($value->image_big);
                $result[$keyHour][$value->id]['name'] = $value->name;
                $result[$keyHour][$value->id]['teacher_name'] = $teacher['name'];
                $result[$keyHour][$value->id]['teacher_image'] = $teacher['avatar'];
                $result[$keyHour][$value->id]['like_number'] = $this->getLikeNumber($value->id);
                $result[$keyHour][$value->id]['view_number'] = $this->getViewNumber($value->id);
            } else {
                $result[$value->id]['livestream_id'] = $value->id;
                $result[$value->id]['video_url'] = $this->getVideoUrlByLivestream($value->id);
                $result[$value->id]['small_cover'] = getUrlFull($value->image_small);
                $result[$value->id]['big_cover'] = getUrlFull($value->image_big);
                $result[$value->id]['name'] = $value->name;
                $result[$value->id]['teacher_name'] = $teacher['name'];
                $result[$value->id]['teacher_image'] = $teacher['avatar'];
                $result[$value->id]['like_number'] = $this->getLikeNumber($value->id);
                $result[$value->id]['view_number'] = $this->getViewNumber($value->id);
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
        $hocmaiClass = HocMaiClass::where('schoolblock_id', $id)->get();
        $listClass = [];
        if(!isset($input['class_id'])){
            foreach ($hocmaiClass as $key => $value) {
                $listClass[$key]['class_id'] = $value->id;
                $listClass[$key]['class_name'] = $value->name;
            }
        }else{
            $listClass['class_id'] = $listClassId->id;
            $listClass['class_name'] = $listClassId->name;
        }
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
        $response = array(
            'status' => 'success',
            'data' => $result
        );
        return response()->json($response);
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
        $result = $this->commonFormatGetLivestream($result);

        return $this->responseSuccess($result);
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
            $result = $this->commonFormatGetLivestream($data, 'hour');
        }
        $data = $data->get();
        $result = $this->commonFormatGetLivestream($data);
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
        $livstreamDes = [];
        $livstreamDes['subject_name'] = getMonNameById($livestreamDetail->subject_id);
        $livstreamDes['subject_id'] = $livestreamDetail->subject_id;
        $livstreamDes['class_name'] = getClassNameById($livestreamDetail->class_id);
        $livstreamDes['class_id'] = $livestreamDetail->class_id;
        $livstreamDes['description'] = $livestreamDetail->description;
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
}
