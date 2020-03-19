<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class PersonController extends Controller
{
        
    function GetPartial()
    {
        $persons = Person::all();
      
        return view('person.partial')->with(compact('persons'));
    }
}
