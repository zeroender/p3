@extends('layouts.master')

@section('title')
    Submit Schedule
@endsection

@push('head')
    <link href="/css/form.css" type ='text/css' rel='stylesheet'>
@endpush

@section('content')

    <form method='POST' action='/'>
        {{ csrf_field() }}

        <fieldset class='name'>
            <legend>Please enter your name (required)</legend>
            @if($errors->get('firstName'))
                <ul>
                    @foreach($errors->get('firstName') as $error)
                        <li class='error'>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <label><input type='text' name='firstName' placeholder='First Name'
              value={{ old('firstName')}}></label>
            @if($errors->get('lastName'))
                <ul>
                    @foreach($errors->get('lastName') as $error)
                        <li class='error'>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <label><input type='text' name='lastName' placeholder='Last Name'
              value={{ old('lastName')}}></label>
        </fieldset>

        <fieldset class='checkboxes'>
            <legend>Please indicate what days you are available to work (at least one day is required)</legend>
            @if($errors->get('days'))
                <ul>
                    @foreach($errors->get('days') as $error)
                        <li class='error'>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <label><input type='checkbox' name='days[]' value='Monday' {{ (old('days')
              and in_array('Monday', old('days'))) ? 'checked' : ''}}>Monday</label>
            <label><input type='checkbox' name='days[]' value='Tuesday' {{ (old('days')
              and in_array('Tuesday', old('days'))) ? 'checked' : ''}}>Tuesday</label>
            <label><input type='checkbox' name='days[]' value='Wednesday' {{ (old('days')
              and in_array('Wednesday', old('days'))) ? 'checked' : ''}}>Wednesday</label>
            <label><input type='checkbox' name='days[]' value='Thursday' {{ (old('days')
              and in_array('Thursday', old('days'))) ? 'checked' : ''}}>Thursday</label>
            <label><input type='checkbox' name='days[]' value='Friday' {{ (old('days')
              and in_array('Friday', old('days'))) ? 'checked' : ''}}>Friday</label>
            <label><input type='checkbox' name='days[]' value='Saturday' {{ (old('days')
              and in_array('Saturday', old('days'))) ? 'checked' : ''}}>Saturday</label>
            <label><input type='checkbox' name='days[]' value='Sunday' {{ (old('days')
              and in_array('Sunday', old('days'))) ? 'checked' : ''}}>Sunday</label>
        </fieldset>

        <fieldset class='radios'>
            <legend>Please indicate if you are available to work nights (required)</legend>
            @if($errors->get('nightsOk'))
                <ul>
                    @foreach($errors->get('nightsOk') as $error)
                        <li class='error'>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <label><input type='radio' name='nightsOk' value='yes'
              {{ old('nightsOk')=='yes' ? 'checked' : ''}}>Yes</label>
            <label><input type='radio' name='nightsOk' value='no'
              {{ old('nightsOk')=='no' ? 'checked' : ''}}>No</label>
        </fieldset>

        <fieldset class='confirmation'>
            <legend>Double check your selections and click Confirm</legend>
            <label><input type='submit' class='btn btn-primary' value='Confirm' name='Confirm'></label>
        </fieldset>
    </form>
@endsection
