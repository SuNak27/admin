<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->user());
        return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }
}
