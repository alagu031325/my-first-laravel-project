<?php

namespace App\Http\Controllers;

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
        //Insert more than one entry into the table
        // DB::table('posts')->insert([
        //     [
        //         'title' => 'This is test blog 4',
        //         'description' => 'Lorem Ipsum generated text for blog 4',
        //         'status'=>0,
        //         'publish_date'=>date('Y-m-d'),
        //         'user_id'=>7
        //     ],
        //     [
        //         'title' => 'This is test blog 5',
        //         'description' => 'Lorem Ipsum generated text for blog 5',
        //         'status'=>0,
        //         'publish_date'=>date('Y-m-d'),
        //         'user_id'=>8
        //     ],
        //     ]);

        //Update a row in the table
        // DB::table('posts')->where('id',5)->update([
        //     'title' => 'This is test blog 1',
        //     'user_id'=>'9'
        // ]);

        //dd('success');

        // DB::table('posts')->where('id',4)->delete();

        //we can also delete by passing an id value to the delete method
        // DB::table('posts')->delete(5);
        // dd('success');

        //Join two tables with common field - joining posts table with categories table by comparing posts table category_id with categories table id column - and we can also select which table data we want to see
        // return DB::table('posts')->join('categories','posts.category_id','=','categories.id')->select('categories.*')->get();

        //Aggregate methods 
        //return DB::table('posts')->count(); //counts existing number of rows

        /**
         * max() - retrieves the max value
         * min() - retrieves the min value
         * avg()
         * sum()
         */
        
         //sum of the values in views column 
         return DB::table('posts')->sum('views');
    }
}
