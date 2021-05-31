<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data=CustomerModel::get();
        return view('index',compact('data'));

    }

    public function store(Request $request)
    {
        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'gender' => 'required',
            'phone' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',

        ]);


        $e_image=$request->file('image');
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($e_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $img_location='image/customer/';
        $last_img=$img_location.$img_name;
        $e_image->move($img_location,$img_name);

        $emp=CustomerModel::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'active' => $request->active,
            'image' => $last_img,
        ]);

        return redirect()->route('index.customer');

    }

    public function create()
    {

        return view('customer');
    }

    public function edit($id)
    {
        $data=CustomerModel::find($id);
        return view('edit',compact('data'));

    }

    public function update(Request $request,$id)
    {
        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);

        $old_image=$request->old_image;


        $e_image=$request->file('image');
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($e_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $img_location='image/customer/';
        $last_img=$img_location.$img_name;
        $e_image->move($img_location,$img_name);
        unlink($old_image);

        CustomerModel::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'active' => $request->active,
            'image' => $last_img,

        ]);

        return redirect()->route('index.customer');
    }

    public function delete($id){
        $data=CustomerModel::find($id);
        $old_image=$data->image;
        unlink($old_image);
        CustomerModel::find($id)->delete();
        return redirect()->back();
    }

    public function view($id){
        $item=CustomerModel::find($id);
        return view('view',compact('item'));
    }

    public function search(){
        $search=$_GET['searchdata'];
        $data=CustomerModel::where('name','LIKE','%'.$search.'%')
                                   ->orWhere('email','LIKE','%'.$search.'%')
                                   ->orWhere('phone','LIKE','%'.$search.'%')
                                   ->get();

        return view('search',compact('data'));
    }
}
