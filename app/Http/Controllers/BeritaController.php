<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Berita',
            'berita' => Berita::all(),
        );
        return view('berita.berita', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.tambah');
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
        $berita = Berita::create([
            'judul' => $request->judul,
            'foto' => $foto->hashName(),
            'deskripsi' => $request->deskripsi,
        ]);
        if($berita){
            return redirect('/berita')->with(['success'=>'Data Berhasil Disimpan!']);
        } else {
           return redirect('/berita')->with(['error'=>'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita, $id)
    {
        $berita = Berita::findOrFail($id);
        $data = [
            'title' => 'Edit Berita',
            'berita' => $berita,
        ];

        return view('berita.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $foto=$request->file('foto');
        $foto->storeAs('public/admin', $foto->hashName());
        $berita = Berita::find($id);
        $berita->update([
            'judul' => $request->judul,
            'foto' => $foto->hashName(),
            'deskripsi' => $request->deskripsi,
        ]);
        if($berita){
            return redirect('/berita')->with(['success'=>'Data Berhasil Diubah!']);
        } else {
           return redirect('/berita')->with(['error'=>'Data Gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita, $id)
    {
        $berita = Berita::find($id);

        $berita->delete();
        return redirect('/berita');
    }
}
