@extends('manage.layouts.skeleton')

@section('content')

<div class="col-md-12">
    <h1>Dashboard</h1>
    <hr>
    <li>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
</div>

@endsection