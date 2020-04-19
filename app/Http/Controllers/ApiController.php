<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\SchoolBlock;
use App\HocMaiClass;
use App\Livestream;
use App\AnotherVideo;
use App\LivestreamAnotherVideo;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function index()
    {
		$data = SchoolBlock::all();
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key]['school_block_id'] = $value->id;
            $result[$key]['school_block_name'] = $value->name;
            $result[$key]['school_block_avatar'] = $value->avatar;
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

    public function commonFormatGetLivestream($data)
    {
        $result = [];
        foreach ($data as $key => $value) {
            $result[$value->id]['livestream_id'] = $value->id;
            $result[$value->id]['video_url'] = $this->getVideoUrlByLivestream($value->id);
            $result[$value->id]['avatar'] = $value->image_small;
            $result[$value->id]['name'] = $value->name;
            $result[$value->id]['teacher_name'] = getGvNameById($value->teacher_id);
            $result[$value->id]['like_number'] = $this->getLikeNumber($value->id);
            $result[$value->id]['view_number'] = $this->getViewNumber($value->id);
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
        if (!isset($input[' ']) || empty($input['schoolblock_id'])) {
            $response = array(
                'status' => 'Fail',
                'data' => []
            );
            return response()->json($response);
        }
        if (isset($input['class_id'])) {
            $classId = $input['class_id'];
        }
        $id = $input['schoolblock_id'];
        $hocmaiClass = HocMaiClass::where('schoolblock_id', $id)->get();

        $listClass = [];
        foreach ($hocmaiClass as $key => $value) {
            $listClass[$key]['class_id'] = $value->id;
            $listClass[$key]['class_name'] = $value->name;
        }
        $now = date('Y/m/d');
        $timeNow = date('Y-m-d');
        $timeYesterday = date('Y-m-d', strtotime( '-1 days' ) );
        $yesterday = date('Y/m/d', strtotime( '-1 days' ) );
        $currentTitle = 'Hôm nay (' . $now .')';
        $yesterdayTitle = $yesterday;
        $listLivestreamCurrent = $this->getLivestreamShort($timeNow);

        $result = array(
            'list_class' => $listClass,
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
}
