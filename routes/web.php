<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthorController;
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
    return view('front.pages.example');
});

// Route::prefix('author')->name('author.')->group(function(){

//     Route::middleware(['guest:web'])->group(function(){
//         Route::view('/login','back.pages.auth.login')->name('login');
//         Route::view('/forgot-password','back.pages.auth.forgot')->name('forgot-password');
//     });

//     Route::middleware(['auth:web'])->group(function(){
//         Route::get('/home',[AuthorController::class, 'index'])->name('home');
//     });
// });