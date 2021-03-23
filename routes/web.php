<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkaiciavimaiController;
use App\Http\Controllers\Skaiciavimai2Controller;
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

Route::get('suma/{a}/{b}/', [SkaiciavimaiController::class, 'suma']);
           //url kelias                                //kontrolerio metodo vardas
Route::get('daugyba/{a}/{b}', [SkaiciavimaiController::class, 'daugyba']);
Route::get('dalyba/{a}/{b}', [SkaiciavimaiController::class, 'dalyba']);
Route::get('atimtis/{a}/{b}', [SkaiciavimaiController::class, 'atimtis']);

Route::get('calc', [Skaiciavimai2Controller::class, 'show'])->name('show-calc');
Route::post('calc', [Skaiciavimai2Controller::class, 'calc'])->name('do-math');
//sitas metodas nieko nerodo, tik paskaiciuoja ir atgal sudeda//vardas jo, bleide galima dabar duoti jiems prasymus