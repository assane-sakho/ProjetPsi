<?php

namespace App\Helpers;

use App\Person;

class PersonHelper
{
    public static function getAll()
    {
        return Person::all();
    }

    public static function alreadyExist($lastname, $firstname, $num, $id = null)
    {
        $people =  Person::where([
            'lastname' => $lastname,
            'firstname' => $firstname
        ])->orWhere([
            'num' => $num
        ])->get();

        $peopleExceptCurrent = Person::where('id', '!=', $id)->get();

        $intersect = $people->intersect($peopleExceptCurrent);

        return ($intersect->count() >= 1);
    }

    public static function tryAdd($lastname, $firstname, $email, $num, $directoryId, $statusId)
    {
        if (!self::alreadyExist($lastname, $firstname, $num)) {
            self::add($lastname, $firstname, $email, $num, $directoryId, $statusId);
            return ResponseHelper::returnResponseSuccess();
        } else {
            return ResponseHelper::returnResponseError('alreadyExist');
        }
    }

    public static function add($lastname, $firstname, $email, $num, $directoryId, $statusId)
    {
        Person::create([
            'lastname' => $lastname,
            'firstname' => $firstname,
            'email' => $email,
            'num' => $num,
            'directory_id' => $directoryId,
            'status_id' => $statusId
        ]);
    }

    public static function tryUpdate($id, $lastname, $firstname, $email, $num, $directoryId, $statusId)
    {
        if (!self::alreadyExist($lastname, $firstname, $num, $id)) {
            self::update($id, $lastname, $firstname, $email, $num, $directoryId, $statusId);
            return ResponseHelper::returnResponseSuccess();
        } else {
            return ResponseHelper::returnResponseError('alreadyExist');
        }
    }

    public static function update($id, $lastname, $firstname, $email, $num, $directoryId, $statusId)
    {
        Person::find($id)->update([
            'lastname' => $lastname,
            'firstname' => $firstname,
            'email' => $email,
            'num' => $num,
            'directory_id' => $directoryId,
            'status_id' => $statusId
        ]);
    }

    public static function delete($id)
    {
        Person::find($id)->delete();
        ResponseHelper::returnResponseSuccess();
    }
}
