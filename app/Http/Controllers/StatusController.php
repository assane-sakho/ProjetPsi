<?php

namespace App\Http\Controllers;

use App\Helpers\StatusHelper;

class StatusController extends Controller
{
    public function getAll()
    {
        return json_encode(StatusHelper::getAll());
    }
}
