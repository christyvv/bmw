@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title p-1 ml-1" style="font-family: poppins; font-size:16px; font-weight:500"><strong>Edit Prestasi</strong></h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/prestasi/edit/update/{{ $prestasi->id }}" enctype="multipart/form-data" style="font-family: poppins">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Nama</label>
                                        <input type="text" name="nama" value="{{ $prestasi->nama }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Prestasi</label>
                                        <input type="text" name="prestasi" value="{{ $prestasi->prestasi }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Tanggal</label>
                                        <input type="text" name="tanggal" value="{{ $prestasi->tanggal }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Deskripsi</label>
                                        <input type="text" name="deskripsi" value="{{ $prestasi->deskripsi }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="foto">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" value="{{ $prestasi->foto }}" id="foto" name="foto" />
                                                <label class="custom-file-label bmd-label-floating" for="foto">Pilih
                                                    Foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Edit</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
