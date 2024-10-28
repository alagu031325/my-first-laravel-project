<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Named routes
Route::get('about',function(){
    return '<h1>About Page</h1>';
})->name('abt');

Route::get('about/{id}',function($id){
    return $id;
})->name('abt-id');

//Generating URL to a named route 
Route::get('home',function(){
    return '<a href="'.route('abt-id',137).'">About</a>';
});

//Route Grouping - we can change prefix in one place which will affect all the other routes
Route::group(['prefix'=>'customer'],function(){
    Route::get('/',function(){
        return '<h1> Customer List </h1>';
    });
    Route::get('/show',function(){
        return '<h1> Customer Show </h1>';
    });
    Route::get('/create',function(){
        return '<h1> Customer Create </h1>';
    });
});

//Route Methods
/**
 * GET - To request a resource from the database
 * POST - To create a new resource 
 * PUT - To update a resource in the db (update multiple resource at the same time)
 * PATCH - To modify a resource in the db
 * DELETE - delete a resource from the db
 * 
 */

// Fallback Route - should be at the bottom of the file 
Route::fallback(function(){
    return "Requested Route doesn't Exist";
});