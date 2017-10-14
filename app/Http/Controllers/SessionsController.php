<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	// avoid login twice
	public function __construct()
	{
//		$this->middleware('guest',['except'=>'destroy']);
	}
	
    // Sign-in page
	public function create()
	{
		auth()->logout();
		return view('sessions.create');	
	}
	
	// deal with sign-in request
	public function store()
	{
		// attempt to authenticate the user
//		dd(request(['email','password']));
		if(! auth()->attempt(request(['email','password'])))
		{
			return back();
		}
		
		session()->flash('message','Sign in successfully!');
		
		return redirect()->home();

	}
	
	// deal with sign-out request
	public function destroy()
	{
		auth()->logout();
		session()->flash('message','Sign out successfully!');
		return redirect()->home();
	}
}
