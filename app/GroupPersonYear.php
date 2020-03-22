<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupPersonYear extends Model
{
    protected $guarded = [];
    protected $table = 'group_person_year';
    public $timestamps = false;

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
