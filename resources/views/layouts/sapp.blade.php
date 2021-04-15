<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    @auth
               @if ( auth()->user()->role == 'admin' )
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/user')}}">Data User</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/barang')}}">Data Barang</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/laporan')}}">Laporan</a>
                  </li>
                  @elseif (auth()->user()->role == 'petugas')
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/user')}}">Data User</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/barang')}}">Data Barang</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/lelang')}}">Lelang Barang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/laporan')}}">Laporan</a>
                  </li>
            @elseif (auth()->user()->role == 'masyarakat')
            <li class="nav-item">
                    <a class="nav-link" href="{{url('/tawar')}}">Barang Lelang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/menang')}}">Menang Lelang</a>
                  </li>
                  
                  @endif
                  </ul>
            </div>

                @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <li>
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

