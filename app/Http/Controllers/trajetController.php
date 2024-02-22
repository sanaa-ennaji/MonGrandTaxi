<?php

namespace App\Http\Controllers;

use App\Models\trajet;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
    
    public function show()
    {
        $trajets = [];
    
        if (auth()->check()) {
            $trajets = auth()->user()->userTrajets()->latest()->get();
        }
    
        return view('driver', ['trajets' => $trajets]);
    }

    public function search(Request $request)
   {
    $query = $request->input('query');

    $trajets = trajet::where('departure', 'like', '%' . $query . '%')
        ->orWhere('destination', 'like', '%' . $query . '%')
        ->get();

    return view('trajet', ['trajets' => $trajets , 'query' => $query]);
}

public function delete(trajet $trajet){
    if (auth()->user()->id == $trajet['user_id'] ){
        $trajet->reservation()->delete();
      $trajet->delete();
     } 
     return redirect('/driver');
}
  
    

}

