<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Fasilitas',
            'fasilitas' => Fasilitas::all(),
        );
        return view('fasilitas.fasilitas', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas.tambah');
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
        $fasilitas = Fasilitas::create([
            'judul' => $request->judul,
            'foto' => $foto->hashName(),
            'deskripsi' => $request->deskripsi,
        ]);
        if($fasilitas){
            return redirect('/fasilitas')->with(['success'=>'Data Berhasil Disimpan!']);
        } else {
           return redirect('/fasilitas')->with(['error'=>'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitas $fasilitas, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $data = [
            'title' => 'Edit Fasilitas',
            'fasilitas' => $fasilitas,
        ];

        return view('fasilitas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $foto=$request->file('foto');
        $foto->storeAs('public/admin', $foto->hashName());
        $fasilitas = Fasilitas::find($id);
        $fasilitas->update([
            'judul' => $request->judul,
            'foto' => $foto->hashName(),
            'deskripsi' => $request->deskripsi,
        ]);
        if($fasilitas){
            return redirect('/fasilitas')->with(['success'=>'Data Berhasil Diubah!']);
        } else {
           return redirect('/fasilitas')->with(['error'=>'Data Gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitas $fasilitas, $id)
    {
        $fasilitas = Fasilitas::find($id);

        $fasilitas->delete();
        return redirect('/fasilitas');
    }
}
