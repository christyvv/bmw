@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container-fluid">
        <h3 style="font-family: poppins; font-weight:400; font-size:20px"><strong>Halaman Galeri</strong></h3>
        <a href="{{ route('galeri.tambah') }}"><button type="submit" class="btn btn-primary mb-3 mt-0" style="font-family: poppins; font-weight:500;"><i class="fa fa-plus"></i> Tambah</button></a>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr class="text-center" style="font-family: poppins">
                    <th style="font-size: 14px" scope="col">No</th>
                    <th style="font-size: 14px" scope="col">Tanggal</th>
                    <th style="font-size: 14px" scope="col">Judul</th>
                    <th style="font-size: 14px" scope="col">Caption</th>
                    <th style="font-size: 14px" scope="col">Foto</th>
                    <th style="font-size: 14px" scope="col">Video</th>
                    <th style="font-size: 14px"  scope="col">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($galeri as $g)
                    <tr style="font-size: 14px;">
                        <td class="text-center">{{ $no++ }}</td>
                        <td style="width: 10%; overflow:hidden; text-overflow:ellipsis;">{{ $g->tanggal }}</td>
                        <td style="width: 15%; overflow:hidden; text-overflow:ellipsis;">{{ $g->judul }}</td>
                        <td style="width: 25%; overflow:hidden; text-overflow:ellipsis;">{{ $g->caption }}</td>
                        <td style="width: 15%" class="text-center"><img src="{{ Storage::url('public/admin/' . $g->foto) }}" style="width:150px"
                                class="img-thumbnail">
                        </td>
                        <td class="text-center">
                            <video width="150" height="auto" controls>
                                <source src="{{ Storage::url('public/admin/' . $g->video) }}" type="video/mp4">
                            </video>
                        </td>
                        <td class="text-center">
                            <a href="/galeri/edit/{{ $g->id }}" class="btn btn-warning" data-bs-toggle="modal">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="/galeri/destroy/{{ $g->id }}" class="btn btn-danger" data-bs-toggle="modal">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
