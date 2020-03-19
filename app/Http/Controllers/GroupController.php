<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    public function getPartial()
    {
        $groups = Group::all();
      
        return view('group.partial', compact('groups'));
    }
}
