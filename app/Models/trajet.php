<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trajet extends Model
{
    use HasFactory;
   
        protected $fillable = [
            'Driver_id', 'departure', 'destination', 'start_time', 'status',
        ];
    
        public function taxi()
        {
            return $this->belongsTo(user::class, 'Driver_id');
        }
    
        

  
}