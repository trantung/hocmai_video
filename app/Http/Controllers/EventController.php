<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Event::all()->sortByDesc('id');
        return view('event.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
        if($request->has('fullScreen')){
            //Checkbox checked
            $input['fullScreen'] = 1;
        }else{
            $input['fullScreen'] = 0;
            //Checkbox not checked
        }
        if($request->has('login_require')){
            //Checkbox checked
            $input['login_require'] = 1;
        }else{
            $input['login_require'] = 0;
            //Checkbox not checked
        }
        $startTime = $endTime = null;
        if (isset($input['start_time'])) {
            $startTime = str_replace('/', '-', $input['start_time']);
            if (date('Y/m/d H:i:s', strtotime($startTime))) {
                $startTime = date('Y/m/d H:i:s', strtotime($startTime));
            }
        }
        $endTimeFormat = str_replace('/', '-', $input['end_time']);
        if (date('Y/m/d H:i:s', strtotime($endTimeFormat))) {
            $endTime = date('Y/m/d H:i:s', strtotime($endTimeFormat));
        }
        //$videoSourceId = $input['video_source_id'];
        $input['end_time'] = $endTime;
        $input['start_time'] = $startTime;
        $eventId = Event::create($input)->id;
        if (request()->file('banner')) {
            $file = $request->file('banner');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/admin/event/" . $eventId . '/banner/'), $fileNameImage);
            $imageUrl = '/uploads/admin/event/' . $eventId . '/banner/' . $fileNameImage;
        }
        
        Event::where('id', $eventId)->update(['banner' => $imageUrl]);
        return Redirect::action('EventController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Event $Event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('event.edit')->with(compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $input = $request->all();
        if($request->has('fullScreen')){
            //Checkbox checked
            $input['fullScreen'] = 1;
        }else{
            $input['fullScreen'] = 0;
            //Checkbox not checked
        }
        if($request->has('login_require')){
            //Checkbox checked
            $input['login_require'] = 1;
        }else{
            $input['login_require'] = 0;
            //Checkbox not checked
        }
        $startTime = $endTime = null;
        if (isset($input['start_time'])) {
            $startTime = str_replace('/', '-', $input['start_time']);
            if (date('Y/m/d H:i:s', strtotime($startTime))) {
                $startTime = date('Y/m/d H:i:s', strtotime($startTime));
            }
        }
        $endTimeFormat = str_replace('/', '-', $input['end_time']);
        if (date('Y/m/d H:i:s', strtotime($endTimeFormat))) {
            $endTime = date('Y/m/d H:i:s', strtotime($endTimeFormat));
        }
        $input['end_time'] = Carbon::createFromFormat('Y/m/d H:i:s' ,$endTime);
        $input['start_time'] =Carbon::createFromFormat('Y/m/d H:i:s', $startTime);

        $event = Event::find($id);
        $imageUrl = $event->banner;
        if (request()->file('banner')) {
            $file = $request->file('banner');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/admin/event/" . $id . '/banner/'), $fileNameImage);
            $imageUrl = '/uploads/admin/event/' . $id . '/banner/' . $fileNameImage;
        }
        $input['banner'] = $imageUrl;
        $event->update($input);
        return Redirect::action('EventController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return Redirect::action('EventController@index');
    }
}
