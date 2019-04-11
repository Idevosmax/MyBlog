<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
  
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="has-navbar-fixed-top">
    <div id="app">
        <nav class="navbar has-shadow is-fixed-top">
            <div class="container">
                <div class="navbar-start">
                    
                <a class="navbar-item" href="{{route('home')}}"><img src= "{{asset("images/logo.png")}}" alt="MyBlog logo" width="100" heigth="35"></a> 
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Post</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Challenge</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Community</a>
                </div>
                <div class="navbar-end dropdown-overflow">
                    @if (Auth::guest())
                <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Join the Challenge</a>
                    @else
                        <button class="dropdown navbar-item is-tab">
                            Welcome Martins! <span class="m-l-10"> <i class="fa fa-caret-down"></i></span>
                            <ul class="dropdown-menu">
                                <li><a href=#> 
                                    <span class="icon"><i class="fa fa-fw m-r-5 fa-user-circle-o"></i></span>
                                    Profile</a></li>
                                <li><a href=#> 
                                    <span class="icon"><i class="fa fa-fw m-r-5 fa-bell"></i></span>
                                    Notifications</a></li>
                                <li><a href=#> 
                                    <span class="icon"><i class="fa fa-fw m-r-5 fa-fighter-jet"></i></span>
                                    Challenges</a></li>
                                <li><a href=#> 
                                    <span class="icon"><i class="fa fa-fw m-r-5 fa-gears"></i></span>
                                    Settings</a></li>
                                <li class="seperator"></li>
                                <li><a href=#> 
                                    <span class="icon"><i class="fa fa-fw m-r-5 fa-sign-out"></i></span> 
                                    Logout</a></li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav>

        {{-- <main class="py-4"> --}}
            
                    @yield('content')
            
            
        {{-- </main> --}}
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
