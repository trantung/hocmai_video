<?php
define('GOOGLE_API_KEY', 'AIzaSyD739-eb6NzS_KbVJq1K8ZAxnrMfkIqPyw');
define('NUMBER_SPLIT_ID', 3);
define('IS_PUBLISH_ACTIVE', 0);
define('IS_PUBLISH_INACTIVE', 1);
//Role
define('ADMIN', 1);
define('THPT', 2);
define('THCS', 3);
define('TH', 4);
define('ORTHER', 5);
//Livestream
define('PLAYING', 1); //đang phát
define('PLAY_TIME_CLOCKER', 2); //hẹn giờ
define('PLAY_FINISH', 3); //đã phát
//Schoolblock
define('BLOCK_THPT', 1);
define('BLOCK_THCS', 2);
define('BLOCK_TH', 3);
define('BLOCK_FULL', 4);
//api
define('FILTER_HOUR', 1);
define('FILTER_DAY', 2);
//repeat
define('REPEAT_DEFAULT', 1);
//validate time_start va time_end cho header footer
//start >= end
define('TIME_ERROR_1', 1);
//start nam trong khoang start_time va end_time cua ban ghi trong db
define('TIME_ERROR_2', 2);
//end nam trong khoang start_time va end_time cua ban ghi trong db
define('TIME_ERROR_3', 3);
//start < start_time va end > end_time ban ghi trong db
define('TIME_ERROR_4', 4);
//SUCCESS
define('TIME_DEFAULT', 'success');
//OS
define('IOS', 1);
define('ANDROID', 2);
//livestreams
define('IS_LIVESTREAM_TEST',1);
// is_livestreams trực tiếp
define('IS_LIVESTREAM_DIRECT',0);
// livestreams test 
define('IS_NOT_TEST',1);
define('IS_TEST',2);
define('ALL',3);
//app
define('APP_IOS_ID', 1);
define('APP_ANDROID_ID', 2);
define('APP_ACTIVE', 1);
define('APP_INACTIVE', 0);
// status hocmaicod
define('COD_INACTIVE', 0);
define('COD_ACTIVE', 1);
