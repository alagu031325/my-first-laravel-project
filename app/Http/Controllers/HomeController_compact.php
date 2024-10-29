<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request. - When route is hit this method will be *invoked automatically 
     */
    public function __invoke(Request $request)
    {
       // Multi dimensional arrays 
       $blogs = [
        [
            'title' => 'Title One',
            'body' => 'This is body text under title one',
            'status' => 1
        ],
        [
            'title' => 'Title Two',
            'body' => 'This is body text under title two',
            'status' => 1
        ],
        [
            'title' => 'Title Three',
            'body' => 'This is body text under title three',
            'status' => 0
        ],
        [
            'title' => 'Title Four',
            'body' => 'This is body text under title four',
            'status' => 0
        ]
        ];
    return view('home',compact('blogs'));
    }
}
