<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TicketController;
use GuzzleHttp\Middleware;

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

Route::get('', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authens']);


Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/home', function () {
    return view('home');
})->middleware('auth');



Route::get('/ticket', [TicketController::class,'index'])->middleware('auth');
Route::post('/createticket', [TicketController::class,'store']);

Route::get('/yourticket', [TicketController::class,'show'])->middleware('auth');



// Route::get('/ticket/{ticket:id}/edit',[TicketController::class,'edit']);
// Route::post('/editticket',[TicketController::class,'update']);

Route::get('/ticket/{ticket:id}/delete', [TicketController::class,'destroy'])->middleware('auth');

Route::resource('/tickets', TicketController::class)->middleware('auth');

Route::post('/logout', [LoginController::class,'logout']);
