<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;

class CounterController extends Controller
{
    public function index(){
        return view('admin.counter.index');
    }
    public function storecounter(Request $request){
        $request->validate([
            'count_number'=> 'required',
            'count_icon'=> 'required',
            'count_title'=> 'required',
           

     ]);

    $counter_data = new Counter;
    $counter_data->count_number = $request->count_number;
    $counter_data->count_icon = $request->count_icon;
    $counter_data->count_title = $request->count_title;
    $counter_data->save();

     return back()->with('success', 'counter data insert successfully');

    }

    public function createcount(){
        $counter_data = Counter::all();
        return view('admin.counter.create',compact('counter_data'));
    }
    public function deletecounter($id){
        Counter::find($id)->delete();
        return redirect()->back()->with('del','counter data delete successfully');
    }

}
