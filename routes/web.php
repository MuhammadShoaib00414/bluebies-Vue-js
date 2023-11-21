<?php

use Illuminate\Support\Facades\Route;
// use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

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

Route::get('/{any}', function ($any = null) {
    if(strpos($any, 'images/') === 0) {
        return response()->file(public_path($any));
    } else {
        return view('layouts.app');
    }
})->where("any",".*");
