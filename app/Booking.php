<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'first_name', 'last_name','weight','phone', 'picture','originLat','originLng','destinationLat','destinationLng','description','type','amount','distance','user_id','carrier_id','status',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function carrier(){
        return $this->belongsTo(User::class);
    }

}
