<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function homepage(){
        $movies = Movie::latest()->paginate(6);
        return view("homepage", compact('movies'));
        
    }

    public function show($id, $slug)
{
    $movie = Movie::findOrFail($id);

    // Optional: validasi slug agar sesuai
    if ($movie->slug !== $slug) {
        return redirect("/detail/{$movie->id}/{$movie->slug}");
    }

    return view('detail', compact('movie'));
}

    
}
