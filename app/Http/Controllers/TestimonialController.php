<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Image;

class TestimonialController extends Controller
{
    //__Testmonial Index Method Function __//
    public function index(){
        return view('admin.testmonial.index');
    }

    //__Testmonial Index Method Function __//
    public function store(Request $request){
        $request->validate([
            'title_name'=> 'required',
            'title_head'=> 'required',
            'short_desc'=> 'required',
            'testmonial_photo'=> 'required',
     
            ]);
    
        // database insert data
           $testmonial_data = New Testimonial;
           $testmonial_data->title_name = $request->title_name;
           $testmonial_data->title_head = $request->title_head;
           $testmonial_data->short_desc = $request->short_desc;
           $testmonial_photo = $request->testmonial_photo;
                
            if($testmonial_photo){
                  $photoname =date('d-m-Y-H-i').'.'.$testmonial_photo->getClientOriginalExtension();
                  $path =('media/testmonial/'.$photoname);
                 Image::make($testmonial_photo)->resize(86,86)->save($path);
                 $testmonial_data ['testmonial_photo'] = $path;
              }
             $testmonial_data->save();
        
        // Navbar::insert([
        //     'navbar'=>$request->navbar,
        //     'link'=>$request->link,
        //    ]);
        return back()->with('success','Testmonial Photo  insert successfully!');
    }

//__Testmonial Create Method Function __//
    public function create(){
        $testm_data = Testimonial::all();
        return view('admin.testmonial.create',compact('testm_data'));
    }

//__Testmonial destroy Method Function __//
    public function destroy($id){
        $testm_data = Testimonial::find($id)->delete();;
        return redirect()->back()->with('del','Testmonial data delete successfully');
    }

//__Testmonial Edit Method Function __//
    public function edit($id){
        $testm = Testimonial::find($id);
       return view('admin.testmonial.edit',compact('testm'));
    }

    
//__Testmonial Edit Method Function __//
    public function update(Request $request, $id){
        $test_alls = Testimonial::find($id);
        $test_alls->title_name = $request->title_name;
        $test_alls->title_head = $request->title_head;
        $test_alls->short_desc = $request->short_desc;
       
        $test_alls->update();

        return redirect()->route('testmonial.create')->with('status','Testmonial Updated Successfully');
    }

}
