<?php

use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function(){
//     return view('first');
// });
// Route::view("first",'/first');
// Route::get('/user/{name}',function($name){
//     return view('first', ["name"=>$name]);
// });
Route::get('/user',[userController::class, 'vivek']);
// Route::view('/', 'user');
Route::view('/about', 'about');

Route::get('/user', [userController::class, 'index']);
Route::view('/login', 'start');
Route::post('/user', [StartController::class, 'index']);
