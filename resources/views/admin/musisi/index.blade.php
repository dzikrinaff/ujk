@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h1 class="h4 text-dark">Daftar Musisi</h1>
        <a href="{{ route('musisi.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Musisi
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Instagram</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($musisis as $musisi)
                    <tr>
                        <td>{{ $musisi->nama_musisi }}</td>
                        <td>{{ Str::limit($musisi->deskripsi, 50) }}</td>
                        <td>
                            @if($musisi->ig_url)
                                <a href="{{ $musisi->ig_url }}" target="_blank">{{ $musisi->ig_url }}</a>
                            @else
                                <span class="text-muted">Tidak ada link</span>
                            @endif
                        </td>
                        <td>
                            @if($musisi->gambar)
                                <img src="{{ asset('storage/'.$musisi->gambar) }}" width="100" class="img-thumbnail">
                            @else
                                <span class="text-muted">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('musisi.edit', $musisi->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('musisi.destroy', $musisi->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus musisi ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
