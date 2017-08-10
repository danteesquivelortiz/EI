<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pegaso') }}</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Styles -->
        <style>
            html, body {
              
                background-position: center;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

        </style>
    <link href="{{ asset('css/bootstrap-material-design.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-material-design.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('Pegaso', 'Pegaso') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                @if(Auth::user()->admin())
                                <li>
                                    <a href="{{url('/products')}}">Ver productos</a>
                                </li>
                                <li>
                                    <a href="{{url('/categories')}}">Ver categorias</a>
                                </li>
                                <li>
                                    <a href="{{url('/products/create')}}">Crear producto</a>
                                </li>

                                <li>
                                    <a href="{{url('/categories/create')}}">Crear categoria</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{url('/clients')}}">Buscar vuelos</a>
                                </li>
                                <li>
                                    <a href="{{url('/reservations')}}">Ver compras</a>
                                </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <!-- Scripts -->
    <script type="text/javascript">
    function eliminarAerolinea(data) {
        $.ajax({
        type:"DELETE",
        url:'/aerolineas/'+data,
        data:{"_token": "{{ csrf_token() }}" },
        success:function(result)
        {
        }
        });
        }
    </script>
    <script type="text/javascript">
    function eliminarHotel(data) {
        console.log(data)
        $.ajax({
        type:"DELETE",
        url:'/hoteles/'+data,
        data:{"_token": "{{ csrf_token() }}" },
        success:function(result)
        {
        }
        });
        }
    </script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/ripples.min.js') }}"></script>

</body>
</html>
