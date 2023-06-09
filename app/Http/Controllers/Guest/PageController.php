<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $movies = \App\Models\Movie::all();

        return view('homepage', compact('movies'));
    }
}
