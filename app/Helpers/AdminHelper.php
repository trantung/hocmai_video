<?php

use App\SchoolBlock;
use App\Subject;
use App\Teacher;
use App\HocMaiClass;
use APV\User;
use APV\User\Models\Role;

function getIdFromSourceVideo($url)
{
    $sourceId = substr($url, strpos($url, "id=") + NUMBER_SPLIT_ID);
    return $sourceId;   
}


function getListRole()
{
    return Role::pluck('name', 'id')->toArray();
}
/* start livestream hoc mai*/
// class lấy name lớp
function getListClass(){
    return HocMaiClass::pluck('name','id')->toArray();
}
// khối 
function getListKhoi(){
    return SchoolBlock::pluck('name','id')->toArray();
}
// môn
function getListMon(){
    return Subject::pluck('name','id')->toArray();
}
function getListGv(){
    return Teacher::pluck('name','id')->toArray();
}
// lấy name
function getClassNameById($id)
{
    $class = HocMaiClass::find($id);
    if ($class) {
        return $class->name;
    }
    return null;
}
function getMonNameById($id)
{
    $class = Subject::find($id);
    if ($class) {
        return $class->name;
    }
    return null;
}
function getKhoiNameById($id)
{
    $class = SchoolBlock::find($id);
    if ($class) {
        return $class->name;
    }
    return null;
}
function getGvNameById($id)
{
    $class = Teacher::find($id);
    if ($class) {
        return $class->name;
    }
    return null;
}
 /* end livestream hoc mai*/
function getRoleNameById($id)
{
    $role = Role::find($id);
    if ($role) {
        return $role->name;
    }
    return null;
}

function getArrayStatus()
{
    return [0 => 'Không đăng nhập', 1 => 'Đăng nhập'];
}

function getListRepeat()
{
    $array = [
        1 => 'Lặp lại 1 lần',
        2 => 'Lặp lại 2 lần',
        3 => 'Lặp lại 3 lần'
    ];
    return $array;
}

function getArrayIsPublish()
{
    $array = [
        IS_PUBLISH_ACTIVE => 'Đăng ngay',
        IS_PUBLISH_INACTIVE => 'Hẹn giờ',
    ];
    return $array;
}

function renderCodeOrder()
{
    $length = 16;
    $randstring = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    return $randstring;
}