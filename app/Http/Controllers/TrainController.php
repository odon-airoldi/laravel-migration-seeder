<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function indexTrains() {

        $allTrains = Train::orderBy('orario_partenza', 'asc')->get();

        return view('index', compact('allTrains'));
    }

    public function departuresTrains() {

        $departingTrains = Train::where('orario_partenza', '>', now())->orderBy('orario_partenza', 'asc')->get();

        return view('trains', compact('departingTrains'));
    }
}
