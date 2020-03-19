<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'group';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
    protected $guarded = 'id';
    public $timestamps = false;
}
