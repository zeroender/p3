@extends('layouts.master')

@section('title')
    Result of Timesheet Submission
@endsection

@push('head')
    <link href="/css/result.css" type='text/css' rel='stylesheet'>
@endpush

@section('content')

    <div class="row">
         <div class="col col-md-auto">
            <h3 class="result_text">Hello {{ $fullName }}!</h3>
            <p class="result_text">your weekly schedule has been registered</p>
        </div>
    </div>

    <div class="row">
         <div class="col col-md-auto">
           <p class="result_text">You are signed up to work on the following days:</p>
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
               <p class="result_text">You have indicated that you are available to work at night</p>
           @else
               <p class="result_text">You have indicated you are not avaiable at night</p>
           @endif
        </div>
    </div>

    <div>
        <a href='/'>
            <button class='btn btn-primary'>Return to schedule app</button>
        </a>
    </div>
@endsection
