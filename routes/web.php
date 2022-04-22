<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;

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

Route::get('login', [ChatController::class, 'loginWithId'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('home', [ChatController::class, 'index'])->name('chat.index');
    Route::get('send-message', [ChatController::class, 'sendMessage'])->name('chat.send-message');
});
