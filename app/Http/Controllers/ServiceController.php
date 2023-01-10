<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        return view('admin.service.index');
    }
    public function storeservice (Request $request){
        $request->validate([
            'head_title'=> 'required',
            'short_desc'=> 'required',
            'icons'=> 'required',
     
            ]);
    
        // database insert data
           $service_data = New Service;
           $service_data->head_title = $request->head_title;
           $service_data->short_desc = $request->short_desc;
           $service_data->icons = $request->icons;
         
           $service_data->save();
        
        // Navbar::insert([
        //     'navbar'=>$request->navbar,
        //     'link'=>$request->link,
        //    ]);
        return back()->with('success','Service item data insert successfully!');
       
    }

    public function views(){
        $service_data = Service::all();
        return view('admin.service.view',compact('service_data'));
    }
    public function delete($id){
       Service::find($id)->delete();

       return redirect()->back()->with('del','Service data delete success');
    }
       
}
