<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\HocMaiHeader;
use App\HocMaiFooter;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public function validateTime($input, $model, $id = null)
    {
        $start = $input['start_time'];
        $end = $input['end_time'];
        if ($start >= $end) {
            return TIME_ERROR_1;
        }
        //start nam trong khoang start_time va end_time cua ban ghi trong db
        if ($id) {
            $data = $model::where('id', '!=', $id)->get();
        } else {
            $data = $model::all();
        }
        // dd($input);
        foreach ($data as $key => $value) {
            //start nam trong khoang start_time va end_time cua ban ghi trong db
            if ($value->start_time <= $start && $start <= $value->end_time) {
                return TIME_ERROR_2;
            }
            //end nam trong khoang start_time va end_time cua ban ghi trong db
            if ($value->start_time <= $end && $end <= $value->end_time) {
                return TIME_ERROR_3;
            }
            //start < start_time va end > end_time ban ghi trong db
            if ($start <= $value->start_time && $end >= $value->end_time) {
                return TIME_ERROR_4;
            }
        }
        return TIME_DEFAULT;
    }

    public function sendBackWithError($message)
    {
        Session::flash('message', $message);
        return Redirect::back()->withInput();
    }

}
