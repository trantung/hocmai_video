<?php

namespace APV\User\Services;

use APV\User\Models\User;
use APV\User\Models\Role;
use APV\User\Constants\UserDataConst;
use Carbon\Carbon;
use App\Livestream;
use App\AnotherVideo;

class UserService
{
    public function getDashboard($playStatus)
    {
        // $now = Carbon::now();
        // $now = $now->toDateTimeString();
        // if (!$playStatus) {
        //     $data = Livestream::where('end_time', '>=', $now)->get();
        //     return $data;
        // }
        //status là trạng thái livestream được quy định. Ví dụ livestream dai 60 phút và ở trạng thái hẹn giờ từ 15h-16h, now = 22h thì tức là đã phát xong, nếu now = 15h30 thì tức là đang phát, now = 12h tức là hẹn giờ. Tương tự nếu livestream là ở chế độ đăng ngay thì so sanh now với thời điểm created_at của livestream
        $data = $this->getPlay($playStatus);
        return $data;
    }

    public function convertData($data)
    {

    }

    public function getTimePlay($livestream)
    {
        $time = getTimeLivestreamPlay($livestream);
        return strtotime($time);
    }

    public function getPlay($playStatus)
    {
        $now = Carbon::now();
        $now = $now->toDateTimeString();
        $timeNow = strtotime($now);
        $roleId = checkUserRole();
        if ($roleId == ADMIN) {
            $data = Livestream::all();
        } else {
            $schoolblockId = getSchoolblockByUser();
            $data = Livestream::where('schoolblock_id', $schoolblockId)
                // ->where('end_time', '>=', $now)
                ->get();
        }
        $resultPlaying = $resultPlayClock = $resultPlayFinish = [];
        foreach ($data as $key => $value) {
            //tinh thoi gian livestream
            $livestreamStartTime = getTimePlayLivestream($value);
            $livestreamEndTime = getEndTimeLivestream($value);
            
            if ($livestreamStartTime < $timeNow && $timeNow < $livestreamEndTime) {
                $value->livestream_status = PLAYING;
                $resultPlaying[$key] = $value;
            }
            if ($timeNow < $livestreamStartTime) {
                $value->livestream_status = PLAY_TIME_CLOCKER;
                $resultPlayClock[$key] = $value;
            }
            if ($timeNow > $livestreamEndTime) {
                $value->livestream_status = PLAY_FINISH;
                $resultPlayFinish[$key] = $value;
            }
        }
        if ($playStatus == PLAYING) {
            return $resultPlaying;
        }
        if ($playStatus == PLAY_TIME_CLOCKER) {
            return $resultPlayClock;
        }
        if ($playStatus == PLAY_FINISH) {
            return $resultPlayFinish;
        }
        return $data;
    }

}
