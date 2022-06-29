<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Boolpress - {{$title}}</title>
    <script src="{{ asset('js/admin.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
                        Boolpress
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link {{Route::currentRouteName() == 'admin.posts.index' ? 'active' : ''}}" href="{{ route('admin.posts.index') }}" >Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{Route::currentRouteName() == 'admin.categories.index' ? 'active' : ''}}" href="{{ route('admin.categories.index') }}" >Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{Route::currentRouteName() == 'admin.tags.index' ? 'active' : ''}}" href="{{ route('admin.tags.index') }}" >Tags</a>
                                </li>
                            @endauth
                        </ul>
    
                    <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link {{Route::currentRouteName() == 'login' ? 'active' : ''}}" href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link btn cs_btn {{Route::currentRouteName() == 'register' ? 'active' : ''}}" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item d-flex gap-3 dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('admin.home') }}">Dashboard</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-5">
            @yield('content')
        </main>

        <footer class="bg-dark py-5">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                            <h5>Prodotti</h5> 
                        <ul>
                            <li><a href="/">Hosting WordPress</a></li>
                            <li><a href="/">Nomi di dominio</a></li>
                            <li><a href="/">Costruttore di siti web</a></li>
                            <li><a href="/">Crea un blog</a></li>
                            <li><a href="/">Professional Email</a></li>
                            <li><a href="/">P2: WordPress per team</a></li>
                            <li><a href="/">Soluzioni Enterprise</a></li>
                            <li><a href="/">Costruito con WordPress.com</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h5>Funzionalità</h5>
                        <ul>
                            <li><a href="/">Panoramica</a></li>
                            <li><a href="/">Temi WordPress</a></li>
                            <li><a href="/">Plugin WordPress</a></li>
                            <li><a href="/">Google Apps</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h5>Risorse</h5>
                        <ul>
                            <li><a href="/">Supporto WordPress.com</a></li>
                            <li><a href="/">I forum di WordPress</a></li>
                            <li><a href="/">Novità di WordPress</a></li>
                            <li><a href="/">Suggerimenti per il tuo sito</a></li>
                            <li><a href="/">Generatore di nomi commerciali</a></li>
                            <li><a href="/">Costruttore di loghi</a></li>
                            <li><a href="/">Webinar giornalieri</a></li>
                            <li><a href="/">Corsi WordPress</a></li>
                            <li><a href="/">Risorse per gli sviluppatori</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h5>Società</h5>
                        <ul>
                            <li><a href="/">Info</a></li>
                            <li><a href="/">Fornitori</a></li>
                            <li><a href="/">Stampa</a></li>
                            <li><a href="/">Termini di servizio</a></li>
                            <li><a href="/">Informativa sulla privacy</a></li>
                            <li><a href="/">Non inviare le mie informazioni personali</a></li>
                            <li><a href="/">Nota sulla privacy per utenti in California</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-end mt-3">
                    <div class="col-3">
                        <a href="/"><i class="fa-brands fa-twitter"></i></a>
                        <a href="/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="/"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <div class="col-3">
                        <select name="language" id="language">
                            <option value="italiano">Italiano</option>
                            <option value="spagnolo">Spagnolo</option>
                            <option value="inglese">Inglese</option>
                        </select>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
