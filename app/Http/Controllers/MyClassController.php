<?php

namespace App\Http\Controllers;

use App\Models\MyClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyClassController extends Controller
{
    public function index()
    {
        return view('dashboard.myclass', [
            'title' => 'Kelas Saya',
            'classes' => MyClass::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
