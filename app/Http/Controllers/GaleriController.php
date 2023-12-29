<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Galeri',
            'galeri' => Galeri::all(),
        );
        return view('galeri.galeri', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto=$request->file('foto');
        $foto->storeAs('public/admin', $foto->hashName());
        $video=$request->file('video');
        $video->storeAs('public/admin', $video->hashName());
        $galeri=Galeri::create([
            'tanggal' => $request->tanggal,
            'judul' => $request->judul,
            'caption' => $request->caption,
            'foto' => $request->hashName(),
            'video' => $request->hashName(),
        ]);
        if($galeri){
            return redirect('/galeri')->with(['success'=>'Data Berhasil Disimpan!']);
        } else {
            return redirect('/galeri')->with(['error'=>'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri, $id)
    {
        $galeri = Galeri::findOrFail($id);
        $data = [
            'title' => 'Edit Galeri',
            'galeri' => $galeri,
        ];

        return view('galeri.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $foto=$request->file('foto');
        $foto->storeAs('public/admin', $foto->hashName());
        $video=$request->file('video');
        $video->storeAs('public/admin', $video->hashName());
        $galeri = Galeri::find($id);
        $galeri->update([
            'tanggal' => $request->tanggal,
            'judul' => $request->judul,
            'caption' => $request->caption,
            'foto' => $request->hashName(),
            'video' => $request->hashName(),
        ]);
        if($galeri){
            return redirect('/galeri')->with(['success'=>'Data Berhasil Diubah!']);
        } else {
            return redirect('/galeri')->with(['error'=>'Data Gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri, $id)
    {
        $galeri = Galeri::find($id);

        $galeri->delete();
        return redirect('/galeri');
    }
}
