<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Queries;

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
Route::get('/contact', [App\Http\Controllers\EmailController::class, 'index'])->name('contact');
#Route::post('/sendemail/send', 'EmailController@send');
Route::post('/sendemail/send', [App\Http\Controllers\EmailController::class, 'send']);

Auth::routes();
Route::post('/queries/user',[App\Http\Controllers\Queries::class, 'queriess']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/email', [App\Http\Controllers\HomeController::class, 'Email'])     ;
