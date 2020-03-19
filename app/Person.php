<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public function directory()
    {
        return $this->belongsTo('App\Directory');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

}
