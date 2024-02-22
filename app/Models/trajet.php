<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class trajet extends Model
{
    use HasFactory;
   
        protected $fillable = [
             'departure', 'destination' , 'status', 'user_id',
        ];
         
        protected $dates = [
            'reserved_time',
       
        ];
        public function driver()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        public function reservation ()
        {
            return $this->hasMany(reservation::class);
        }
      
    
        

  
}
