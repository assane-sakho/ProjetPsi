<?php

namespace App\Http\Controllers;

use App\Helpers\DirectoryHelper;

class DirectoryController extends Controller
{
    public function getAll()
    {
        return json_encode(DirectoryHelper::getAll());
    }
}
