<?php

class ApiController extends Controller
{
/**
 * @api {get} /block/list
 * @apiName GetBlockList
 * @apiGroup Kênh
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "success",
    "data": [
        {
            "school_block_id": 1,
            "school_block_name": "THPT",
            "school_block_avatar": "http://hocmaivideo.tk/uploads/block/1/avatar/THPT.png",
            "school_block_list_class": [
                {
                    "class_id": 1,
                    "class_name": "Lớp 12"
                },
                {
                    "class_id": 2,
                    "class_name": "Lớp 11"
                },
                {
                    "class_id": 3,
                    "class_name": "Lớp 10"
                }
            ]
        },
        {
            "school_block_id": 2,
            "school_block_name": "THCS",
            "school_block_avatar": "http://hocmaivideo.tk/uploads/block/2/avatar/THCS.png",
            "school_block_list_class": [
                {
                    "class_id": 4,
                    "class_name": "Lớp 9"
                },
                {
                    "class_id": 5,
                    "class_name": "Lớp 8"
                },
                {
                    "class_id": 6,
                    "class_name": "Lớp 7"
                },
                {
                    "class_id": 7,
                    "class_name": "Lớp 6"
                }
            ]
        },
        {
            "school_block_id": 3,
            "school_block_name": "TH",
            "school_block_avatar": "http://hocmaivideo.tk/uploads/block/3/avatar/Tiểu học.png",
            "school_block_list_class": [
                {
                    "class_id": 8,
                    "class_name": "Lớp 5"
                },
                {
                    "class_id": 9,
                    "class_name": "Lớp 4"
                },
                {
                    "class_id": 10,
                    "class_name": "Lớp 3"
                },
                {
                    "class_id": 11,
                    "class_name": "Lớp 2"
                },
                {
                    "class_id": 12,
                    "class_name": "Lớp 1"
                }
            ]
        }
    ]
}
*/
    public function index()
    {
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
        $result['description'] = $value->description;
        $result['start_time'] = $startTimeFormat;
        $result['end_time'] = $endTime;
        $result['expire_date'] = $value->end_time;
        $result['repeat'] = $value->repeat;
        $result['livestream_status'] = $status['livestream_status'];
        $result['livestream_status_name'] = $status['livestream_status_name'];

        $result['teacher_name'] = $teacher['name'];
        $result['teacher_image'] = $teacher['avatar'];
        $result['like_number'] = $this->getLikeNumber($value->id);
        $result['view_number'] = $this->getViewNumber($value->id);

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
                $keyDay = date('Y/m/d', strtotime($value->timer_clock));
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
            $keyDay = date('Y/m/d', strtotime($value->timer_clock));
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
        $data = Livestream::where('end_time', '>=', $time);
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
/**
 * @api {post} /block/detail Request danh sách livestream xem lại theo kênh không lọc
 * @apiName PostBlockDetail
 * @apiGroup Livestream
 *
 * @apiParam {Number} schoolblock_id
 *
 * @apiParam {Number} schoolblock_id id của kênh(required)
 * @apiParam {Number} class_id id của lớp có thể không truyền
 * @apiParam {DateTime} date_time  Ngày xem lại các livestream nếu có theo format: Y/m/d hoặc NULL
 * @apiParam {DateTime} date_time_day  Ngày xem lại các livestream theo group giờ(bắt buộc nếu có date_time)
 *
 * @apiSuccessExample Success-Response:
{
    "status": "success",
    "data": {
        "list_class": [
            {
                "class_id": 1,
                "class_name": "Lớp 12"
            },
            {
                "class_id": 2,
                "class_name": "Lớp 11"
            },
            {
                "class_id": 3,
                "class_name": "Lớp 10"
            }
        ],
        "list_livestream": {
            "Hôm nay (2020/04/24)": {
                "36": {
                    "livestream_id": 36,
                    "name": "dssa",
                    "video_url": [
                        {
                            "video_url": "https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8",
                            "video_start_time": "2020-04-24 09:15:25",
                            "video_end_time": "2020-04-24 09:28:25"
                        }
                    ],
                    "small_cover": "http://hocmaivideo.tk/uploads/another_video/36/small/6c340324836779392076.jpg",
                    "big_cover": "http://hocmaivideo.tk/uploads/another_video/36/big/a4ea0057ec2716794f36.jpg",
                    "subject_id": 1,
                    "subject_name": "Toán",
                    "class_id": 1,
                    "class_name": "Lớp 12",
                    "description": "<p>dsa</p>",
                    "start_time": "2020-04-24 09:15:25",
                    "end_time": "2020-04-24 09:28:25",
                    "expire_date": "2020-05-08 00:00:00",
                    "repeat": 1,
                    "livestream_status": 3,
                    "livestream_status_name": "Phát xong",
                    "teacher_name": "Lê Bá Khá",
                    "teacher_image": "http://hocmaivideo.tk/uploads/teacher/1/avatar/modern-man-smiling_1194-11653.jpg",
                    "like_number": null,
                    "view_number": null
                }
            },
            "2020/04/23": {
                "28": {
                    "livestream_id": 28,
                    "name": "Video của thầy Tuấn",
                    "video_url": [
                        {
                            "video_url": "https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8",
                            "video_start_time": "2020-04-23 21:03:30",
                            "video_end_time": "2020-04-23 21:16:30"
                        }
                    ],
                    "small_cover": "http://hocmaivideo.tk/uploads/another_video/28/small/87449570_2145660542255856_3117446160046882816_o.jpg",
                    "big_cover": "http://hocmaivideo.tk/uploads/another_video/28/big/87765454_2145660568922520_6848875860905164800_o.jpg",
                    "subject_id": 1,
                    "subject_name": "Toán",
                    "class_id": 1,
                    "class_name": "Lớp 12",
                    "description": "<p>Video của thầy Tuấn</p><p>Video của thầy Tuấn</p><p>Video của thầy Tuấn</p><ul>\t<li>Video của thầy Tuấn</li>\t<li>Video của thầy TuấnVideo của thầy Tuấn</li>\t<li>Video của thầy Tuấn</li></ul><p>&nbsp;</p>",
                    "start_time": "2020-04-23 21:03:30",
                    "end_time": "2020-04-23 21:16:30",
                    "expire_date": "2020-05-08 00:00:00",
                    "repeat": 1,
                    "livestream_status": 3,
                    "livestream_status_name": "Phát xong",
                    "teacher_name": "Đặng Bá Đạo",
                    "teacher_image": "http://hocmaivideo.tk/uploads/teacher/3/avatar/rn1se5zkikkz.png",
                    "like_number": null,
                    "view_number": null
                }
            }
        }
    }
}
 */

/**
 * @api {post} /block/detail Request danh sách livestream xem lại theo kênh có lọc theo ngày
 * @apiName PostBlockDetailWithDay
 * @apiGroup Livestream
 *
 * @apiParam {Number} schoolblock_id
 *
 * @apiParam {Number} schoolblock_id id của kênh(required)
 * @apiParam {Number} class_id id của lớp có thể không truyền
 * @apiParam {DateTime} date_time  Ngày xem lại các livestream nếu có theo format: Y/m/d hoặc NULL
 * @apiParam {DateTime} date_time_day  Ngày xem lại các livestream theo group giờ(bắt buộc nếu có date_time)
 *
 * @apiSuccessExample Success-Response:
{
    "status": "success",
    "data": {
        "list_class": [
            {
                "class_id": 1,
                "class_name": "Lớp 12"
            },
            {
                "class_id": 2,
                "class_name": "Lớp 11"
            },
            {
                "class_id": 3,
                "class_name": "Lớp 10"
            }
        ],
        "list_livestream": {
            "Hôm nay (2020/04/24)": {
                "36": {
                    "livestream_id": 36,
                    "name": "dssa",
                    "video_url": [
                        {
                            "video_url": "https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8",
                            "video_start_time": "2020-04-24 09:15:25",
                            "video_end_time": "2020-04-24 09:28:25"
                        }
                    ],
                    "small_cover": "http://hocmaivideo.tk/uploads/another_video/36/small/6c340324836779392076.jpg",
                    "big_cover": "http://hocmaivideo.tk/uploads/another_video/36/big/a4ea0057ec2716794f36.jpg",
                    "subject_id": 1,
                    "subject_name": "Toán",
                    "class_id": 1,
                    "class_name": "Lớp 12",
                    "description": "<p>dsa</p>",
                    "start_time": "2020-04-24 09:15:25",
                    "end_time": "2020-04-24 09:28:25",
                    "expire_date": "2020-05-08 00:00:00",
                    "repeat": 1,
                    "livestream_status": 3,
                    "livestream_status_name": "Phát xong",
                    "teacher_name": "Lê Bá Khá",
                    "teacher_image": "http://hocmaivideo.tk/uploads/teacher/1/avatar/modern-man-smiling_1194-11653.jpg",
                    "like_number": null,
                    "view_number": null
                }
            },
            "2020/04/23": {
                "28": {
                    "livestream_id": 28,
                    "name": "Video của thầy Tuấn",
                    "video_url": [
                        {
                            "video_url": "https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8",
                            "video_start_time": "2020-04-23 21:03:30",
                            "video_end_time": "2020-04-23 21:16:30"
                        }
                    ],
                    "small_cover": "http://hocmaivideo.tk/uploads/another_video/28/small/87449570_2145660542255856_3117446160046882816_o.jpg",
                    "big_cover": "http://hocmaivideo.tk/uploads/another_video/28/big/87765454_2145660568922520_6848875860905164800_o.jpg",
                    "subject_id": 1,
                    "subject_name": "Toán",
                    "class_id": 1,
                    "class_name": "Lớp 12",
                    "description": "<p>Video của thầy Tuấn</p><p>Video của thầy Tuấn</p><p>Video của thầy Tuấn</p><ul>\t<li>Video của thầy Tuấn</li>\t<li>Video của thầy TuấnVideo của thầy Tuấn</li>\t<li>Video của thầy Tuấn</li></ul><p>&nbsp;</p>",
                    "start_time": "2020-04-23 21:03:30",
                    "end_time": "2020-04-23 21:16:30",
                    "expire_date": "2020-05-08 00:00:00",
                    "repeat": 1,
                    "livestream_status": 3,
                    "livestream_status_name": "Phát xong",
                    "teacher_name": "Đặng Bá Đạo",
                    "teacher_image": "http://hocmaivideo.tk/uploads/teacher/3/avatar/rn1se5zkikkz.png",
                    "like_number": null,
                    "view_number": null
                }
            }
        }
    }
}
 */
public function detail(Request $request)
{
}

    public function getDetail(Request $request)
    {
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
        $data = $data->whereDate('timer_clock', '>=', $dateNow)->get();
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

    /**
     * @api {get} /header
     * @apiName GetHeader
     * @apiGroup Header
     *
     * @apiSuccessExample Success-Response:
     *  HTTP/1.1 200 OK
        {
            "status": "success",
            "data": [
                {
                    "header_id": 1,
                    "header_desc": "<p>Ch&agrave;o buổi s&aacute;ng,</p>",
                    "header_image": "http://hocmaivideo.tk/uploads/admin/header/1/image/Chào buổi sáng.png",
                    "header_start_time": "05:00",
                    "header_end_time": "11:59"
                },
                {
                    "header_id": 2,
                    "header_desc": "<p>Ch&agrave;o buổi chiều,</p>",
                    "header_image": "http://hocmaivideo.tk/uploads/admin/header/2/image/Chào buổi chiều.png",
                    "header_start_time": "12:00",
                    "header_end_time": "17:59"
                }
            ]
        }
     */
    public function getHeader()
    {
    }

    /**
     * @api {get} /footer
     * @apiName GetFooter
     * @apiGroup Footer
     *
     * @apiSuccessExample Success-Response:
     *  HTTP/1.1 200 OK
        {
            "status": "success",
            "data": [
                {
                    "footer_id": 1,
                    "footer_desc": "<p>Ch&agrave;o buổi s&aacute;ng,</p>",
                    "footer_image": "http://hocmaivideo.tk/uploads/admin/footer/1/image/Chào buổi sáng.png",
                    "footer_start_time": "05:00",
                    "footer_end_time": "11:59"
                },
                {
                    "footer_id": 2,
                    "footer_desc": "<p>Ch&agrave;o buổi chiều,</p>",
                    "footer_image": "http://hocmaivideo.tk/uploads/admin/footer/2/image/Chào buổi chiều.png",
                    "footer_start_time": "12:00",
                    "footer_end_time": "17:59"
                }
            ]
        }
     */
    public function getFooter()
    {
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
