<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index(){
       
        return view('admin.address.index');
    }

    public function storeaddress(Request $request){
        //  $request->validate([
        //     'short_desc'=> 'required',
        //     'loc_name'=> 'required',
        //     'address'=> 'required',
        //     'phone'=> 'required',
        //     'email'=> 'required',
        //     'soc_icon'=> 'required',
        //    ]);

        $contacts_data = new Address;

        $contacts_data->short_desc = $request->short_desc;
        $contacts_data->loc_name = $request->loc_name;
        $contacts_data->address = $request->address;
        $contacts_data->phone = $request->phone;
        $contacts_data->email = $request->email;
        $contacts_data->soc_icon = $request->soc_icon;
    
        $contacts_data->save();
        
        return back()->with('contacts','Contact information data Insert on successfully');
    }

    public function create(){
        $address_all = Address::all();
        return view('admin.address.create',compact('address_all'));
    }

    public function delete($id){
        Address::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $data = Address::find($id);
        return view('admin.address.edit',compact('data'));
    }

    public function updatededit(Request $request , $id){
        $request->validate([
            'short_desc' => 'required',
            'loc_name' => 'required',
            'address' => 'required',
            'phone' => 'required',    
            'email' => 'required',        
            'soc_icon' => 'required',
        ]);
            
       

        $add_data = Address::find($id);        
        $add_data->short_desc = $request->short_desc;        
        $add_data->loc_name = $request->loc_name;        
        $add_data->address = $request->address;        
        $add_data->phone = $request->phone;        
        $add_data->email = $request->email;        
        $add_data->soc_icon = $request->soc_icon;        
        $add_data->save();

        return redirect()->back()->with('updated', 'Address Data Updated');
    }
   

}
