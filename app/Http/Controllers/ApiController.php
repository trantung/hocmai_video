<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\SchoolBlock;

class ApiController extends Controller
{
	public function index()
	{
		$data = SchoolBlock::all();
		$result = [];
		foreach ($data as $key => $value) {
			$result[$key]['school_block_id'] = $value->id;
			$result[$key]['school_block_name'] = $value->name;
		}
		$response = array(
			'status' => 'success',
			'data' => $result
        );
        return response()->json($response); 
	}

	    
}
