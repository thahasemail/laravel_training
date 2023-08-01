<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/","LoginController@login")->name('login');
Route::post("do-login","LoginController@doLogin")->name('do.login');


Route::group(['middleware' => 'user_auth'], function(){
    Route::get("logout","LoginController@logout")->name('logout');
    Route::get("users","FrontEndController@home")->name("home"); //->middleware('user_auth');
    Route::get("new-user","FrontEndController@create")->name("user.create");
    Route::post("user-save","FrontEndController@save")->name("user.save");
    Route::get("edit-user/{userId}","FrontEndController@edit")->name("user.edit");
    Route::post("user-update","FrontEndController@update")->name("user.update");
    Route::get("delete-user/{userId}","FrontEndController@delete")->name("user.delete");
}); 





Route::get("about-us","FrontEndController@aboutUs")->name("about.us");

//Route::get("home","FrontEndController@home")->name("home");


// Route::group(["prefix" => "user", "as" => "user."],function(){

//     Route::get("home","FrontEndController@userHome")->name("home");

// });

