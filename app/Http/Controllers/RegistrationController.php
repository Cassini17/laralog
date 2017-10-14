<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Mail\Welcome;

class RegistrationController extends Controller
{
    //
    public function create()
    {
    	return view('registration.create');
    }
    public function store()
    {
    	// validate the form
    	$this->validate(request(),[
    		'name'=>'required|min:2',
    		'email'=>'required|email',
    		'password'=>'required|min:4|confirmed'
    	]);
    	
    	// create and save the user
    	$user = User::create([
    		'name'=>request('name'),
    		'email'=>request('email'),
    		'password'=>bcrypt(request('password'))
    	]);
   	
    	// sign them in	
    	auth()->login($user);
    	    	
		\Mail::to($user)->send(new Greeting($user));
 
 		sesssion()->flash('message','Thank you so much for signing up!');
 
    	// redirect to home
    	return redirect()->home();
    }
}
