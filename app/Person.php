<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['lastname','firstname','email','num','directory_id','status_id'];
    protected $guarded = [];
    public $timestamps = false;

    public function status()
    {
        return $this->hasOne(Statut::class);
    }
    
    public function directory()
    {
        return $this->hasOne(Directory::class);
    }

    public function groupInfo()
    {
        return $this->hasMany(GroupInfo::class);
    }
}
