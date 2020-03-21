<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;

class DirectoryController extends Controller
{
    public function getDirectories()
    {
        $directories = Directory::all();
        return json_encode($directories);
    }
}
