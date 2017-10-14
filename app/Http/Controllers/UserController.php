<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Image;

//use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }
    
    public function profile()
    {
    	return view('users.profile',array('user' => Auth::User()));
    }
    
    public function update_avatar(Request $request)
    {
    	if ($request->hasfile('avatar'))
    	{
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(100,100)->save( public_path('/uploads/avatars/' . $filename ) );
    		
    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}
    	return view('users.profile',array('user' => Auth::User()));
    }
}
