@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container-fluid">
        <h3><strong>Halaman Kontak</strong></h3>
        <a href="{{ route('kontak.tambah') }}"><button type="submit" class="btn btn-primary mb-3"><i class="fa fa-plus"></i>
                Tambah</button></a>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Instagram</th>
                    <th scope="col">Facebook</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($kontak as $k)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $k->email }}</td>
                        <td>{{ $k->notelp }}</td>
                        <td>{{ $k->instagram }}</td>
                        <td>{{ $k->facebook }}</td>
                        <td>{{ $k->alamat }}</td>
                        <td>
                            <a href="/kontak/edit/{{ $k->id }}" class="btn btn-warning" data-bs-toggle="modal">
                                Edit
                            </a>
                            <a href="/kontak/destroy/{{ $k->id }}" class="btn btn-danger" data-bs-toggle="modal">
                                Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
