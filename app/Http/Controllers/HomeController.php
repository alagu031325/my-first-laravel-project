<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Handle the incoming request. - When route is hit this method will be *invoked automatically 
     */
    public function __invoke(Request $request)
    {
        return view('home');
        // Delete files from local storage
        //Storage::delete('wp_logo.png');
        //By default it uses the path from .env filesystem settings but to explicitly specify the disk path use disk
        // Storage::disk('public')->delete('wp_logo.png');
        //dd('success');

        //File facade - storage_path() is a helper method to render the full path of the application - can execute it in tinker 
        //File::delete(storage_path('/app/public/wp_logo.png'));

        //unlink helper function - takes file full path to delete it
        //unlink(storage_path('/app/public/wp_logo.png'));

        // To return data in json format
        //$posts = POST::all();
        // return response()->json($posts);
        //return response($posts); //we will still get the json data
    }
}
