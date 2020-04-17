<?php

namespace App\Http\Controllers;

use App\Helpers\APIHelper;


class APIController extends Controller
{
    public function getPartial()
    {
        return view('api.partial');
    }

    public function getAssociation()
    {
        echo json_encode(APIHelper::getAssociations(), JSON_PRETTY_PRINT);
    }
}
