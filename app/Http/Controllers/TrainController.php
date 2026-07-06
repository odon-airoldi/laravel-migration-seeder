<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function indexTrains() {

        $allTrains = Train::all();

        return view('index', compact('allTrains'));
    }

    public function departuresTrains() {

        $trains = Train::all();

        $departingTrains = Train::where('orario_partenza', '>', now())->get();

        return view('trains', compact('departingTrains'));
    }
}
