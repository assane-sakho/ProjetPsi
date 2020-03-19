<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupInfo extends Model
{
    protected $table = 'group_person_year';
    protected $fillable = ['name'];
    protected $guarded = [];
    public $timestamps = false;

    public function person()
    {
        return $this->hasMany(Person::class);
    }

    public function group()
    {
        return $this->hasMany(Group::class);
    }
}
