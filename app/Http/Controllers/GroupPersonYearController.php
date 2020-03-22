<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupPersonYear;
use App\SchoolYear;

use GroupPersonYear as GlobalGroupPersonYear;

class GroupPersonYearController extends Controller
{
    public function getPartial()
    {
        $associations = GroupPersonYear::all();
      
        return view('associations.partial', compact('associations'));
    }

    function alreadyExist(Request $request)
    {
        $year = SchoolYear::find($request->year);
        if($year == null)
        {
            SchoolYear::create(['year' => $request->year]);
        }

        $association = GroupPersonYear::where([
            'group_id' => $request->groupId,
            'person_id' => $request->personId,
            'year' => $request->year])->count();

        if($association == 0)
        {
            return json_encode(false);
        }
        return json_encode(true);
    }

    function add(Request $request)
    {
        $groupId = $request->input("selectAddGroup");
        $personId = $request->input("selectAddPerson");
        $year = $request->input("selectAddYear");

        $groupe = GroupPersonYear::create(['group_id' => $groupId,'person_id' => $personId,'year' => $year]);
    }
    
    function update(Request $request)
    {
        $id = $request->input("editId");
        $groupId = $request->input("selectEditGroup");
        $year = $request->input("selectEditYear");

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
