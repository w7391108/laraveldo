<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home()
    {
    	return view('home1');
    }

    public function about()
    {
    	// $users = \App\User::all();
    	$users = \App\User::where('isDeleted',0)
    						->orderBy('age','sex')
    						->take(10)
    						->get();
    	foreach($users as $key => $value) {
    		var_dump($value->name);
    	}
    	return view('about');
    }


    public function store(Request $request){
    	$user = new User;

    	$user->name = $request->name;
    	$user->age = $request->age;
    	$user->sex = $request->sex;
    	$user->isDeleted = $request->isDeleted;

    	$user->save();
    }
}
