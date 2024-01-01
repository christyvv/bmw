@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container-fluid">
        <h3><strong>Halaman Galeri</strong></h3>
        <a href="{{ route('galeri.tambah') }}"><button type="submit" class="btn btn-primary mb-3"><i class="fa fa-plus"></i>
                Tambah</button></a>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Caption</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Video</th>
                    <th scope="col">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($galeri as $g)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td style="width: 10%; overflow:hidden; text-overflow:ellipsis;">{{ $g->tanggal }}</td>
                        <td style="width: 20%; overflow:hidden; text-overflow:ellipsis;">{{ $g->judul }}</td>
                        <td style="width: 40%; overflow:hidden; text-overflow:ellipsis;">{{ $g->caption }}</td>
                        <td><img src="{{ Storage::url('public/admin/' . $g->foto) }}" style="width:150px"
                                class="img-thumbnail">
                        </td>
                        <td>
                            <video width="150" height="auto" controls>
                                <source src="{{ Storage::url('public/admin/' . $g->video) }}" type="video/mp4">
                               
                            </video>
                        </td>
                        <td>
                            <a href="/galeri/edit/{{ $g->id }}" class="btn btn-warning" data-bs-toggle="modal">
                                Edit
                            </a>
                            <a href="/galeri/destroy/{{ $g->id }}" class="btn btn-danger" data-bs-toggle="modal">
                                Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
