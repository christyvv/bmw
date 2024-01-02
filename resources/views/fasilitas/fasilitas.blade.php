@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container-fluid">
        <h3 style="font-family: poppins; font-weight:400; font-size:20px"><strong>Halaman Fasilitas</strong></h3>
        <a href="{{ route('fasilitas.tambah') }}"><button type="submit" class="btn btn-primary mb-3 mt-0" style="font-family: poppins; font-weight:500;"><i class="fa fa-plus"></i> Tambah</button></a>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr class="text-center" style="font-family: poppins">
                    <th style="font-size: 14px" scope="col">No</th>
                    <th style="font-size: 14px" scope="col">Judul</th>
                    <th style="font-size: 14px" scope="col">Deskripsi</th>
                    <th style="font-size: 14px" scope="col">Foto</th>
                    <th style="font-size: 14px" scope="col">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($fasilitas as $f)
                    <tr style="font-size: 14px;">
                        <td class="text-center">{{ $no++ }}</td>
                        <td style="width: 20%; overflow:hidden; text-overflow:ellipsis;">{{ $f->judul }}</td>
                        <td style="width: 40%; overflow:hidden; text-overflow:ellipsis;">{{ $f->deskripsi }}</td>
                        <td class="text-center"><img src="{{ Storage::url('public/admin/' . $f->foto) }}" style="width:150px"
                                class="img-thumbnail">
                        </td>
                        <td class="text-center">
                            <a href="/fasilitas/edit/{{ $f->id }}" class="btn btn-warning" data-bs-toggle="modal">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="/fasilitas/destroy/{{ $f->id }}" class="btn btn-danger" data-bs-toggle="modal">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
