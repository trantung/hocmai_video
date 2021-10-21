<?php

/**
 * @api {get} /api_hocmai/block/list
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

/**
 * @api {post} /api_hocmai/block/detail Danh sách livestream xem lại theo kênh không lọc
 * @apiName PostBlockDetail
 * @apiGroup Livestream
 *
 * @apiParam {Number} schoolblock_id
 *
 * @apiParam {Number} schoolblock_id id của kênh(required)
 * @apiParam {Number} class_id id của lớp có thể không truyền
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
 * @api {post} /api_hocmai/block/detail Danh sách livestream xem lại theo kênh có lọc theo ngày
 * @apiName PostBlockDetailWithDay
 * @apiGroup Livestream
 *
 * @apiParam {Number} schoolblock_id
 *
 * @apiParam {Number} schoolblock_id id của kênh(required)
 * @apiParam {Number} class_id id của lớp có thể không truyền
 * @apiParam {DateTime} date_time  Ngày xem lại các livestream nếu có theo format: Y/m/d
 * @apiParam {String} date_time_day  Ngày xem lại các livestream theo group giờ(bắt buộc nếu có date_time)
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
                "28": {
                    "livestream_id": 28,
                    "name": "Video của thầy Tuấn",
                    "video_url": [
                        {
                            "video_url": "https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8",
                            "video_start_time": "2020-04-24 04:03:30",
                            "video_end_time": "2020-04-24 04:03:43"
                        }
                    ],
                    "small_cover": "http://hocmaivideo.tk/uploads/another_video/28/small/87449570_2145660542255856_3117446160046882816_o.jpg",
                    "big_cover": "http://hocmaivideo.tk/uploads/another_video/28/big/87765454_2145660568922520_6848875860905164800_o.jpg",
                    "subject_id": 1,
                    "subject_name": "Toán",
                    "class_id": 1,
                    "class_name": "Lớp 12",
                    "description": "<p>Video của thầy Tuấn</p><p>Video của thầy Tuấn</p><p>Video của thầy Tuấn</p><ul>\t<li>Video của thầy Tuấn</li>\t<li>Video của thầy TuấnVideo của thầy Tuấn</li>\t<li>Video của thầy Tuấn</li></ul><p>&nbsp;</p>",
                    "start_time": "2020-04-24 04:03:30",
                    "end_time": "2020-04-24 04:03:43",
                    "expire_date": "2020-05-08 00:00:00",
                    "repeat": 1,
                    "livestream_status": 3,
                    "livestream_status_name": "Phát xong",
                    "teacher_name": "Đặng Bá Đạo",
                    "teacher_image": "http://hocmaivideo.tk/uploads/teacher/3/avatar/rn1se5zkikkz.png",
                    "like_number": null,
                    "view_number": null
                }
            },
            "2020/04/23": []
        },
        "list_livestream_date": {
            "2020/04/24": {
                "04:03": {
                    "28": {
                        "livestream_id": 28,
                        "name": "Video của thầy Tuấn",
                        "video_url": [
                            {
                                "video_url": "https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8",
                                "video_start_time": "2020-04-24 04:03:30",
                                "video_end_time": "2020-04-24 04:03:43"
                            }
                        ],
                        "small_cover": "http://hocmaivideo.tk/uploads/another_video/28/small/87449570_2145660542255856_3117446160046882816_o.jpg",
                        "big_cover": "http://hocmaivideo.tk/uploads/another_video/28/big/87765454_2145660568922520_6848875860905164800_o.jpg",
                        "subject_id": 1,
                        "subject_name": "Toán",
                        "class_id": 1,
                        "class_name": "Lớp 12",
                        "description": "<p>Video của thầy Tuấn</p><p>Video của thầy Tuấn</p><p>Video của thầy Tuấn</p><ul>\t<li>Video của thầy Tuấn</li>\t<li>Video của thầy TuấnVideo của thầy Tuấn</li>\t<li>Video của thầy Tuấn</li></ul><p>&nbsp;</p>",
                        "start_time": "2020-04-24 04:03:30",
                        "end_time": "2020-04-24 04:03:43",
                        "expire_date": "2020-05-08 00:00:00",
                        "repeat": 1,
                        "livestream_status": 3,
                        "livestream_status_name": "Phát xong",
                        "teacher_name": "Đặng Bá Đạo",
                        "teacher_image": "http://hocmaivideo.tk/uploads/teacher/3/avatar/rn1se5zkikkz.png",
                        "like_number": null,
                        "view_number": null
                    }
                },
                "04:06": {
                    "29": {
                        "livestream_id": 29,
                        "name": "In-App Purchase HOCMAI.VN APP",
                        "video_url": [
                            {
                                "video_url": "https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8",
                                "video_start_time": "2020-04-24 04:06:52",
                                "video_end_time": "2020-04-24 04:07:05"
                            }
                        ],
                        "small_cover": "http://hocmaivideo.tk/uploads/another_video/29/small/84152308_2145660708922506_4659456100687413248_o.jpg",
                        "big_cover": "http://hocmaivideo.tk/uploads/another_video/29/big/85175619_2145660492255861_5245331412713734144_o.jpg",
                        "subject_id": 1,
                        "subject_name": "Toán",
                        "class_id": 1,
                        "class_name": "Lớp 12",
                        "description": "<p>In-App Purchase HOCMAI.VN APP</p><p>In-App Purchase HOCMAI.VN APP</p><p>In-App Purchase HOCMAI.VN APP</p><ol>\t<li>In-App Purchase HOCMAI.VN APP</li>\t<li>In-App Purchase HOCMAI.VN APPIn-App Purchase HOCMAI.VN APP</li>\t<li>In-App Purchase HOCMAI.VN APP</li></ol>",
                        "start_time": "2020-04-24 04:06:52",
                        "end_time": "2020-04-24 04:07:05",
                        "expire_date": "2020-05-08 00:00:00",
                        "repeat": 1,
                        "livestream_status": 3,
                        "livestream_status_name": "Phát xong",
                        "teacher_name": "Lê Bá Khá",
                        "teacher_image": "http://hocmaivideo.tk/uploads/teacher/1/avatar/modern-man-smiling_1194-11653.jpg",
                        "like_number": null,
                        "view_number": null
                    }
                }
            }
        }
    }
}
 */
