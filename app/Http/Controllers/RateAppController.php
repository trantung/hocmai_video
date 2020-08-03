<?php

namespace App\Http\Controllers;

use App\RateApp;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RateAppController extends Controller
{
    public function index()
    {
        $data = DB::table('rate_apps')->select(DB::raw('COUNT(*) as total') , 'os', 'version',DB::raw('sum(rate) as total_rate'))
            ->groupBy(['os', 'version'])
            ->having('total', '>=', 0)
            ->get();
        return view('rateapp.index')->with(compact('data'));
    }

    public function detail(Request $request){
        $data = DB::table('rate_apps')->where('os', $request->get('os'))->where('version', $request->get('version'))->get();
        //dd($data);
        return view('rateapp.detail')->with(compact('data'));
    }
    public function show(){
        dd(123);
    }
}
