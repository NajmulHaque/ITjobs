@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Applicant Profile</h4></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                                <img src="\images\najmul.jpg" alt="" width="120px" height="120px"> 
                                <p style="font-size: 18px;text-transform: capitalize"><strong>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</strong></p>
                        </div>

                    </div>
                    <hr>

                    <h3>Skills</h3>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1">
                                <ul class="circle">
                                    <h4>Technical Skills</h4>
                                    <li>Skill 1</li> 
                                    <li>Skill 2</li> 
                                    <li>Skill 3</li> 
                                    <li>Skill 4</li> 
                                    <li>Skill 5</li> 
                                </ul>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h4>Upload Your CV</h4>
                            <form class="btn btn-primary"  style="display:inline-flex" action="{{route('cv.add')}}" id="formImgInp" method="POST" enctype="multipart/form-data">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  <input type="file" name="cv" id="cv">
                                  <button type="submit" class="btn btn-danger">Upload</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
