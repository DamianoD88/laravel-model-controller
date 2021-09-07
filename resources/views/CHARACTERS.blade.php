<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
       
        <div class="links">
            <a href="{{ route('caratteri')}}">CHARACTERS</a>
            <a href="{{ route('fumetti')}}">COMICS</a>
            <a href="{{ route('films')}}">MOVIES</a>
            <a href="{{ route('television')}}">TV</a>
            <a href="{{ route('giochi')}}">GAMES</a>
            <a href="{{ route('collezionabili')}}">COLLECTIBLES</a>
            <a href="{{ route('video')}}">VIDEOS</a>
            <a href="{{ route('supporters')}}">FANS</a>
            <a href="{{ route('novità')}}">NEWS</a>
            <a href="{{ route('negozio')}}">SHOP</a>
        </div>

        <h2>{{ $title}}</h2>
          
    </body>
</html>