<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

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
    return view('Home');
});
Route::get('/about',[pageController::class,'pageAbout'])->name('pageAbout');
Route::get('/contact',[pageController::class,'pageContact'])->name('pageContact');
Route::get('/team',[pageController::class,'pageTeam'])->name('pageTeam');
Route::get('/home',[pageController::class,'pageHome'])->name('pageHome');
