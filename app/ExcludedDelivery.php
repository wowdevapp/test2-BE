<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcludedDelivery extends Model
{
    //
    protected $fillable = ['city_id', 'date', 'delivery_time_id'];
    public function city() {
        return $this->belongsTo(City::class);
    }
    public function dlvrtime() {
        return $this->belongsTo(DlvrTime::class);
    }
}
