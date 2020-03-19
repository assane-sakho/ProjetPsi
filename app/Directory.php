<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $fillable = ['name'];
    protected $guarded = [];
    public $timestamps = false;

    public function directory()
    {
        return $this->hasMany(Person::class);
    }
}
