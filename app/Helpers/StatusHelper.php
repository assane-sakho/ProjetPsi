<?php

namespace App\Helpers;

use App\Status;

class StatusHelper
{
    public static function getAll()
    {
        return Status::all();
    }

    public static function getStatusByTitle($title)
    {
        return Status::where('title', $title)->first();
    }
}