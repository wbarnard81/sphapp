<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jokeContent = file_get_contents('http://api.icndb.com/jokes/random');
        // $jokesArray = json_decode($jokeContent, true);
        // $joke = $jokesArray['value']['joke'];
        // return view('home')->with('joke', $joke);
	return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
