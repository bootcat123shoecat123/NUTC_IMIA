<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\functionController;
use App\Http\Controllers\idController;
use App\Http\Controllers\topControll;
use App\Http\Controllers\phonecontroller;
use App\Http\Controllers\teachController;
use App\Http\Controllers\mapController;
use App\Http\Controllers\cardController;
<<<<<<< HEAD
use App\Http\Controllers\customerController;
=======
>>>>>>> aada265ce11912e69c3bcebdbcbb7dad424fbbe8

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

Route::post('/update/phone',[phonecontroller::class,'update']);
Route::post('/delete/phone',[phonecontroller::class,'delete']);
Route::post('/add/phone',[phonecontroller::class,'add']);

Route::post('/question/phone',[phonecontroller::class,'question']);
Route::post('/update/phone/{id}',[phonecontroller::class,'update']);
Route::post('/delete/phone',[phonecontroller::class,'delete']);


Route::post('/update/place',[topControll::class,'update']);
Route::post('/delete/place',[topControll::class,'delete']);
Route::post('/add/place',[topControll::class,'add']);

Route::post('/question/place',[topControll::class,'question']);
Route::post('/update/place/{id}',[topControll::class,'update']);
Route::post('/delete/place',[topControll::class,'delete']);

Route::post('/backID/Oupdate',[idController::class,'updateO']);
Route::post('/backID/Bupdate',[idController::class,'updateB']);
Route::post('/deleteB/backID',[idController::class,'deleteB']);
Route::post('/deleteO/backID',[idController::class,'deleteO']);
Route::post('/createB/backID',[idController::class,'createB']);
Route::post('/createO/backID',[idController::class,'createO']);

Route::post('/backTeach/Tupdate',[teachController::class,'updateT']);
Route::post('/delete/backTeach',[teachController::class,'deleteT']);
Route::post('/create/backTeach',[teachController::class,'createT']);

Route::post('/backFun/Fupdate',[functionController::class,'updateF']);
Route::post('/delete/backFun',[functionController::class,'deleteF']);
Route::post('/create/backFun',[functionController::class,'createF']);

<<<<<<< HEAD
Route::post('/customer/ans', [customerController::class,'updateQ']);
=======
>>>>>>> aada265ce11912e69c3bcebdbcbb7dad424fbbe8

Route::post('/backFun/Cupdate',[cardController::class,'updateC']);

Route::post('/backMap/Mupdate',[mapController::class,'updateM']);
Route::post('/delete/backMap',[mapController::class,'deleteM']);
Route::post('/create/backMap',[mapController::class,'createM']);

Route::get('/backCard', [cardController::class,'show']);
Route::get('/backFun', [functionController::class,'show']);
Route::get('/backTeach', [teachController::class,'show']);
Route::get('/backMap', [mapController::class,'show']);
Route::get('/backID', [idController::class,'show']);
Route::get('/phone', [phonecontroller::class,'show']);
Route::get('/place', [topControll::class,'show']);
Route::get('/customer', [customerController::class,'show']);
