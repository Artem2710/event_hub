<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class EventsController extends Controller
{
    //
    protected function show()
    {
        return view('eventsOnMap');
    }

    public function gmaps()
    {
        $locations = DB::table('location')->get();

//        dd($locations);
        return view('eventsOnMap',compact('locations'));
    }
}
