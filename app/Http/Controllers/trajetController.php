<?php

namespace App\Http\Controllers;

use App\Models\trajet;
use Illuminate\Http\Request;

class trajetController extends Controller
{
    public function createTrajet(Request $request)
    {

        $trajet = trajet::create([
          
        ]);
 
    
        return response()->json($trajet, 200);
    }
    

}

