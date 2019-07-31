<?php

namespace App\Http\Controllers;
use App\License;

use Illuminate\Http\Request;

class YatayatController extends Controller
{
    public function create()
    {
    	return view('yatayat.create');
    }

    public function store(Request $request )
    {
    	$request->validate([
    		'name'=> 'required',
    		'fathername' =>'required',
    		'gender' => 'required',
    		'nationality'=>'required',
    		'past_catagory' =>'required',
    		'apply_for' => 'required',
    		'image' => 'mimes:jpeg,bmp,png'

    	]);
    	$license = new License;
    	$license->name = $request->name;
    	$license->fathername = $request->fathername;
    	$license->gender = $request->gender;
    	$license->past_catagory = implode(',', $request->past_catagory);
    	$license->apply_for = $request->apply_for;
    	$license->nationality = $request->nationality;
    	$license->save();
    	$path=$request->file('image')->store('license');
    	$license->image= $path;
    	$license->save();
    	return redirect()->back();
    }
}
