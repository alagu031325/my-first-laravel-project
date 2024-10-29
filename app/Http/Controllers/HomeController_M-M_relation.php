<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request. - When route is hit this method will be *invoked automatically 
     */
    public function __invoke(Request $request)
    {
        //One to Many relationship 
        // $categories = Category::all();
        // To retrieve all posts related to category id 1 
        // $categories = Category::find(1)->posts;
        // return view('home',compact('categories'));

        /* Many to Many relationship 
        post may have many tags
        tag may have many posts 
        To implement this relationship we use 
        pivot table (third table)*/
        // $post = Post::first();

        //pass the method name 'tags'
        $posts = Post::with('tags')->get();
        $tag = Tag::first();

        // $post->tags()->attach($tag);
        //we can also pass list of tags to be attached to post
        // $post->tags()->attach([2,3,4]);
        return view('home',compact('posts'));

    }
}
