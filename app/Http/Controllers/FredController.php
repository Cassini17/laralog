<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FredController extends Controller
{
    //
    public static function info()
    {
    	phpinfo();
    }
    
    public static function test()
    {
    	return view('test.index');
    }
}
