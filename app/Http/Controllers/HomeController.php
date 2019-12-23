<?php

namespace App\Http\Controllers;

use App\Birthday;
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
        $birthdays = Birthday::whereRaw('DAYOFYEAR(curdate()) <= DAYOFYEAR(birthday)')
            ->orderByRaw('DAYOFYEAR(birthday)')
            ->get();
        return view('home')->with('birthdays', $birthdays);
    }

    public function welcome()
    {
        return view('welcome');
    }
}
