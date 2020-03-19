<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupPersonYear;

class GroupPersonYearController extends Controller
{
    public function getPartial()
    {
        $data = GroupPersonYear::all();
      
        return view('groupPersonYear.partial', compact('data'));
    }
}
