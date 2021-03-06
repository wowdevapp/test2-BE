<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //
    protected $fillable = ['name','partner_id'];

    public function citiesdeliveryTimes() {
        return $this->hasMany(CitiesDeliveryTime::class);
    }
    public function excludeddeliveries() {
        return $this->hasMany(ExcludedDelivery::class);
    }
    

    public function partners() {
        return $this->belongsTo(Partner::class);
    }
}
