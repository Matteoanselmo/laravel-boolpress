<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('andim.')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});

Route::get('/contacts', 'Admin\ContactController@contact')->name('contacts.contact');
Route::post('/contacts', 'Admin\ContactController@mailSender')->name('contacts.sender');
Route::get('/contacts/recived', 'Admin\ContactController@recived')->name('contacts.recived');

