<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolYear;

class SchoolYearController extends Controller
{
    public function getAll()
    {
        $schoolYears = SchoolYear::all();
        return json_encode($schoolYears);
    }
}
