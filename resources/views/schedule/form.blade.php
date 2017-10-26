@extends('layouts.master')

@section('title')
    Submit Timesheet
@endsection

@section('content')
  <form method='POST' action='/'>
    {{ csrf_field() }}

    <fieldset class='name'>
      <legend>Please enter your name (required)</legend>
      <label><input type='text' name='firstName' placeholder='First Name'></label>
      <label><input type='text' name='lastName' placeholder='Last Name'></label>
    </fieldset>

    <fieldset class='checkboxes'>
      <legend>Please indicate what days you are available to work</legend>
      <label><input type='checkbox' name='days[]' value='Monday'>Monday</label>
      <label><input type='checkbox' name='days[]' value='Tuesday'>Tuesday</label>
      <label><input type='checkbox' name='days[]' value='Wednesday'>Wednesday</label>
      <label><input type='checkbox' name='days[]' value='Thursday'>Thursday</label>
      <label><input type='checkbox' name='days[]' value='Friday'>Friday</label>
      <label><input type='checkbox' name='days[]' value='Saturday'>Saturday</label>
      <label><input type='checkbox' name='days[]' value='Sunday'>Sunday</label>
    </fieldset>

    <fieldset class='radios'>
      <legend>Please indicate if you are available to work nights (required)</legend>
      <label><input type='radio' name='nightsOk' value='yes'>Yes</label>
      <label><input type='radio' name='nightsOk' value='no'>No</label>
    </fieldset>

    <fieldset class='confirmation'>
      <legend>Double check your selections and click Confirm:</legend>
      <label><input type='submit' class='btn btn-primary' value='Confirm' name='Confirm'></label>
    </fieldset>

  </form>
@endsection
