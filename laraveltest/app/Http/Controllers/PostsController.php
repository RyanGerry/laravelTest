<?php

namespace App\Http\Controllers;

use DB;
use App\RaceResult;


class PostsController extends Controller
{
    public function show($course)
    {
        return view('post', [
            'posts' => RaceResult::where('course', $course)->get()
        ]);
    }
}
