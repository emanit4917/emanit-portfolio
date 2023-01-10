<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navbar;
use Auth;
class NavbarController extends Controller

{
   
   public function view(){
    $navdata = Navbar::all();
    
    return view('admin.menubar.index',compact('navdata'));

   }
   public function create(Request $request){
    $request->validate([
        'navbar'=> 'required',
        'link'=> 'required',
 
        ]);

    // database insert data
       $data = New Navbar;
       $data->navbar = $request->navbar;
       $data->auth_name = Auth::user()->name;
       $data->link = $request->link;
       $data->save();
    
    // Navbar::insert([
    //     'navbar'=>$request->navbar,
    //     'link'=>$request->link,
    //    ]);
    return back()->with('success','Menu item data insert successfully!');
   }

   public function delete($id)
    {
        $nav_id = Navbar::find($id);
        $nav_id->delete();

        return back()->with('success', 'User has been deleted');
    }

 
}
