<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request. - When route is hit this method will be *invoked automatically 
     * 
     * Soft delete only works with Eloquent and not on Query Builder
     */
    public function __invoke(Request $request)
    {
        // Mass assignment - way to insert/update data into DB
        /* $post = Post::create([
            'title' => 'Mass assignment - row1',
            'description' => 'Created from eloquent create method',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'category_id' => 2,
            'views' => 500
        ]); */
        //we dont need to call save method to save data - it will automatically create a row in the DB

        //Update data via Mass Assignment 
        /* $post = Post::find(5)->update([
            'title' => 'post5 updated',
            'description' => 'Description for post 5 updated'
        ]);
        */

        //select all rows with status=1 and update the value of status - updating multiple rows at the same time
        /* $post = Post::where('status','1')->update([
            'status' => 0
        ]); */

        /* Soft Deleting or Trashing - we should use special methods to retrieve those data - Implement softDeletes
        Doesnt delete the actual row but updates deleted_at field
         */        
        //Post::where('id',5)->delete();
        //5 will not be retrieved since it has deleted_at value - soft deleted
        //return Post::all();

        //How to view trash data - selects all trashed data and we are retrieving them
        // return Post::onlyTrashed()->get();

        //Restore a record from trash 
        /* Post::withTrashed()->find(5)->restore();
        return Post::all(); */

        // To delete a record permanently
        Post::withTrashed()->find(4)->forceDelete();

        dd('success');

    }
}
