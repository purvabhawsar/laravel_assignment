<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function crud()
    {
    	return view("crud-page");
    }
    public function savecrud(Request $request)

 {
        DB::table('students')->insert([
             'studname'=>$request->name,
             'course'=>$request->course
        	]);
        return back()->with('show',"successfull");
    }
    public function showList()
    {
    	$posts=DB::table("students")->get();
    	return view('student-list',compact("posts"));
    }
    public function editList($id)
    {
        $elist=DB::table("students")->where('id',$id)->first();
        return view('edit-field',compact('elist'));
    }
    public function updateList(Request $request)
    {
    	DB::table('students')->where('id',$request->id)->update([
             'studname'=>$request->name,
             'course'=>$request->course

    		]);
    	return back()->with('showupdate',"successfull");

    }
    public function deleteList($id)
    {
        DB::table('students')->where('id',$id)->delete();
         //return view('student-list',compact('z'));
    }
}
