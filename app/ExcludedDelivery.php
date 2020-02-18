<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcludedDelivery extends Model
{
    //
    protected $fillable = ['city_id', 'date', 'start_time', 'end_time'];
}
