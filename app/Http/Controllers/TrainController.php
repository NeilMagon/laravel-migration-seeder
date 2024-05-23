<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function todaysTrains() {
        $trains = Train::whereDate('departure_datetime', '>=', today())->get();

        $data = [
            'trains' => $trains
        ];

        return view('today-train', $data);
    }
}
