<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    function getPartial()
    {
        return view('api.partial');
    }
}
