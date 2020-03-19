<?php

namespace App\Http\Controllers;

use App\GroupInfo;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class GroupInfoController extends Controller
{
    function GetPartial()
    {
        $groupsInfo = GroupInfo::all();
        return view('groupInfo.partial', compact('groupsInfo'));
    }
}
