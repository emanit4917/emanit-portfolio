<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index(){
        return view('admin.education.index');
    }

    public function store(Request $request){
        $request->validate([
               'short_dec'=> 'required',
               'edu_title'=> 'required',
               'years'=> 'required',
               'skill_heading'=> 'required',
               'parchentage'=> 'required',
               'edu_photo'=> 'required',

        ]);

        $education_data = new Education;
        $education_data->short_dec =$request->short_dec;
        $education_data->edu_title =$request->edu_title;
        $education_data->years =$request->years;
        $education_data->skill_heading =$request->skill_heading;
        $education_data->parchentage =$request->parchentage;
        $education_data->edu_photo =$request->edu_photo;
        $education_data->save();

        return back()->with('success', 'Education data insert successfully');

    }

    public function createedu(){
        $edu_data = Education::all();
        return view('admin.education.create',compact('edu_data'));
    }

    public function destroy($id){
        Education::find($id)->delete();
        return back()->with('del','Education data delete successfull');
    }
}
