<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class CompletionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $video = Video::findOrFail($request->videoId);

        auth()->user()->complete($video);
    }
}
