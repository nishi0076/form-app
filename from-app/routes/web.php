<?php

use App\Http\Controllers\ContactsController;
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

Route::get('/contact', [ContactsController::class, 'index'])->name('index');
Route::post('/contact', [ContactsController::class, 'post'])->name('post');

Route::get('/contact/confirm', [ContactsController::class, 'confirm'])->name('confirm');
Route::post('/contact/confirm', [ContactsController::class, 'send'])->name('send');

Route::get('/contact/thanks', [ContactsController::class, 'complete'])->name('complete');