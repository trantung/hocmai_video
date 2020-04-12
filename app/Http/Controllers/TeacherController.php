<?php

namespace App\Http\Controllers;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Teacher::all();
        return view('teacher.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
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
        $teacherId = Teacher::create($input)->id;
       // dd($teacherId);
        $file = $request->file('avatar');
        dd($file);
        $fileNameImage = $file->getClientOriginalName();
        $file->move(public_path("/uploads/teacher/" . $teacherId . '/avatar/'), $fileNameImage);
        $imageUrl = '/uploads/teacher/' . $teacherId . '/avatar/' . $fileNameImage;
        dd($imageUrl);
        $teacherId->save();
        return Redirect::action('TeacherController@index');
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
        $teacher = Teacher::find($id);
        return view('teacher.edit')->with(compact('teacher'));
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
        $teacher = Teacher::find($id);
        $imageUrl = $teacher->avatar;
        $file = request()->file('avatar');
        // dd($file);
         if ($file) {
             $fileNameImage = $file->getClientOriginalName();
          //  dd($fileNameImage);
            $file->move(public_path("/uploads/teacher/"),$fileNameImage);
            $imageUrl = '/uploads/teacher/'.$fileNameImage;
 
         }
         $input['avatar'] = $imageUrl;
        $teacher->update($input);
        return Redirect::action('TeacherController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::destroy($id);
        return Redirect::action('TeacherController@index');
    }
}
