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

    function alreadyExist(Request $request)
    {
        $groupeCount = Group::where(['name' => $request->input("groupeName")])->count();
        if($groupeCount == 0)
            return json_encode(false);
        return json_encode(true);
    }

    function add(Request $request)
    {
        $groupe = Group::create(['name' => $request->input("groupeName")]);
        return true;
    }

    function update(Request $request)
    {
        $id = $request->input("editId");
        $name = $request->input("editName");
        $group = Group::where('id',$id);
        $group-> update(['name' => $name]);
    }

    function delete(Request $request)
    {
        $id = $request->input("deleteId");
        $group = Group::where('id',$id);
        $group-> delete();
        echo $id;
    }
}
