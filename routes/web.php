<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//indexPage
Route::get('/',[HomeController::class,'index'] );

//registerPage get
Route::get('/register',[HomeController::class,'register'] )->middleware('guest');

//registerPage Post
Route::post('/register',[HomeController::class,'registerPost'] );

//Login get
Route::get('/login',[HomeController::class,'login'] )->middleware('guest');

//Login user
Route::post('/login',[HomeController::class,'loginPost'] );

// HomePage get
// Route::get('/home',[HomeController::class,'manageLists'] )->middleware('auth');

//HomePage get
Route::get('/home',[HomeController::class,'home'] )->middleware('auth');

//HomePage List Post
Route::post('/home',[HomeController::class,'homePost'])->middleware('auth');

//Update list status
Route::post('/home/status/{list}',[HomeController::class, 'status']);

//Edit List get
Route::get('/edit/{list}',[HomeController::class,'editList']);

//Edit List Post
Route::post('/edit/{list}',[HomeController::class,'editListPost']);

//Delete List
Route::get('/delete/{list}',[HomeController::class,'deleteList']);

//Send json object of all the lists to the url
Route::get('/api/lists', [HomeController::class, 'getAllLists']);

//Logout user
Route::post('/logout',[HomeController::class,'logout'] )->middleware('auth');