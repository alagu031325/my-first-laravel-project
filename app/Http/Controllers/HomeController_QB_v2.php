<?php

namespace App\Http\Controllers;

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
        //return DB::table('posts')->get(); //-> retrieves all data as a collection to retrieve single row use find
        
        // return DB::table('posts')->find(2);
        
        //return DB::table('posts')->first(); //-> to retrieve first data from the collection
        
        //Just to retrieve the array of values of column 'title' - by just passing column name to the pluck method
        // return DB::table('posts')->pluck('title');
        
        //To retrieve as a key value pair pass the key as the second parameter
        // return DB::table('posts')->pluck('title','id');
        
        //Where condition in query builder - by default it checks for '=' operation so we can omit the second arg if it is '='
        // return DB::table('posts')->where('id','=',2)->get();
        return DB::table('posts')->where('id','>',1)->where('id','<',3)->get();
        //retrieve data based on matching column values - we can also chain our where conditions
        // return DB::table('posts')->where('status',0)->get();

        
    }
}
