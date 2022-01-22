<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\MessageEventController;
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

Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');

Route::get('/sse/messages', [MessageEventController::class, 'index'])->name('sse.messages.index');
