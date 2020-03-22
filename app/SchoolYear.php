<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    public $primaryKey = "year";

    // public function groupPersonYear()
    // {
    //     return $this->hasMany(GroupPersonYear::class);
    // }
}
