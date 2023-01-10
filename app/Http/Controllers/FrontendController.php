<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Navbar,Banner,Socail,Education,Contact,Address,Service,Counter,Portfolio,Testimonial,Brand};


class FrontendController extends Controller
{
    public function frontend(){
        $nav_data = Navbar::all();
        $banners = Banner::latest()->limit(1)->get();
        $socail = Socail::all();
        $education_alls = Education::all();
        $address_data = Address::all();
        $service = Service::all();
        $counter_data = Counter::all();
        $portfolios = Portfolio::all();
        $testmoniales = Testimonial::all();
        $brande_data = Brand::all();
        return view('frontend.index',compact('nav_data','banners','socail','education_alls','address_data','service',
        'counter_data','portfolios','testmoniales','brande_data'));
    }

       public function store(Request $request){
    // database insert data
       $data = New Contact;
       $data->name = $request->name;
       $data->email =$request->email; 
       $data->message = $request->message;
       $data->save();
        return redirect()->back();
    }
}
