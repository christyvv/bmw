@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title p-2 ml-1"><strong>Edit Kontak</strong></h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/kontak/edit/update/{{ $kontak->id }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="text" name="email" value="{{ $kontak->email }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Nomor Telepon</label>
                                        <input type="text" name="notelp" value="{{ $kontak->notelp }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Instagram</label>
                                        <input type="text" name="instagram" value="{{ $kontak->instagram }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Facebook</label>
                                        <input type="text" name="facebook" value="{{ $kontak->facebook }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Alamat</label>
                                        <input type="text" name="alamat" value="{{ $kontak->alamat }}" class="form-control">
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
