@extends('layouts.app')
@section('login_status')
<!-- Authentication Links -->
@if (Auth::guest())
<li><a href="{{ route('company.login') }}">Login</a></li>
@else
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="{{ route('company.logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('company.logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
</ul>
</li>
@endif
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Company Dashboard</div>
            </div>
        </div>
    </div>
</div>
@endsection