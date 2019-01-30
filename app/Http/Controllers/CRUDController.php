<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use DB;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $students = Student::paginate(10);
        return view('crud.index',compact('students'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'name'=>'required',
            'roll'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
        ]);
        $student = new Student();
        $student->roll=$request->roll;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->address=$request->address;
        $student->save();
        return redirect()->route('laravel-simple-crud.index')->with('message','New Student Created Successfull !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('crud.read',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $student = Student::find($id);
        return view('crud.edit',compact('student'));
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
      $this->validate($request,[
            'name'=>'required',
            'roll'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
        ]);
        $student = Student::find($id);
        $student->roll=$request->roll;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->address=$request->address;
        $student->save();
        return redirect()->route('laravel-simple-crud.index')->with('message','Student Updated Successfull !');
    }
	
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete();
        return back()->with('message','Student Deleted Successfull !');
   
    }
}
