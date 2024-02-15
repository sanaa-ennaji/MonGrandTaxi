<?php

namespace App\Http\Controllers;

use App\Models\trajet;
use Illuminate\Http\Request;

class trajetController extends Controller
{
    public function createTrajet(Request $request)
    {

        $trajet = trajet::create([
            'taxi_id' => $taxi,
            'departure_location' => $departureLocation,
            'destination_location' => $destinationLocation,
            'start_time' => $startTime,
        ]);
 
    
        return response()->json($trajet, 200);
    }
    

}

