<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index($id)
    {
        return view('admin.class.video', [
            'title' => Video::find($id)->title,
            'video' => Video::find($id),
        ]);
    }
}
