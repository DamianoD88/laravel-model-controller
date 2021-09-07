<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public  function caratteri($id) {
        // senza compact
        // $data = [
        //     'title' => 'pagina CHARACTERS'
        // ];
        $title = Comic::all();
        
        return view('CHARACTERS', $data);
    }

    public  function fumetti() {
        return view('COMICS');
    }

    public  function film() {
        return view('MOVIES');
    }

    public  function vision() {
        return view('TV');
    }

    public  function giochi() {
        return view('GAMES');
    }

    public  function meme() {
        return view('COLLECTIBLES');
    }

    public  function video() {
        return view('VIDEOS');
    }

    public  function fans() {
        return view('FANS');
    }
}


// Soluzione senza Model

// class ComicController extends Controller
// {
//     public  function caratteri($id) {
//         $data = [
//             'title' => 'pagina CHARACTERS'
//         ];
//         return view('CHARACTERS', $data);
//     }

//     public  function fumetti() {
//         return view('COMICS');
//     }

//     public  function film() {
//         return view('MOVIES');
//     }

//     public  function vision() {
//         return view('TV');
//     }

//     public  function giochi() {
//         return view('GAMES');
//     }

//     public  function meme() {
//         return view('COLLECTIBLES');
//     }

//     public  function video() {
//         return view('VIDEOS');
//     }

//     public  function fans() {
//         return view('FANS');
//     }
// }
