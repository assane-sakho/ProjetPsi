<?php

namespace App\Helpers;

use App\GroupPersonYear;

class GroupPersonYearHelper
{
    public static function getAll()
    {
        return GroupPersonYear::all();
    }

    public static function add($groupId, $personId, $year)
    {
        GroupPersonYear::create([
            'group_id' => $groupId,
            'person_id' => $personId,
            'year' => $year
        ]);
    }

    public static function alreadyExist($groupId, $personId, $year)
    {
        $groupPersonYears = GroupPersonYear::where([
            'group_id' => $groupId,
            'person_id' => $personId,
            'year' => $year
        ])->count();

        return $groupPersonYears > 0;
    }

    public static function tryAdd($groupId, $personId, $year)
    {
        if (!self::alreadyExist($groupId, $personId, $year)) {
            SchoolYearHelper::tryAddYear($year);
            self::add($groupId, $personId, $year);
            return ResponseHelper::returnResponseSuccess();
        } else {
            return ResponseHelper::returnResponseError('alreadyExist');
        }
    }

    public static function tryUpdate($id, $groupId, $year)
    {
        $groupPersonYear = GroupPersonYear::find($id);
        $personId = $groupPersonYear->person_id;

        if (!self::alreadyExist($groupId, $personId, $year)) {
            SchoolYearHelper::tryAddYear($year);
            self::update($id, $groupId, $year);
            return ResponseHelper::returnResponseSuccess();
        } else {
            return ResponseHelper::returnResponseError('alreadyExist');
        }
    }

    public static function update($id, $groupId, $year)
    {
        GroupPersonYear::find($id)->update([
            'group_id' => $groupId,
            'year' => $year
        ]);
    }

    public static function delete($id)
    {
        $group = GroupPersonYear::where('id', $id);
        $group->delete();
    }
}
