<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\idController;
use App\Http\Controllers\topControll;
use App\Http\Controllers\phonecontroller;
use App\Http\Controllers\teachController;

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

Route::post('/backTeach/Tupdate',[teachController::class,'updateT']);
Route::get('/backTeach', [teachController::class,'show']);

Route::get('/backID', [idController::class,'show']);
Route::get('/phone', [phonecontroller::class,'show']);
Route::get('/place', [topControll::class,'show']);
