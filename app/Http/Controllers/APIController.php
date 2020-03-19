<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class APIController extends Controller
{
    function GetPartial()
    {
        $data = ["a" => "az"];
        return view("api/partial", $data);
    }
}
