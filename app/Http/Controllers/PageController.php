<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::limit(3)->get();
        return view('welcome', compact('comics'));
    }
}
