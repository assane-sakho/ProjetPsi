<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupPersonYear;
use GroupPersonYear as GlobalGroupPersonYear;

class GroupPersonYearController extends Controller
{
    public function getPartial()
    {
        $associations = GroupPersonYear::all();
      
        return view('groupPersonYear.partial', compact('associations'));
    }
    function add(Request $request)
    {
        $groupId = $request->input("addGroup");
        $personId = $request->input("addPerson");
        $year = $request->input("addYear");

        $groupe = GroupPersonYear::create(['group_id' => $groupId,'person_id' => $personId,'year' => $year]);
        return true;
    }
    function update(Request $request)
    {
        $id = $request->input("editGroupPersonYearId");
        $groupId = $request->input("editGroup");
        $year = $request->input("editYear");

        $group = GroupPersonYear::where('id',$id);
        $group-> update(['group_id' => $groupId,'year' => $year]);
    }

    function delete(Request $request)
    {
        $id = $request->input("deleteId");
        $group = GroupPersonYear::where('id',$id);
        $group-> delete();
    }
}
