<?php

namespace App\Http\Controllers;

use App\Models\Photo;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = Photo::where('page', 'gallery')
            ->where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('gallery', compact('photos'));
    }
}
