<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkaiciavimaiController;

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

