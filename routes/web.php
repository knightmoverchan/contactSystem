<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', function () {
    if (Auth::check())
    {
        return view('contacts.create_contact');
    }
    else{
        return view('auth.register');
    }
});
Route::get('/home', function () {
    return view('home');
});

Route::resource('contacts','App\Http\Controllers\ContactController');
