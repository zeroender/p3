<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
    * GET of /
    */
    public function index()
    {
        return view('schedule.form');
    }

    /**
    * POST of form... eventually
    */
    public function displaySchedule()
    {
        return view('schedule.result');
    }

}
