<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    //
    protected $fillable = ['id'];

    public function city()
    {
        return $this->hasMany( 'App\Partner' );
    }
}
