<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupPersonYear;

class APIController extends Controller
{
    function getPartial()
    {
        return view('api.partial');
    }
    function getAssociation()
    {
        $associations = GroupPersonYear::all();
        $datas=array();
        $data=array();

        foreach($associations as $association){            
            $data=array("group_name" => $association->group->name,
            "lastname" => $association->person->lastname,
            "firstname" => $association->person->firstname,
            "email" => $association->person->email ?? 'Non renseigne',
            "num" => $association->person->num,
            "directory_name" => $association->person->directory->name,
            "status_title" => $association->person->status->title);

            $datas[] = $data;
        }
        echo json_encode($datas,JSON_PRETTY_PRINT);
    }

}
