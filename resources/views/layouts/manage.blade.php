<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
     <title>@yield('title')</title>

    <!-- Scripts -->
  
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    
</head>

@include('partials/nav/_main')
@include('partials/nav/_manage')

<body class="has-navbar-fixed-top">
        <div id="app" class="management-area ">
 
 
            
        @yield('content')
            
         
        
    </div>
     
    
    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('scripts')
</body>
</html>