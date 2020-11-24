<?php

namespace App\Http\Controllers;

use App\hocmai_cods;
use App\HocmaiCod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HocMaiCodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $fromTo = $request['formto'];
         $to = $request['to'];
         $status = $request['status'];
        $data = HocmaiCod::all()->sortByDesc('id');
        if($fromTo !=null && $to !=null && $status != null){
            $data = DB::table('hocmai_cods')->where('created_at', '>=', $fromTo)
            ->where('created_at',"<=", $to)
            ->where('status',$status)
            ->get();
            //dd($data);
        }
         if($fromTo !=null && $to !=null && $status == null){
            $data = DB::table('hocmai_cods')->where('created_at', '>=', $fromTo)
            ->where('created_at',"<=", $to)
            ->get();
        }
        if($fromTo == null && $to == null && $status != null){
            $data = DB::table('hocmai_cods') ->where('status',$status)
            ->get();
        }
        return view('hocmaicod.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hocmaicod.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $classId = HocmaiCod::create($input)->id;
        return Redirect::action('HocMaiCodController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = HocmaiCod::find($id);
        return view('hocmaicod.show')->with(compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = HocmaiCod::find($id);
        return view('hocmaicod.edit')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $hocmaivideo = HocmaiCod::find($id);
        $hocmaivideo->update($input);
        return Redirect::action('HocMaiCodController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HocmaiCod::destroy($id);
        return Redirect::action('HocMaiCodController@index');
    }
}
