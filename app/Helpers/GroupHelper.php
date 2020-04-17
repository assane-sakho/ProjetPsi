<?php

namespace App\Helpers;

use App\Group;

class GroupHelper
{
    public static function getAll()
    {
        return Group::all();
    }

    public static function alreadyExist($name)
    {
        $groupeCount = Group::where(['name' => $name])->count();
        if ($groupeCount == 0)
            return false;
        return true;
    }

    public static function add($name)
    {
        Group::create(['name' => $name]);
    }

    public static function tryAdd($name)
    {
        if (!self::alreadyExist($name)) {
            self::add($name);
            return ResponseHelper::returnResponseSuccess();
        } else {
            return ResponseHelper::returnResponseError('alreadyExist');
        }
    }

    public static function update($id, $name)
    {
        $group = Group::find($id);
        $group->update(['name' => $name]);
    }

    public static function tryUpdate($id, $name)
    {
        if (!self::alreadyExist($name)) {
            self::update($id, $name);
            return ResponseHelper::returnResponseSuccess();
        } else {
            return ResponseHelper::returnResponseError('alreadyExist');
        }
    }

    public static function delete($id)
    {
        $group = Group::find($id);
        $group->delete();
        return ResponseHelper::returnResponseSuccess();
    }
}
