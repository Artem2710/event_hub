<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function gmaps()
    {
        $locations = DB::table('location')->get();
        return view('gmaps',compact('locations'));
    }
}
