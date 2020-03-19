<?php

namespace App\Http\Controllers;

use App\Group;
use App\AjaxCrud;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class GroupController extends Controller
{
    function GetGroups()
    {

    }
    function AlreadyExist(Request $request)
    {
        $groupeCount = Group::where(['name' => $request->input("groupeName")])->count();
        if($groupeCount == 0)
            return json_encode(false);
        return json_encode(true);
    }

    function AddGroupe(Request $request)
    {
        $groupe = Group::create(['name' => $request->input("groupeName")]);
        return true;
    }
    
    function GetPartial()
    {
        $groups = Group::all();
      
        return view('group.partial')->with(compact('groups'));
    }
}
