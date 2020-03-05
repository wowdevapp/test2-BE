<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CitiesDeliveryTime extends Model
{
    //
    protected $fillable = ['delivery_time_id','city_id'];


    public function city() {
        return $this->belongsTo(City::class);
    }
    public function dlvrtime() {
        return $this->belongsTo(DlvrTime::class);
    }
}
