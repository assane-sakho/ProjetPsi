<?php

namespace App\Helpers;

use App\SchoolYear;

class SchoolYearHelper
{
    public static function add($year)
    {
        SchoolYear::create(['year' => $year]);
    }

    public static function tryAddYear($year)
    {
        $schoolYear = SchoolYear::find($year);

        if($schoolYear == null)
        {
            SchoolYear::create(['year' => $year]);
        }
    }

    public static function getAll()
    {
        return SchoolYear::all();
    }
}