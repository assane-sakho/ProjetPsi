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
    function add(Request $request)
    {
        $id = $request->input("addId");
        $lastName = $request->input("addLastname");
        $firstName = $request->input("addFirstname");
        $email = $request->input("addEmail");
        $num=$request->input("addNum");
        $idDirectory=$request->input("addDirectory");
        $idStatus=$request->input("addStatus");

        $groupe = Person::create(['lastname' => $lastName,'firstname' => $firstName,'email' => $email,'num' => $num, 'directory_id' => $idDirectory, 'status_id' => $idStatus]);
        return true;
    }
    function update(Request $request)
    {
        $id = $request->input("editId");
        $lastName = $request->input("editLastname");
        $firstName = $request->input("editFirstname");
        $email = $request->input("editEmail");
        $num=$request->input("editNum");
        $idDirectory=$request->input("editDirectory");
        $idStatus=$request->input("editStatus");

        $group = Person::where('id',$id);
        $group-> update(['lastname' => $lastName,'firstname' => $firstName,'email' => $email,'num' => $num, 'directory_id' => $idDirectory, 'status_id' => $idStatus]);
    }

    function delete(Request $request)
    {
        $id = $request->input("deleteId");
        $group = Person::where('id',$id);
        $group-> delete();
    }

}
