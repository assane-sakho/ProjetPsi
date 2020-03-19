<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';
    protected $primaryKey = 'id';
    protected $fillable = ['lastname','firstname','email','num','directoryId','statusId'];
    protected $guarded = 'id';
    public $timestamps = false;
}
