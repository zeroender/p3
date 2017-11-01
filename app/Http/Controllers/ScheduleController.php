<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
    * GET of /
    * Displays the initial form
    */
    public function index()
    {
        return view('schedule.form');
    }

    /**
    * POST of /
    * Validates the form data, if successful redirects user to display
    */
    public function submit(Request $request)
    {
        $this->validate($request, [
          'firstName' => 'required|alpha',
          'lastName' => 'required|alpha',
          'days' => 'required',
          'nightsOk' => 'required'
        ]);

        return redirect('/display')->with([
          'fullName' => $request->get('firstName').' '.$request->get('lastName'),
          'days' => $request->get('days'),
          'nights' => $request->get('nightsOk')
        ]);
    }

    /**
    * GET of /display
    * checks for session data, if any is missing, redirects user back to form
    * otherwise displays sucess message and form data
    */
    public function register(Request $request)
    {
        if (! session()->has('fullName') || ! session()->has('days') ||
        ! session()->has('nights')) {
            return redirect('/');
        } else {
            return view('schedule.result')->with([
              'fullName' => session('fullName'),
              'days' => session('days'),
              'nights' => session('nights'),
            ]);
        }
    }
}
