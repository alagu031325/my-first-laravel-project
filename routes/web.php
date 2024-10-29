<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
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
// :: - special way in PHP to refer to the fully qualified name (namespace) of a class
//Route::get('/home',[HomeController::class,'index']);

Route::get('/about', [AboutController::class,'index']);

Route::get('/contact',[ContactController::class, 'index']);

// For resource controller we need to specify only the classname 
Route::resource('/blog',BlogController::class);

//Single action controller - if we want only 1 method in our controller 
Route::get('/home',HomeController::class);

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::get('/success',function(){
    return '<h1>Successfully uploaded</h1>';
})->name('success');

Route::post('/login',[LoginController::class,'handleLogin'])->name('login.submit');

Route::post('/upload-file',[ImageController::class,'handleImage'])->name('upload-file');

Route::get('/download',[ImageController::class, 'download'])->name('download');


