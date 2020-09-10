<?php

namespace App\Http\Controllers;

use App\HocMaiFooter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = HocMaiFooter::all()->sortByDesc('id');
        return view('footer.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('footer.create');
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
        $validateTime = $this->validateTime($input, 'App\HocMaiFooter');
        if ($validateTime == TIME_ERROR_1) {
            return $this->sendBackWithError('thời gian bắt đầu phải nhỏ hơn thời gian kết thúc');
        }
        if ($validateTime == TIME_ERROR_2) {
            return $this->sendBackWithError('thời gian bắt đầu nằm trong khoảng thời gian đã có');
        }
        if ($validateTime == TIME_ERROR_3) {
            return $this->sendBackWithError('thời gian kết thúc nằm trong khoảng thời gian đã có');
        }
        if ($validateTime == TIME_ERROR_4) {
            return $this->sendBackWithError('thời gian bắt đầu và kết thúc bị sai');
        }
        $footerId = HocMaiFooter::create($input)->id;
        if (request()->file('image')) {
            $file = $request->file('image');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/admin/footer/" . $footerId . '/image/'), $fileNameImage);
            $imageUrl = '/uploads/admin/footer/' . $footerId . '/image/' . $fileNameImage;
        }
        HocMaiFooter::where('id', $footerId)->update(['image' => $imageUrl]);
        return Redirect::action('FooterController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footer = HocMaiFooter::find($id);
        return view('footer.edit')->with(compact('footer'));
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
        $validateTime = $this->validateTime($input, 'App\HocMaiFooter', $id);
        // dd($validateTime);
        if ($validateTime == TIME_ERROR_1) {
            return $this->sendBackWithError('thời gian bắt đầu phải nhỏ hơn thời gian kết thúc');
        }
        if ($validateTime == TIME_ERROR_2) {
            return $this->sendBackWithError('thời gian bắt đầu nằm trong khoảng thời gian đã có');
        }
        if ($validateTime == TIME_ERROR_3) {
            return $this->sendBackWithError('thời gian kết thúc nằm trong khoảng thời gian đã có');
        }
        if ($validateTime == TIME_ERROR_4) {
            return $this->sendBackWithError('thời gian bắt đầu và kết thúc bị sai');
        }
        $footer = HocMaiFooter::find($id);
        $imageUrl = $footer->image;
        if (request()->file('image')) {
            $file = $request->file('image');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/admin/footer/" . $id . '/image/'), $fileNameImage);
            $imageUrl = '/uploads/admin/footer/' . $id . '/image/' . $fileNameImage;
        }
        $input['image'] = $imageUrl;
        $footer->update($input);
        return Redirect::action('FooterController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HocMaiFooter::destroy($id);
        return Redirect::action('FooterController@index');
    }
}
