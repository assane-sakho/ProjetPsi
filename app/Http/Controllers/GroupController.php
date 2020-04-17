<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GroupHelper;

class GroupController extends Controller
{
    public function getPartial()
    {
        $groups = GroupHelper::getAll();
        return view('groups.partial', compact('groups'));
    }

    public function alreadyExist(Request $request)
    {
        $name = $request->name;
        return GroupHelper::alreadyExist($name);
    }

    public function add(Request $request)
    {
        $name = $request->addName;
        return GroupHelper::tryAdd($name);
    }

    public function update(Request $request)
    {
        $id = $request->input("editId");
        $name = $request->input("editName");

        return GroupHelper::tryUpdate($id, $name);
    }

    public function delete(Request $request)
    {
        $id = $request->input("deleteId");

        return GroupHelper::delete($id);
    }

    public function getAll()
    {
        return json_encode(GroupHelper::getAll());
    }
}
