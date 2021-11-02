<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
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


Route::get('/','HomeController@index');
Route::get('/redirects','HomeController@redirects');
Route::get('/showcart/{id}','HomeController@showcart');
Route::post('/orderconfirm','HomeController@orderconfirm');
Route::get('/removeshowcart/{id}','HomeController@removeshowcart');
Route::post('/addcart/{id}','HomeController@addcart');
Route::get('/search','AdminController@search');
Route::get('/users','AdminController@user');
Route::get('/deleteuser/{id}','AdminController@deleteuser');
Route::get('/deletefoodmenu/{id}','AdminController@deletefoodmenu');
Route::get('/Orders','AdminController@Orders');
Route::get('/updatefoodview/{id}','AdminController@updatefoodview');
Route::post('/updatefood/{id}','AdminController@updatefood');
Route::get('/foodmenu','AdminController@foodmenu')->name('foodmenu');
Route::post('/addfood','AdminController@addfood')->name('addfood');
Route::post('/reservation','AdminController@reservation')->name('reservation');
Route::get('/Adminreservation','AdminController@Adminreservation')->name('Adminreservation');
Route::get('/Adminchefs','AdminController@Adminchefs')->name('Adminchefs');
Route::post('/uploadchefs','AdminController@chefupload')->name('uploadchefs');
Route::get('/editchef/{id}','AdminController@editchef')->name('editchef');
Route::post('/savechefs/{id}','AdminController@savechefs')->name('savechefs');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/add-post','PostController@addPost');
Route::Post('/Created','PostController@createPost')->name('post.create');
Route::get('/posts','PostController@getPost');