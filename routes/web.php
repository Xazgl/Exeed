<?php


use App\Http\Controllers\IndexController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;



Route::get('/',[IndexController::class,'index'])->name('index');

Route::get('/TXL',[CarsController::class,'TXL'])->name('TXL');

Route::get('/VX',[CarsController::class,'VX'])->name('VX');


Route::post('/',[PhoneController::class, 'phone'])->name('phone');
