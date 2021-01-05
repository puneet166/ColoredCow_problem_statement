<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
#Route::get('/contact', 'EmailController@index');
Route::get('/contact', [App\Http\Controllers\EmailController::class, 'index']);
#Route::post('/sendemail/send', 'EmailController@send');
Route::post('/sendemail/send', [App\Http\Controllers\EmailController::class, 'send']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/email', [App\Http\Controllers\HomeController::class, 'Email'])     ;
