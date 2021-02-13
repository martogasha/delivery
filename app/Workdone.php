<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workdone extends Model
{
    protected $fillable = [
        'first_name', 'last_name','weight','phone', 'picture','originLat','originLng','destinationLat','destinationLng','description','type','amount','distance','user_id','carrier_id','status',
    ];
}
