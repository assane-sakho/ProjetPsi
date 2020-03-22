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
      
        return view('people.partial', compact('people'));
    }

    function alreadyExist(Request $request)
    {
        if($request->numChange == 'true' && $request->lastnamOrFirstnameChange == 'false')
        {
            $personCount_ = Person::where([
                'num' => $request->num])->count();
            if($personCount_ == 0)
                return json_encode(false);
            return json_encode(true);
        }

        else if($request->lastnamOrFirstnameChange == 'true' && $request->numChange == 'false')
        {   
            $personCount = Person::where([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname])->count();

            if($personCount == 0)
                return json_encode(false);
            return json_encode(true);
        }
        else
        {
            $personCount_ = Person::where([
                'num' => $request->num])->count();

            $personCount = Person::where([
                'lastname' => $request->lastname,
                'firstname' => $request->firstname])->count();

            if($personCount == 0 && $personCount_ == 0)
            {
                return json_encode(false);
            }
            return json_encode(true);
        }
    }

    function add(Request $request)
    {
        $lastname = $request->input("addLastname") ?? $request->lastname;
        $firstname = $request->input("addFirstname") ?? $request->firstname;
        $email = $request->input("addEmail") ?? $request->email;
        $num = $request->input("addNum")?? $request->num;
        $directoryId = 1;
        $statusId = 1;
        
        if($request->directoryName != null)
        {
            $directory = Directory::where("name", $request->directoryName)->first();
            if($directory !=null)
            {
               $directoryId = $directory->id;
            }
        }
        else
        {
            $directoryId=$request->input("addDirectory");
        }

        if($request->statusTitle != null)
        {
            $status = Status::where("title", $request->statusTitle)->first();
            if($directory !=null)
            {
               $statusId = $status->id;
            }
        }
        else
        {
            $statusId=$request->input("addStatus");
        }
        Person::create(['lastname' => $lastname,'firstname' => $firstname,'email' => $email,'num' => $num, 'directory_id' => $directoryId, 'status_id' => $statusId]);
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

    public function getAll()
    {
        $people = Person::all();
        return json_encode($people);
    }
}
