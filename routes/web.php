<?php
use App\Store;

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
    $featuredstores = Store::where('featured', 1)->limit(8)->get();
    return view('welcome', ['featuredstores'=>$featuredstores]);
});


Route::get('/local-business', function() {
    return view('local-business');
});

Route::get('/visitor-information', function() {
    return view('visitor-information');
});

Route::get('/resident-information', function() {
    return view('resident-information');
});


Route::resource('store', 'StoreController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
