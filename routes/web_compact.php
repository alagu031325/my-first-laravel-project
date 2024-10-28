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

Route::get('about', function () {
    $about = 'This is about';
    $company = 'E-commerce';
    // folder name . file name - to pass dynamic data to our templates - we can also use compact('about') - so that this variable is available to our blade file
    //return view('about.index',['about' => $about]);
    return view('about.index',compact('about','company'));
    //compact fn generates the above assosiative array - more than 1 variable can be passed
});

Route::get('contact',function(){
    return view('contact');
});

