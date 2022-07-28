<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    function index () {

        $myMovies = Movie::all();

        if(!$myMovies) {
            abort(404);
        }

        return view('movies' , [
            "movies" => $myMovies
        ]);
    }
}
