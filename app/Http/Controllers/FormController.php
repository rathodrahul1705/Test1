<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class FormController extends Controller
{
    public function form(){

    	return view('crud.create');
    }
    public function form_submit(Request $req){

    	// dd($req->all());

		$data = new contact();
		$data->first_name = $req->first_name;
		$data->last_name = $req->last_name;
		$data->email = $req->email;
		if($req->hasfile('image')){
            $file = $req->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'. $extenstion;
            $file->move('image', $filename);
            $data->image = $filename;

        }
		$data->phone = $req->phone;
		$data->address = $req->address;
		$data->city = $req->city;
		$data->state = $req->state;
		$data->zip = $req->zip;
		$data->website = $req->website;
		$data->hosting = $req->hosting;
		$data->comment = $req->comment;

		if($data->save()) {
            $response["status"] = "success";            
        }
        else {
            $response["status"] = "failure";
        }
        return $response;
    }

    public function contact_data(){

    	$data = contact::all();

    	return view('crud.index',compact('data'));

    }
    public function edit_form($id){
    	// dd($id);

    	$data = contact::find($id);
    	// dd($data);
		return view('crud.edit',compact('data'));
    }
    public function edit_contact_submit(Request $req,$id){


    	// dd($id);

    	$data = contact::find($id);
		$data->first_name = $req->first_name;
		$data->last_name = $req->last_name;
		$data->email = $req->email;
		if($req->hasfile('image')){
            $file = $req->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'. $extenstion;
            $file->move('image', $filename);
            $data->image = $filename;

        }
		$data->phone = $req->phone;
		$data->address = $req->address;
		$data->city = $req->city;
		$data->state = $req->state;
		$data->zip = $req->zip;
		$data->website = $req->website;
		$data->hosting = $req->hosting;
		$data->comment = $req->comment;

		if($data->save()) {
            $response["status"] = "success";            
        }
        else {
            $response["status"] = "failure";
        }
        return $response;

    }

    public function delete_contact($id){

    	$data = contact::find($id);
    	if($data->delete()) {
            $response["status"] = "success";            
        }
        else {
            $response["status"] = "failure";
        }
        return redirect('/contact_data');	
    }
}
