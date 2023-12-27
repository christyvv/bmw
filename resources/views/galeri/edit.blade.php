@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title p-2 ml-1"><strong>Edit Galeri</strong></h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/galeri/edit/update/{{ $galeri->id }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Tanggal</label>
                                        <input type="text" name="tanggal" value="{{ $galeri->tanggal }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Judul</label>
                                        <input type="text" name="judul" value="{{ $galeri->judul }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Caption</label>
                                        <input type="text" name="caption" value="{{ $galeri->caption }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="foto">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" value="{{ $galeri->foto }}" id="foto" name="foto" />
                                                <label class="custom-file-label bmd-label-floating" for="foto">Pilih
                                                    Foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="video">Video</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" value="{{ $galeri->video }}" id="video" name="video" />
                                                <label class="custom-file-label bmd-label-floating" for="video">Pilih
                                                    Video</label>
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
