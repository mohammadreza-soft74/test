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

//Route::get("/","Register@home");

Route::post("/register","Register@register");

Route::get("/home",function (){
	return view("home");
});

Route::get("/wel",function (){
	return view("welcome");
});

Route::resource("customer","database");

