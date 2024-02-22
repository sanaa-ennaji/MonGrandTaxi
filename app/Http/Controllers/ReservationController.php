<?php

namespace App\Http\Controllers;

use auth;
use Carbon\Carbon;

use Dotenv\Validator;
use App\Models\trajet;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReservationController extends Controller
{
   

    public function createReservation(Request $request)
    {
        $request->validate([
          
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
        ]);
    
        $data = [
            'user_id' => auth()->id(),
            'trajet_id' => $request->input('trajet_id'),
            'reservation_date' => $request->input('reservation_date'),
            'reservation_time' => $request->input('reservation_time'),
        ];
    
        $dateTimeString = $data['reservation_date'] . ' ' . $data['reservation_time'];
    
        $reservedTime = Carbon::parse($dateTimeString);
    
        Reservation::create([
            'trajet_id' => $data['trajet_id'],
            'user_id' => $data['user_id'],
            'reserved_time' => $reservedTime,
          
        ]);
    
        return redirect()->back()->with('success', 'Reservation successful');
    }
    
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);
    
        $reservation = Reservation::findOrFail($id);
        $reservation->status = $request->input('status');
        $reservation->save();
    
        return redirect()->back()->with('success', 'Reservation status updated successfully');
    }
    
 
  
    






















     public function showForm($trajetId)
    {
        $trajet = trajet::findOrFail($trajetId);
        return view('/reservation', compact('trajet'));
    }
}
