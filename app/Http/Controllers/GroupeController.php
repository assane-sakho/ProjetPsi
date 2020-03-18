<?php

namespace App\Http\Controllers;

use App\Groupe;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class GroupeController extends Controller
{
    function GetGroupes()
    {

    }
    function AlreadyExist(Request $request)
    {
        $groupeCount = Groupe::where(['NOM' => $request->input("groupeName")])->count();
        if($groupeCount == 0)
            return json_encode(false);
        return json_encode(true);
    }

    function AddGroupe(Request $request)
    {
        $groupe = Groupe::create(['NOM' => $request->input("groupeName")]);
        return true;
    }
}
