<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $table = 'groupe';
    protected $primaryKey = 'id';
    protected $fillable = ['NOM'];
    protected $guarded = 'id';
    public $timestamps = false;
}
