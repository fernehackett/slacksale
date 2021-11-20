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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/install', function () {
    return view('install');
})->name('install');

Route::get('/slack-connect', [App\Http\Controllers\HomeController::class, 'connectSlack'])->name('connectSlack');
Route::get('/slack-disconnect', [App\Http\Controllers\HomeController::class, 'disconnectSlack'])->name('disconnectSlack');
Route::get('/slack-callback', [App\Http\Controllers\HomeController::class, 'callbackSlack'])->name('callbackSlack');

Route::middleware(['verify.shopify', 'billable'])->group(function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/', [App\Http\Controllers\HomeController::class, 'saveSeting'])->name('saveSeting');
});
