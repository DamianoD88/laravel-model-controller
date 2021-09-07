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
            <a href="{{ route('caratteri', ['id' => 1])}}">CHARACTERS</a>
            <a href="{{ route('fumetti', ['id' => 1])}}">COMICS</a>
            <a href="{{ route('films', ['id' => 1])}}">MOVIES</a>
            <a href="{{ route('television', ['id' => 1])}}">TV</a>
            <a href="{{ route('giochi', ['id' => 1])}}">GAMES</a>
            <a href="{{ route('collezionabili', ['id' => 1])}}">COLLECTIBLES</a>
            <a href="{{ route('video', ['id' => 1])}}">VIDEOS</a>
            <a href="{{ route('supporters', ['id' => 1])}}">FANS</a>
            <a href="{{ route('novità', ['id' => 1])}}">NEWS</a>
            <a href="{{ route('negozio', ['id' => 1])}}">SHOP</a>
        </div>
          
    </body>
</html>
