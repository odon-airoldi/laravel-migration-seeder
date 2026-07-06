<?php

use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TrainController::class, 'indexTrains'] )->name('index');


Route::get('/departures', [TrainController::class, 'departuresTrains'])->name('departures');
