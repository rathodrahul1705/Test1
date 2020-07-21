<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .dropdown-menu:li {
    text-align: left;
}

.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; 
 }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                          <div class="container">
                            <div class="navbar-header">
                              <a class="navbar-brand" href="#">User Privileges</a>
                            </div>
                            <ul class="nav navbar-nav">
                                 @if (Auth::user()->isAuthenticated("Company", "r")) 
                              <li class="active"><a href="#">Company</a></li>
                                @endif
                                 @if (Auth::user()->isAuthenticated("Finance", "r")) 
                              <li><a href="#">Finance</a></li>
                              @endif
                               @if (Auth::user()->isAuthenticated("Revenues", "r")) 
                              <li><a href="#">Revenues</a></li>
                              @endif
                            <li class="dropdown">  
                            <a style="color: black" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Privileges <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a style="color: black" href="{{url('/users')}}">Users</a></li>
                            <li><a style="color: black" href="{{url('/role_permission')}}">Grant/Revoke</a></li>
                            <li><a style="color: black" href="{{url('/role')}}">Role</a></li>
                            <li><a style="color: black" href="{{url('/permission')}}">permission</a></li>
                            </ul>
                            </li>
                              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{{auth()->user()->name}}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li>
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
