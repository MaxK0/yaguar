<?php

namespace App\Http\Controllers;

use App\Models\Photo;

class AboutController extends Controller
{
    public function index()
    {
        $photos = Photo::where('page', 'about')
            ->where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('about', compact('photos'));
    }
}
