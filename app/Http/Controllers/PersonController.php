<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class PersonController extends Controller
{
    function GetPartial()
    {
        $data = ["a" => "az"];
        return view("person/partial", $data);
    }
}
