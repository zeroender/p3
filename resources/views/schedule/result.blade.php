@extends('layouts.master')

@section('title')
    Result of Timesheet Submission
@endsection

@push('head')
    <link href="/css/result.css" type='text/css' rel='stylesheet'>
@endpush

@section('content')

    <h3>Schedule has been submitted</h3>

    <div class="row">
         <div class="col col-md-auto">
            <h3>Hello {{ $fullName }}!</h3>
            <p>your weekly schedule has been registered</p>
        </div>
    </div>

    <div class="row">
         <div class="col col-md-auto">
           <p>You are signed up to work on the following days:</p>
           <ul>
               @foreach($days as $day)
                   <li class="result_text">{{ $day }}</li>
               @endforeach
           </ul>
        </div>
    </div>

    <div class="row">
         <div class="col col-md-auto">
           @if($nights == 'yes')
               <p>You have indicated that you are available to work at night</p>
           @else
               <p>You have indicated you are not available to work at night</p>
           @endif
        </div>
    </div>

    <div>
        <a href='/'>
            <div class='btn btn-primary'>Return to schedule app</div>
        </a>
    </div>
@endsection
