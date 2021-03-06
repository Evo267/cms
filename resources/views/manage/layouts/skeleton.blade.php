<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- font icons -->
    <link href="https://file.myfontastic.com/Siqgm3uGwZFtkBQ4qHRjLL/icons.css" rel="stylesheet">

    <title>{{ config('app.name') }} // Admin</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

    <div class="container-fluid " id="app-content">
        <div class="sidebar">
            <div class="sidebar-logo text-center">
                {{ config('app.name') }}
            </div>
            <hr>
            <nav class="nav flex-column sidebar-nav">
                <li class="{{ $activePage == 'index' ? 'active' : '' }}">
                    <a class="nav-link align-middle" href="{{ route('admin.index') }}">
                        <i class="align-middle icon-settings-streamline"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ $activePage == 'pages' ? 'active' : '' }}">
                    <a class="nav-link align-middle" href="{{ route('admin.pages') }}">
                        <i class="align-middle icon-photo-pictures-streamline"></i>
                        <span>Páginas</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link align-middle" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        <i class="align-middle icon-lock-locker-streamline"></i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </nav>
        </div>
        <div class="row content">
            @yield('content')
        </div>
    </div>


</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

@yield('scripts')
</body>
</html>
