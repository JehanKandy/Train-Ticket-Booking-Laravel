<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainRouteController;

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

// Route::get('/', [TrainRouteController::class, 'index']);

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', function(){
    return view('admin');
})->name('admin')->middleware('admin');

Route::get('staff', function(){
    return view('staff');
})->name('staff')->middleware('staff');

Route::get('client', function(){
    return view('client');
})->name('client')->middleware('client');

Route::resource("/users", UserController::class);
Route::resource('/comments', CommentController::class);

Route::resource('/train_routes', TrainRouteController::class);