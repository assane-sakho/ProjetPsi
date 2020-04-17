<?php

namespace App\Helpers;

use App\Directory;

class DirectoryHelper
{
    public static function getAll()
    {
        return Directory::all();
    }

    public static function getDirectoryByName($name)
    {
        return Directory::where('name', $name)->first();
    }
}