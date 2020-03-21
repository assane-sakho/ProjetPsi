<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    // public function person()
    // {
    //     return $this->belongsTo(Person::class);
    // }
}
