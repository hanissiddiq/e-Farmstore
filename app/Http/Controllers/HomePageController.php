<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        // $data['laundry'] = Laundry::all();
        // return view('vHome',$data);
        return view('vHome');
    }
}
