<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ei Musico!</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('assets/fonts/fontawesome-5.13.0/css/all.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets_login/images/output-onlinepngtools.png">

    <!-- Styles -->
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/DevItem.css') }}" rel="stylesheet">

    <!---jquery --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('assets_login/images/output-onlinepngtools.png')}}" width="80" style="position:absolute;margin-left:-300px;margin-top:-45px"/>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                                <a id="navbarDropdown" class="username"  href="#" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div aria-labelledby="navbarDropdown">
                                    <a class="logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                </div>
            </div>
        </nav>

       
            @yield('content')
       
    </div>

</body>
</html>
