<?php

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

Route::get('/', 'LatestEvent@Showallevents' );

    //return view('layout.master');

Route::get('/categoryform', 'LatestEvent@Categoryform');
Route::post('/processcategoryform', 'LatestEvent@Processcategoryform');
Route::post('/searchbycategory', 'LatestEvent@Searchbycategory');
Route::post('/searchbylocation', 'LatestEvent@Searchbylocation');
    //return view('layout.master');


Route::get('/form', 'LatestEvent@CreateForm');

Route::view('/page', 'layout.pagecontent');

//Route::get('/form', 'LatestEvent@CreateForm');

Route::post('/store', 'LatestEvent@store');

Route::get('/viewallevents', 'LatestEvent@Viewallevents');

Route::get('/login', 'LatestEvent@Login');

Route::post('/gologin', 'LatestEvent@GoLogin');

Route::get('/home', 'LatestEvent@Showallevents' );
