<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class StatusController extends Controller
{
    public function getStatuses()
    {
        $statuses = Status::all();
        echo json_encode($statuses);
    }
}
