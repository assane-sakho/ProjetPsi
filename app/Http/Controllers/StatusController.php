<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class StatusController extends Controller
{
    public function getStatuses()
    {
        $statuses = Status::all();
        return json_encode($statuses);
    }
}
