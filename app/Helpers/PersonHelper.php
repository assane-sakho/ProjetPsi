<?php

namespace App\Helpers;

use App\Person;

class PersonHelper
{
    public static function getAll()
    {
        return Person::all();
    }

    public static function alreadyExist($lastname, $firstname, $num)
    {
        $personCount = Person::where([
            'num' => $num
        ])->orWhere([
            'lastname' => $lastname,
            'firstname' => $firstname
        ])->count();

        return $personCount > 0;
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
        if (!self::alreadyExist($lastname, $firstname, $num)) {
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
