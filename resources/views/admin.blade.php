@extends('layouts.company')
{{-- @section('login_status')
<!-- Authentication Links -->
@if (Auth::guest())
<li><a href="{{ route('admin.login') }}">Login</a></li>
@else
<li>Create Post</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="{{ route('admin.logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
</ul>
</li>
@endif
@endsection --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Job Applicant List</h4>
                    </div>
    
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection