<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GalleryController extends Controller
{
    public function index()
    {
        $data = array(
            'galeri' => Galeri::all(),
        );
        return view('website.gallery', $data);
    }
}
