<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request. - When route is hit this method will be *invoked automatically 
     */
    public function __invoke(Request $request)
    {
        /**
         * Eloquent Models - sends collection of data 
         * 1. Retriving all data
         * 2. Retriving single data
         * 3. Retriving a single data or throw error
         * If data row created with Eloquent then created_at field is populated and when * updated through eloquent updated_at field is edited
         */

        // similar to 'get' method in the QB to access all data - Model name should always be singular from table name (this will look for posts table) - if we are changing the Model name we need to specify the table name
        //$posts = Post::all();

        // Iterating the returned collection 
        /* foreach($posts as $post){
            echo $post->title . '<br>';
        } */

        //pass the id to the find method to retrieve single data
        //$post = Post::find(2);
        //to retrieve just the value of the title column
        //return $post->title;

        //Retrive single data or throw error 
        // $post = Post::findOrFail(5); - throws 404 NOT Found error to the user

        //all grabes all data so we use get when we use 'where' conditions in our query - we can chain where conditions - all where conditions must be satisfied to return data
        // return Post::where('views','<',100)->where('id',3)->get();

        //orWhere condition - if first where condition is true the second wont rule if first query is false, then the second query will run
        //If both conditions fail we wont get any data 
        // return Post::where('views','<',10)->orWhere('id',3)->get();

        //Insert data/Save with Eloquent - gives more flexibility in creating data
        /* $post = new Post();
        $post->title = 'post 4';
        $post->description = 'This post created with eloquent';
        $post->status = 1;
        $post->publish_date = date('Y-m-d');
        $post->category_id = 3;
        $post->views=200;

        //save all the above data in db
        $post->save();

        dd('success'); */

        //Using save method to update data in DB - selectind DB row and then updating in Object oriented way
        /* $post = Post::find(1); 
        //we can also use where condition
        // $post = Post::where('id',2)->first() - we cant use get since it returns collection and we cant use save mthd on collections but first just retrieves single data
        $post->title = "This is post1";
        $post->description = "post1 description updated via eloquent";
        $post->save();

        dd('success'); */

        //Delete a row with Eloquent - we can also use findOrFail to throw error if data with particular id is not found
        //Post::find(2)->delete();
        Post::where('id',3)->delete();
        dd('success');

    }
}
