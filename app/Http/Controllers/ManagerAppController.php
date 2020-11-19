 <?php

namespace App\Http\Controllers;

use App\HocMaiAppVersion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ManagerAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request )
    {
        $data = HocMaiAppVersion::all();
        //dd($request);
        if ($request->has('os_id')) {
            $data->where('os_id' ,$request->os_id);
          //  dd($data,'1');
        }
        if ($request->has('status')) {
            $data->where('status', $request->status);
           // dd($data,'2');
        }
        if ($request->has('app_version')) {
            $data->where('app_version', 'LIKE', '%' . $request->app_version . '%');
           // dd($data,'3');
        }
        // $data = HocMaiAppVersion::all();
        return view('hocmai_app.index')->with(compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hocmai_app.create');
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
        if ($input['status'] == APP_ACTIVE) {
            HocMaiAppVersion::whereNull('deleted_at')->update(['status' => APP_INACTIVE]);
        }
        $appVersionId = HocMaiAppVersion::create($input)->id;
        return Redirect::action('ManagerAppController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appVersion = HocMaiAppVersion::find($id);
        return view('hocmai_app.show')->with(compact('appVersion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appVersion = HocMaiAppVersion::find($id);
        return view('hocmai_app.edit')->with(compact('appVersion'));
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
        $appVersion = HocMaiAppVersion::find($id);
        $appVersion->update($input);
        return Redirect::action('ManagerAppController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HocMaiAppVersion::destroy($id);
        return Redirect::action('ManagerAppController@index');
    }
}
