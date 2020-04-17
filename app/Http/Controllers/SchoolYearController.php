<?php

namespace App\Http\Controllers;

use App\Helpers\SchoolYearHelper;

class SchoolYearController extends Controller
{
    public function getAll()
    {
        return json_encode(SchoolYearHelper::getAll());
    }
}
