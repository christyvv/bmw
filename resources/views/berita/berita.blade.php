@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif
    
    <div class="container-fluid">
        <h3><strong>Halaman Berita</strong></h3>
        <a href="{{ route('berita.tambah') }}"><button type="submit" class="btn btn-primary mb-3"><i class="fa fa-plus"></i>
                Tambah</button></a>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($berita as $b)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td style="width: 20%; overflow:hidden; text-overflow:ellipsis;">{{ $b->judul }}</td>
                        <td style="width: 40%; overflow:hidden; text-overflow:ellipsis;">{{ $b->deskripsi }}</td>
                        <td><img src="{{ Storage::url('public/admin/' . $b->foto) }}" style="width:150px"
                                class="img-thumbnail">
                        </td>
                        <td>
                            <a href="/berita/edit/{{ $b->id }}" class="btn btn-warning" data-bs-toggle="modal">
                                Edit
                            </a>
                            <a href="/berita/destroy/{{ $b->id }}" class="btn btn-danger" data-bs-toggle="modal">
                                Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
