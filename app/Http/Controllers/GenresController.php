<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Retrieves all genres from db
    public function getallGenres()
    {
        $genres = Genre::all();
        return view('genres/index', ["genres" => $genres]);
    }
}
