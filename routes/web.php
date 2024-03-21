<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[UserController::class,'showLogin'])->name('showLogin');

Route::post('/',[UserController::class,'login'])->name('login');

Route::get('/logout',[UserController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/home', [HomeController::class, 'inicial'])->name('home');

Route::get('/voos', [FlightsController::class, 'voo'])->name('flights');

Route::get('/cadastro', [RegisterController::class, "create"])->middleware('auth')->name('user.register');

Route::post('/cadastro', [RegisterController::class, "store"])->middleware('auth')->name('user.register');

Route::get('home/pagamento', [RegisterController::class, "index"])->name('payment');

Route::get('/sucesso', [SuccessController::class, "pagamentoRealizado"])->name('donePayment');


Route::delete('/cards/{id}', [CardController::class, 'destroy'])->name('cards.destroy');
