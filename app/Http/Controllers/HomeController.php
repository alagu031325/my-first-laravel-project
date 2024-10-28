<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request. - When route is hit this method will be *invoked automatically 
     */
    public function __invoke(Request $request)
    {
        // similar to get in our QB 
        $posts = Post::all();
    }
}
