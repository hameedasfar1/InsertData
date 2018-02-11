<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	function insert(Request $request)
	{
		$Date=$request->input('Date');
		$Invoiceno =$request->input('Invoiceno');
		$Name =$request->input('Name');
		$Description =$request->input('Description');
	    $Attachment =$request->input('Attachment');
		$Expensecatogery =$request->input('Expensecatogery');
		$Amount =$request->input('Amount');
	    $Location =$request->input('Location');
		
		
		$data= array("Date"=>$Date,"Invoiceno"=>$Invoiceno,"Name"=>$Name,"Description"=>$Description,
		"Attachment"=>$Attachment,"Expensecatogery"=>$Expensecatogery,"Amount"=>$Amount,"Location"=>$Location);
		
		DB::table('students')->insert($data);
		
		
		echo "succefully inserted";
		
	}
	function getData()
	
	{
	$data['data'] =DB::table('students')->get();
	if(count($data) > 0)
	  {
		  return view('insert',$data);
	  }
	  else
	  {
		  return view('insert');
		  
	  }
	}
	 
}