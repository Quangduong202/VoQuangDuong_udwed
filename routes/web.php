<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usertroller;
Route::get('/', function () {
    return view('welcome');
});
Route::get("/",function(){ echo "Hello World!"; });
Route::get("home", function(){ return "Home"; });
Route::get("welcome", function(){return view("welcome");});
Route::get("user",[Usertroller::class,"index"]);
Route::get("user/1",[Usertroller::class,"show"]);
Route::get("user/{id}/edit",[Usertroller::class,"edit"])->name("user.edit");
Route::get("user/list/{page?}",[Usertroller::class,"list"])->name("user.list");
