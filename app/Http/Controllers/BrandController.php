<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Image;
class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.index');
    }
    //___Brand aria function __//
    public function store(Request $request){
       $request->validate([
            'brand_photo' => 'required',
       ]);
       // database insert data
        $brande = new Brand;
        $brand_photo = $request->brand_photo;
    

        if($brand_photo){
            $photoname =date('d-m-Y-H-i').'.'.$brand_photo->getClientOriginalExtension();
            $path =('media/brand/'.$photoname);
            Image::make($brand_photo)->resize(160,72)->save($path);
             $brande ['brand_photo'] = $path;
             
           }

        

        $brande->save();
       return back()->with('insert','Brand data Insert on successfully');
   
    }
  //___Create aria function __//
    public function create(){
        $brand_data = Brand::all();
        return view('admin.brand.create',compact('brand_data'));
    }

      //Delete aria function __//
    public function destroy($id){
        $brand = Brand::find($id);
        $brand->delete();
        
        return redirect()->back()->with('del','Brand data delete successfull');
        
    }


}
