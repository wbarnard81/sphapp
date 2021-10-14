<?php

namespace App\Http\Controllers;

use App\Birthday;
use App\Document;
use App\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $birthdays = Birthday::whereRaw('MONTH(curdate()) = MONTH(birthday)')
            ->orderByRaw('MONTH(birthday)')
            ->get();

        $documents = Document::all();

        return view('home', ['birthdays' => $birthdays, 'documents' => $documents]);
    }

    public function welcome()
    {
        return view('welcome');
    }
}
