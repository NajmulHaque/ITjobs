@extends('layouts.company')
@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <a href="/admin" class="btn btn-default">Back</a>
        <h1>Create Job Post</h1>
        {!! Form::open(['action'=>'JobpostController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('job_title','Job Title')}}
            {{Form::text('job_title', '', ['class'=>'form-control', 'placeholder'=>'Job Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('job_description','Job Description')}}
                {{Form::textarea('job_description', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Job Decription Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('salary','Salary')}}
            {{Form::text('salary', '', ['class'=>'form-control', 'placeholder'=>'Salary'])}}
        </div>
        <div class="form-group">
            {{Form::label('location','Location')}}
            {{Form::text('location', '', ['class'=>'form-control', 'placeholder'=>'Location'])}}
        </div>
        <div class="form-group">
            {{Form::label('country','Country')}}
            {{Form::text('country', '', ['class'=>'form-control', 'placeholder'=>'Country'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
  
