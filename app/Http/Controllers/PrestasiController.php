<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
    $data = array(
        'title' => 'Prestasi',
        'prestasi' => Prestasi::all(),
    );
    return view('prestasi.prestasi', $data);
    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestasi.tambah');
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
        $prestasi = prestasi::create([
            'nama' => $request->nama,
            'prestasi' => $request->prestasi,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto->hashName(),
        ]);
        if($prestasi){
            return redirect('/prestasi')->with(['success'=>'Data Berhasil Disimpan!']);
        } else {
           return redirect('/prestasi')->with(['error'=>'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(prestasi $prestasi, $id)
    {
        $prestasi = prestasi::findOrFail($id);
        $data = [
            'title' => 'Edit Prestasi',
            'prestasi' => $prestasi,
        ];

        return view('prestasi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $foto=$request->file('foto');
        $foto->storeAs('public/admin', $foto->hashName());
        $prestasi = prestasi::find($id);
        $prestasi->update([
            'nama' => $request->nama,
            'prestasi' => $request->prestasi,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto->hashName(),
        ]);
        if($prestasi){
            return redirect('/prestasi')->with(['success'=>'Data Berhasil Diubah!']);
        } else {
           return redirect('/prestasi')->with(['error'=>'Data Gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestasi $prestasi, $id)
    {
        $prestasi = prestasi::find($id);

        $prestasi->delete();
        return redirect('/prestasi');
    }
}

