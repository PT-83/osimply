<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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


Route::get('/about', 'MainController@about'); 
Route::get('/', 'MainController@home'); 
Route::get('/pricing', 'MainController@pricing'); 

Route::get('/contact.create', 'ContactController@create');
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
 //add  'subscribed' inside middleware to activate billing paywall. from dashboard 