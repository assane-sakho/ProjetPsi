<?php

namespace App\Http\Controllers;

use App\Helpers\DirectoryHelper;
use Illuminate\Http\Request;
use App\Helpers\PersonHelper;
use App\Helpers\StatusHelper;

class PersonController extends Controller
{
    public function getPartial()
    {
        $people = PersonHelper::getAll();
        return view('people.partial', compact('people'));
    }

    public function alreadyExist(Request $request)
    {
        $lastname =  $request->lastname;
        $firstname =  $request->firstname;
        $num = $request->num;

        return json_encode(PersonHelper::alreadyExist($lastname, $firstname, $num));
    }

    function add(Request $request)
    {
        $lastname = $request->addLastname;
        $firstname = $request->addFirstname;
        $email = $request->addEmail;
        $num = $request->addNum;
        $directory =  $request->addDirectory;
        $status =  $request->addStatus;

        PersonHelper::tryAdd($lastname, $firstname, $email, $num, $directory, $status);
    }

    function addFromImport(Request $request)
    {
        $lastname = $request->lastname;
        $firstname = $request->firstname;
        $email = $request->email;
        $num = $request->num;
        $directoryName = $request->directoryName;
        $statusTitle = $request->statusTitle;

        $directory_id = DirectoryHelper::getDirectoryByName($directoryName)->id;
        $status_id = StatusHelper::getStatusByTitle($statusTitle)->id;
        
        PersonHelper::add($lastname, $firstname, $email, $num, $directory_id, $status_id);
    }

    function update(Request $request)
    {
        $id = $request->editId;
        $lastname = $request->editLastname;
        $firstname = $request->editFirstname;
        $email = $request->editEmail;
        $num = $request->editNum;
        $directory = $request->editDirectory;
        $status = $request->editStatus;

        PersonHelper::tryUpdate($id, $lastname, $firstname, $email, $num, $directory, $status);
    }

    function delete(Request $request)
    {
        $id = $request->deleteId;
        PersonHelper::delete($id);
    }

    public function getAll()
    {
        return json_encode(PersonHelper::getAll());
    }
}
