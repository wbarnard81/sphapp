<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NetworkMonitor;

class NetworkMonitorController extends Controller
{
    public function index()
    {
        $data = NetworkMonitor::orderByDesc('created_at')->get();

        return view('pages.network.index', compact('data', $data));
    }
}
