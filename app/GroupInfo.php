<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupInfo extends Model
{
    protected $table = 'group';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
    protected $guarded = 'id';
    public $timestamps = false;
}
