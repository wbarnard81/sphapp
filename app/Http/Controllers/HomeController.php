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
        $birthdays = Birthday::whereRaw('MONTH(curdate()) = MONTH(birthday)')
            ->orderByRaw('MONTH(birthday)')
            ->get();
        return view('home')->with('birthdays', $birthdays);
    }

    public function welcome()
    {
        return view('welcome');
    }
}
