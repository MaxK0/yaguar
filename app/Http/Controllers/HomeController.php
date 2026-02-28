<?php

namespace App\Http\Controllers;

use App\Models\Photo;

class HomeController extends Controller
{
    public function index()
    {
        $photos = Photo::where('page', 'home')
            ->where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('home', compact('photos'));
    }
}
