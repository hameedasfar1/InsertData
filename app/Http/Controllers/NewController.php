<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\User;
use DB;

class NewController extends Controller
{
	
    public function show()
	{
		$users = DB::table('users')->get();
	
     
			return view('view', compact('users'));
      
	}
}
