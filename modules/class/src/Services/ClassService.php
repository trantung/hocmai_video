<?php

namespace APV\Classes\Services;

use APV\Classes\Models\Classes;
use Illuminate\Support\Facades\Hash;

class ClassService
{
    public function getListClass()
    {
        $data = Classes::all();
        return $data->toArray();
    }
    
}
