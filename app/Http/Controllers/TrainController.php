<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function getTrains() {

        $trains = Train::all();

        $departingTrains = Train::where('orario_partenza', '>', now())->get();

        return view('trains', compact('trains', 'departingTrains'));
    }
}
