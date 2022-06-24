<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
        <title>Boolpress</title>
    </head>
    
    <body>
        <div class="container vh-100">
            <div class="links">
                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/admin') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn cs_btn">Register</a>
                            @endif
                        @endauth
                @endif
            </div>

           <div id="root" class="h-100"></div>
        </div>
        <script src="{{asset('js/front.js')}}" defer></script>
    </body>
</html>
