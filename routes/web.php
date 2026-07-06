<?php

use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {

        return view('index');
    }
)->name('index');


Route::get('/trains', [TrainController::class, 'getTrains']);
