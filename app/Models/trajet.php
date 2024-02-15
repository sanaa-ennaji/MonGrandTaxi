<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trajet extends Model
{
    use HasFactory;
   
        protected $fillable = [
             'departure', 'destination' , 'status', 'user_id',
        ];
    
        public function taxi()
        {
            return $this->belongsTo(user::class, 'user_id');
        }
    
        

  
}
