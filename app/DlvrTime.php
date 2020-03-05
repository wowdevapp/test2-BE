<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DlvrTime extends Model
{
    //
    protected $fillable = ['city_id', 'delivery_time','start_time','end_time'];

    public function citiesdeliveryTimes() {
        return $this->hasMany(CitiesDeliveryTime::class);
    }
    public function excludeddeliveries() {
        return $this->hasMany(ExcludedDelivery::class);
    }
}
