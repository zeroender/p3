@extends('layouts.master')

@section('title')
    Result of Timesheet Submission
@endsection

@section('content')

    <div class="alert alert-success">
      <p>Hello {{ $fullName }}</p>
      @foreach($days as $day)
        <p>You can work {{ $day }}</p>
      @endforeach
      <p>You answered {{ $nights }} when asked if you could work nights</p>
      <h4>Your weekly schedule has been registered</h4>
    </div>

@endsection
