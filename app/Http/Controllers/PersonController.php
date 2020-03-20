<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Status;
use App\Directory;

class PersonController extends Controller
{
    public function getPartial()
    {
        $people = Person::all();
      
        return view('person.partial', compact('people'));
    }

}
