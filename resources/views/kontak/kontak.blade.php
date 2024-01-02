@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container-fluid">
        <h3 style="font-family: poppins; font-weight:400; font-size:20px"><strong>Halaman Kontak</strong></h3>
        <a href="{{ route('kontak.tambah') }}"><button type="submit" class="btn btn-primary mb-3 mt-0" style="font-family: poppins; font-weight:500;"><i class="fa fa-plus"></i> Tambah</button></a>
        <table class="table table-success table-striped table-bordered">
            <thead class="" >
                <tr class="text-center" style="font-family: poppins">
                    <th style="font-size: 14px" scope="col">No</th>
                    <th style="font-size: 14px" scope="col">Email</th>
                    <th style="font-size: 14px" scope="col">Nomor Telepon</th>
                    <th style="font-size: 14px" scope="col">Instagram</th>
                    <th style="font-size: 14px" scope="col">Facebook</th>
                    <th style="font-size: 14px" scope="col">Alamat</th>
                    <th style="font-size: 14px" scope="col">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($kontak as $k)
                    <tr style="font-size: 14px;">
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $k->email }}</td>
                        <td>{{ $k->notelp }}</td>
                        <td>{{ $k->instagram }}</td>
                        <td>{{ $k->facebook }}</td>
                        <td>{{ $k->alamat }}</td>
                        <td class="text-center ">
                            <p class="d-inline-flex gap-1">
                            <a href="/kontak/edit/{{ $k->id }}" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal">
                                edit
                            </a>
                            <a href="/kontak/destroy/{{ $k->id }}" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal">
                                delete
                            </a></p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
