<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class commentController extends Controller
{
   public function createComment (request $request){

    $request->validate([
          
        'commentaire' => 'required',
        'trajet_id' => 'required',
    ]);


    $data = [
        'commentaire' => $request->input('commentaire'),
        'user_id'=>auth()->id(),
        'trajet_id' =>$request->input('trajet_id'),

    ];

    comment::create($data);
    return redirect()->back()->with('done');

   }
   

   public function display(comment $comment)
   {
       $comment = comment::all();
       return view('trajet' ,['comments'=>$comment]);
   }
 
}
