<?php

namespace App\Http\Controllers;

use App\GroupInfo;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class GroupInfoController extends Controller
{
    function GetPartial()
    {
        $data = ["a" => "az"];
        return view("groupInfo/partial", $data);
    }
}
