<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Kontak',
            'kontak' => Kontak::all(),
        );
        return view('kontak.kontak', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kontak=Kontak::create([
            'email' => $request->email,
            'notelp' => $request->notelp,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'alamat' => $request->alamat,
        ]);
        if($kontak){
            return redirect('/kontak')->with(['success'=>'Data Berhasil Disimpan!']);
        } else {
            return redirect('/kontak')->with(['error'=>'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak, $id)
    {
        $kontak = Kontak::findOrFail($id);
        $data = [
            'title' => 'Edit Kontak',
            'kontak' => $kontak,
        ];

        return view('kontak.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kontak = Kontak::find($id);
        $kontak->update([
            'email' => $request->email,
            'notelp' => $request->notelp,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'alamat' => $request->alamat,
        ]);
        if($kontak){
            return redirect('/kontak')->with(['success'=>'Data Berhasil Diubah!']);
        } else {
            return redirect('/kontak')->with(['error'=>'Data Gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak, $id)
    {
        $kontak = Kontak::find($id);

        $kontak->delete();
        return redirect('/kontak');
    }
}
