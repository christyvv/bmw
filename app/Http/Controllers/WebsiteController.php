<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $data = array(
            'fasilitas' => Fasilitas::all(),
            'berita' => Berita::all(),
            'galeri' => Galeri::all(),
            'kontak' => Kontak::all(),
            'prestasi' => Prestasi::all(),
        );
        return view('website.website', $data);
    }
}
