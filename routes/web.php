<?php

use App\Http\Controllers\FlightsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SuccessController;
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

Route::get('/', [HomeController::class, 'inicial']);

Route::get('/voos', [FlightsController::class, 'voo'])->name('flights');

Route::get('/cadastro', [RegisterController::class, "create"])->name('user.register');

Route::post('/cadastro', [RegisterController::class, "store"])->name('user.register');

Route::get('/pagamento', [PaymentController::class, 'pagar'])->name('payment');

Route::get('/passagens', [RegisterController::class, 'index'])->name('user.info');

Route::get('/sucesso', [SuccessController::class, "pagamentoRealizado"]);