public function detail(Request $request)
{
}

/**
 * @api {post} /api_hocmai/livestream/play/current Danh sách livestream đang phát
 * @apiName PostPlayCurrent
 * @apiGroup Livestream
 * @apiParam {Number} schoolblock_id id của kênh có thể không truyền
 * @apiParam {Number} class_id id của lớp có thể không truyền
 * @apiSuccessExample Success-Response:
 *  HTTP/1.1 200 OK
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
            "list_livestream": []
        }
    }
*/   
public function livestreamPlayCurrent(Request $request)
{
}

/**
 * @api {post} /api_hocmai/livestream/calendar Danh sách api lịch phát toàn bộ tính từ ngày hiện tại về sau group theo ngày
 * @apiName PostLivestreamCalendarAll
 * @apiGroup Livestream
 * @apiParam {Number} schoolblock_id id của kênh có thể không truyền
 * @apiParam {Number} class_id id của lớp có thể không truyền
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
            "2020/04/27": {
                "27": {
                    "livestream_id": 27,
                    "name": "In-App Purchase HOCMAI.VN APP livestream",
                    "video_url": [
                        {
                            "video_url": "https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8",
                            "video_start_time": "2020-04-27 21:02:00",
                            "video_end_time": "2020-04-27 21:03:00"
                        }
                    ],
                    "small_cover": "http://hocmaivideo.tk/uploads/another_video/27/small/Image 1.png",
                    "big_cover": "http://hocmaivideo.tk/uploads/another_video/27/big/Image 2.png",
                    "subject_id": 1,
                    "subject_name": "Toán",
                    "class_id": 3,
                    "class_name": "Lớp 10",
                    "description": "<p>In-App Purchase HOCMAI.VN APP livestream</p>\r\n\r\n<p>In-App Purchase HOCMAI.VN APP livestreamIn-App Purchase HOCMAI.VN APP livestreamIn-App Purchase HOCMAI.VN APP livestream</p>\r\n\r\n<p>In-App Purchase HOCMAI.VN APP livestream</p>\r\n\r\n<p>In-App Purchase HOCMAI.VN APP livestream</p>",
                    "start_time": "2020-04-27 21:02:00",
                    "end_time": "2020-04-27 21:03:00",
                    "expire_date": "2020-05-08 00:00:00",
                    "repeat": 1,
                    "livestream_status": 2,
                    "livestream_status_name": "Đang chờ",
                    "teacher_name": "Lê Bá Khá",
                    "teacher_image": "http://hocmaivideo.tk/uploads/teacher/1/avatar/modern-man-smiling_1194-11653.jpg",
                    "like_number": null,
                    "view_number": null
                }
            },
            "2020/04/24": {
                "28": {
                    "livestream_id": 28,
                    "name": "Video của thầy Tuấn",
                    "video_url": [
                        {
                            "video_url": "https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8",
                            "video_start_time": "2020-04-24 04:03:30",
                            "video_end_time": "2020-04-24 04:03:43"
                        }
                    ],
                    "small_cover": "http://hocmaivideo.tk/uploads/another_video/28/small/87449570_2145660542255856_3117446160046882816_o.jpg",
                    "big_cover": "http://hocmaivideo.tk/uploads/another_video/28/big/87765454_2145660568922520_6848875860905164800_o.jpg",
                    "subject_id": 1,
                    "subject_name": "Toán",
                    "class_id": 1,
                    "class_name": "Lớp 12",
                    "description": "<p>Video của thầy Tuấn</p><p>Video của thầy Tuấn</p><p>Video của thầy Tuấn</p><ul>\t<li>Video của thầy Tuấn</li>\t<li>Video của thầy TuấnVideo của thầy Tuấn</li>\t<li>Video của thầy Tuấn</li></ul><p>&nbsp;</p>",
                    "start_time": "2020-04-24 04:03:30",
                    "end_time": "2020-04-24 04:03:43",
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
 * @api {post} /api_hocmai/livestream/calendar Danh sách api lịch phát group livestream theo giờ khi chọn 1 ngày 
 * @apiName PostLivestreamCalendarFilterDay
 * @apiGroup Livestream
 * @apiParam {Number} schoolblock_id id của kênh có thể không truyền
 * @apiParam {Number} class_id id của lớp có thể không truyền
 * @apiParam {DateTime} date_time_day ngày xem danh sách livestream theo giờ format: Y/m/d
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
            "2020/04/20": {
                "18:17": {
                    "15": {
                        "livestream_id": 15,
                        "name": "test 1",
                        "video_url": [
                            {
                                "video_url": "https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8",
                                "video_start_time": "2020-04-20 18:17:00",
                                "video_end_time": "2020-04-20 18:30:13"
                            }
                        ],
                        "small_cover": "http://hocmaivideo.tk/uploads/another_video/15/small/img.jpg",
                        "big_cover": "http://hocmaivideo.tk/uploads/another_video/15/big/img.jpg",
                        "subject_id": 1,
                        "subject_name": "Toán",
                        "class_id": 1,
                        "class_name": "Lớp 12",
                        "description": "Test lần 1",
                        "start_time": "2020-04-20 18:17:00",
                        "end_time": "2020-04-20 18:30:13",
                        "expire_date": "2020-05-08 00:00:00",
                        "repeat": 1,
                        "livestream_status": 3,
                        "livestream_status_name": "Phát xong",
                        "teacher_name": "Lê Bá Khá",
                        "teacher_image": "http://hocmaivideo.tk/uploads/teacher/1/avatar/modern-man-smiling_1194-11653.jpg",
                        "like_number": null,
                        "view_number": null
                    }
                }
            }
        }
    }
}
*/ 
public function livestreamCalendar(Request $request)
{
}

