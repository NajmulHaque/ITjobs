<style>
 a,h2 a:hover{
   text-decoration: none;
 }
</style>
@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Job Posts</h1>
        @if (count($jobs)>0)
          @foreach ($jobs as $job)
          <div class="well row">
             <div class="col-md-10">
                    <h2><a href="/jobs/{{$job->id}}">{{$job->job_title}}</a></h2>
                    <p>{{$job->location}}, {{$job->country}}</p>
                    <p>Post Created at: {{$job->created_at}}</p>
             </div>
             <div class="col-md-2" style="margin-top: 5%">
                {!! Form::open(['action'=>'JobpostController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                  {{Form::submit('Apply',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
             </div>
          </div> 
          @endforeach
           {{$jobs->links()}}
        @else
            <p>No post found</p>
        @endif  
    </div>
</div>     
</div>
@endsection
