<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function groupPersonYear()
    {
        return $this->belongsToMany('App\GroupPersonYear');
    }
}
