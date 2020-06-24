<?php

namespace App\Http\Controllers;

// class PostsController extends Controller
// {
//     public function show($course)
//     {
//        $post = \DB::table('raceresults')->where('course', $course)->first();

//         return view('post', [
//             'post' => $post[$post]
//         ]);
//     }
// }

class PostsController extends Controller
{
    public function show($course)
    {
       return 'HelloWorld';
    }
}