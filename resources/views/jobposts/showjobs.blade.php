@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <a class="btn btn-default" href="/jobs">Go back</a>
          <h2>Job Position: {{$job->job_title}}</h2>
          <hr>
          <div><strong>Requirements:</strong> {!!$job->job_description!!}</div>
          <p><strong>Job Location:</strong> {{$job->location}}, {{$job->country}}</p>
          <p><strong>Salary Range:</strong> {{$job->salary}}</p>
          <small><strong>Post Created at:</strong> {{$job->created_at}}</small>
          <hr>
          
          {{-- @if (!Auth::guest())
              @if (Auth::user()->id==$job->user_id) --}}
              <div class="col-md-2" style="margin-top: 5%">
                  {!! Form::open(['action'=>'JobpostController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    {{Form::submit('Apply',['class'=>'btn btn-primary'])}}
                  {!! Form::close() !!}
               </div>
              {{-- @endif
          @endif --}}
    </div>
  </div>     
</div>
@endsection
  
