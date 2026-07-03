<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function getTrains() {

        $trains = Train::all();

        $departing_trains = Train::where('orario_partenza', '>', now())->get();

        return view('trains', compact('trains', 'departing_trains'));
    }
}
