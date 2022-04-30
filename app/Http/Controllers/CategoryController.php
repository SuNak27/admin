<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index($id)
    {
        return view('welcome.category', [
            'category' => Category::find($id),
        ]);
    }
}
