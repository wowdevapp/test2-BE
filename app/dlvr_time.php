<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dlvr_time extends Model
{
    //
    protected $fillable = ['city_id', 'delivery_time'];

    public function City() {

        return $this->belongsTo(city::class);
    }
}