/**
 * @api {post} /api_hocmai/livestream/calendar Chi tiết 1 livestream
 * @apiName PostLivestreamDetail
 * @apiGroup Livestream
 * @apiParam {Number} livestream_id id của livestream bắt buộc phải có
 * @apiSuccessExample Success-Response: 
{
    "status": "success",
    "data": {
        "time_start": "20:03",
        "livestream_detail": {
            "livestream_id": 2,
            "name": "dfdff",
            "video_url": [],
            "small_cover": {},
            "medium_cover": {},
            "big_cover": {},
            "subject_id": null,
            "subject_name": null,
            "class_id": null,
            "class_name": null,
            "description": "<p>dsad</p>",
            "start_time": "2020-04-12 20:03:40",
            "end_time": "2020-04-12 20:03:40",
            "expire_date": "2020-05-08 00:00:00",
            "repeat": 2,
            "livestream_status": 3,
            "livestream_status_name": "Phát xong",
            "teacher_name": "Lê Bá Khá",
            "teacher_image": "http://hocmaivideo.tk/uploads/teacher/1/avatar/modern-man-smiling_1194-11653.jpg",
            "like_number": null,
            "view_number": null
        },
        "teacher": {
            "name": "Lê Bá Khá",
            "desc": "<p>B&aacute; Kh&aacute;</p>",
            "avatar": "http://hocmaivideo.tk/uploads/teacher/1/avatar/modern-man-smiling_1194-11653.jpg"
        }
    }
}
*/ 
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
 * @api {get} /api_hocmai/header
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
 * @api {get} /api_hocmai/footer
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

/**
 * @api {post} /api_hocmai/app/rate Api nhận thông tin từ client về rate app gửi lên serve
 * @apiName PostRateApp
 * @apiGroup Rate
 * @apiParam {Number} customer_id id của người dùng
 * @apiParam {String} customer_username Username của người dùng
 * @apiParam {String} customer_name Tên của người dùng
 * @apiParam {String} customer_comment Comment của người dùng về app
 * @apiParam {Number} rate rating của người dùng cho app. Ví dụ : 1
 * @apiParam {String} version phiên bản của app
 * @apiParam {String} os Hệ điều hành của thiết bị(1 là IOS, 2 là Android, 3 là hệ điều hành khác)
 * @apiSuccessExample Success-Response:
 *  HTTP/1.1 200 OK
    {
        {
            "status": "success",
            "data": {
                "id": 1,
                "rate": "1"
            }
        }
    }
 */
public function rateApp()

/**
 * @api {post} /api_hocmai/app/rate/current_rate Chi tiết rate của 1 người dùng
 * @apiName PostRateAppCurrentRate
 * @apiGroup Rate
 * @apiParam {Number} customer_id id của người dùng
 * @apiParam {String} customer_username username của người dùng
 * @apiParam {String} version phiên bản của app
 * @apiParam {String} os Hệ điều hành của thiết bị(1 là IOS, 2 là Android, 3 là hệ điều hành khác)

 * @apiSuccessExample Success-Response:
 *  HTTP/1.1 200 OK
    {
        {
            "status": "success",
            "data": {
                "customer_id": 1,
                "customer_username": trantung,
                "rate": 5,
                "version": 1.0.0,
                "os": 1,
                "durationTimeRate": "676:22:19",
            }
        }
    }
 */
public function currentRate()

