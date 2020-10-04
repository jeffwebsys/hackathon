<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  @include('layouts.partials.header')
</head>
<body>
    @include('layouts.partials.loader')
    @include('layouts.partials.navbar')
    @include('layouts.partials.bread')
     <!--  BEGIN MAIN CONTAINER  -->
     <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('layouts.partials.sidebar')
        <div id="content" class="main-content">
        <div class="layout-px-spacing">
       
        @yield('content')

        
        
        </div>
        @include('layouts.partials.footer')
        </div>
        @include('layouts.partials.scripts')
    <!--  End CONTAINER  -->
     </div>
</body>
</html>
