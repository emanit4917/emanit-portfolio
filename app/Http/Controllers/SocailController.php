<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socail;

class SocailController extends Controller
{
        //Soical function __//
        public function social(){
            $socail_data = Socail::all();
            return view('admin.social.index',compact('socail_data'));
         }
         public function socialstore(Request $request){
            //   $request->validate([
            //     'links'=> 'required',
            //  ]);
             
                $socail = new Socail;
                $socail->links = $request->links;
                $socail->icon_name = $request->icon_name;
                $socail->links = $request->links;
                $socail->save();
                return back();
         }

         public function destory($id){
            Socail::find($id)->delete();
            return back();
         }
}
