<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //
    protected $fillable = ['name','partner_id'];
    
    public function dlvr_time() {
        return $this->hasMany(dlvr_time::class);
    }

    public function partners() {
        return $this->belongsTo(partners::class);
    }
}
