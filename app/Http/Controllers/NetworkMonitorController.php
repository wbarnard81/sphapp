<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NetworkMonitor;

class NetworkMonitorController extends Controller
{
    public function index()
    {
        $data = NetworkMonitor::orderByDesc('created_at')->paginate(50);

        return view('pages.network.index', compact('data', $data));
    }
}
