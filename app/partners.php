<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partners extends Model
{
    //
    protected $fillable = ['id'];

    public function city()
    {
        return $this->hasMany( 'App\partners' );
    }
}
