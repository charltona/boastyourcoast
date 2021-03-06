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
	$stores = Store::all();
    return view('local-business', ['stores'=>$stores]);
});

Route::get('/visitor-information', function() {
    return view('visitor-information');
});

Route::get('/resident-information', function() {
    return view('resident-information');
});

Route::get('/faq', function() {
    return view('faq');
});

Route::get('/contact', function() {
    return view('contact');
});


Route::resource('store', 'StoreController');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
