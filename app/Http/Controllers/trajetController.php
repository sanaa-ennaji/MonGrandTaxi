<?php

namespace App\Http\Controllers;

use App\Models\trajet;
use Illuminate\Http\Request;

class trajetController extends Controller
{
    public function createTrajet (Request $request)
    {

        $trajet =$request->validate([
            'departure' => ['required'],
            'destination' => ['required'],
        ]);
        
        $trajet['user_id'] = auth()->id();
        trajet::create($trajet);
       return response()->json($trajet, 200);
    }
    
  

}

