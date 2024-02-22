<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable =[
       'user_id' ,
      'trajet_id',
       'reserved_time',
       'status',


    ];

    public function passanger()
    {
        return $this->belongsTo(user::class, 'user_id');
    }

    public function trajetreserve()
    {
        return $this->belongsTo(user::class, 'trajet_id');
    }
     
}
