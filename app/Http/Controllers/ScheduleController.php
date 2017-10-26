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
    public function displaySchedule(Request $request)
    {
        return view('schedule.result')->with([
          'fullName' => $request->get('firstName').' '.$request->get('lastName'),
          'days' => $request->get('days'),
          'nights' => $request->get('nightsOk')
        ]);
    }

}
