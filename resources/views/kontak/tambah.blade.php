@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title p-2 ml-1"><strong>Tambah Kontak</strong></h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('kontak.tambah.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Nomor Telepon</label>
                                        <input type="text" name="notelp" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Instagram</label>
                                        <input type="text" name="instagram" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Facebook</label>
                                        <input type="text" name="facebook" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Alamat</label>
                                        <input type="text" name="alamat" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
