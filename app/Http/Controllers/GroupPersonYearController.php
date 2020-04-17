<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\GroupPersonYearHelper;

class GroupPersonYearController extends Controller
{
    public function getPartial()
    {
        $associations = GroupPersonYearHelper::getAll();

        return view('associations.partial', compact('associations'));
    }

    public function add(Request $request)
    {
        $groupId = $request->input("selectAddGroup");
        $personId = $request->input("selectAddPerson");
        $year = $request->input("selectAddYear");

        return GroupPersonYearHelper::tryAdd($groupId, $personId, $year);
    }

    public function update(Request $request)
    {
        $id = $request->editId;
        $groupId = $request->selectEditGroup;
        $year = $request->selectEditYear;

        return GroupPersonYearHelper::tryUpdate($id, $groupId, $year);
    }

    function delete(Request $request)
    {
        $id = $request->input("deleteId");

        return GroupPersonYearHelper::delete($id);
    }
}
