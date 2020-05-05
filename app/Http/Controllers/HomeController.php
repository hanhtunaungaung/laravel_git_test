<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home',[

    	  "name" => "Home Page"
    	]);
    }

    public function phpPage()
    {
    	$data = array(
    		"lesson1" => "php lesson1",
    		"lesson2" => "php lesson2",
    		"lesson3" => "php lesson3",
    	);

    	return view('php', compact('data'));
    }

    public function jsPage()
    {
    	$data = array(
    		"lesson1" => "js lesson1",
    		"lesson2" => "js lesson2",
    		"lesson3" => "js lesson3",
    	);

    	return view('js', compact('data'));
    }
}
