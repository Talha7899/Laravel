<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todocontroller;


Route::get('/todo',[todocontroller::class,'todo']);
Route::post('/todo',[todocontroller::class, 'data']);
Route::get('/todo',[todocontroller::class, 'viewtodo']);
Route::get('/todo/{id}',[todocontroller::class, 'deletetodo']);