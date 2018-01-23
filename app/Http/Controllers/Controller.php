<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Requests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	function insert(Request $request)
	{
		$firstname =$request->input('firstname');
		$lastname =$request->input('lastname');
		$data= array("firstname"=>$firstname,"lastname"=>$lastname);
		
		DB::table('students')->insert($data);
		
		
		echo "succefully inserted";
		
	}
	
}
