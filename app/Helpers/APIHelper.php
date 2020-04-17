<?php

namespace App\Helpers;

class APIHelper
{
    public static function getAssociations()
    {
        $associations = GroupPersonYearHelper::getAll();
        $datas = array();
        $data = array();

        foreach ($associations as $association) {
            $data = array(
                "group_name" => $association->group->name,
                "lastname" => $association->person->lastname,
                "firstname" => $association->person->firstname,
                "email" => $association->person->email ?? 'Non renseigne',
                "num" => $association->person->num,
                "directory_name" => $association->person->directory->name,
                "status_title" => $association->person->status->title
            );

            $datas[] = $data;
        }
        return $datas;
    }
}
