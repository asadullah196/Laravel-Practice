<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/','App\Http\Controllers\SiteController@Home');

Route::get('/about','App\Http\Controllers\SiteController@About');

Route::get('/contact','App\Http\Controllers\SiteController@Contact');

Route::get('/cs',function(){
    return view('GreensoftHome');
});


// Commings SOON Public View

Route::get('/cs',function(){
    return view('CommingSoon/comming_soon');
});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/greensoft',function(){
//     return "Greensoft Dhaka";
// });


// Registration form page
Route::get('/reg',function(){
    return view('CommingSoon/registration');
});