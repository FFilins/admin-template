<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\TrixController;
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


Route::group([ "middleware" => ['auth:sanctum', config('jetstream.auth_session'), 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');
    Route::view('/dashboard2', "dashboard2")->name('dashboard2');



    Route::get('/update/{cardId}', [TesteController::class, 'index'])->name('update.view');
    Route::post('/update/editor/{cardId}', [TesteController::class, 'update'])->name('update.editor');

    Route::get('/update-trix/{cardId}', [TrixController::class, 'index'])->name('update.trix');





    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});
