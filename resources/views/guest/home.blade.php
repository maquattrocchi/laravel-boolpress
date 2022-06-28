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
        <div id="root"></div>
        <script src="{{asset('js/front.js')}}" defer></script>
    </body>
</html>
