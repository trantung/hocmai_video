<?php

use App\SchoolBlock;
use App\SchoolSubject;
use App\Teacher;
use App\HocMaiClass;
use APV\User;

function getListLevel()
{
    return Level::pluck('name', 'id')->toArray();
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
    return SchoolSubject::pluck('name','id')->toArray();
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
    $class = SchoolSubject::find($id);
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

function getArrayStatus()
{
    return [1 => 'Active', 0 => 'Inactive'];
}
