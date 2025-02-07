@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h1 class="h4 text-dark">Daftar Album</h1>
        <a href="{{ route('albums.create') }}" class="btn btn-primary">Tambah Album</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Judul</th>
                    <th>Tanggal Rilis</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                <tr>
                    <td>{{ $album->judul }}</td>
                    <td>{{ $album->tanggal_rilis }}</td>
                    <td>{{ Str::limit($album->deskripsi, 50) }}</td> <!-- Membatasi panjang deskripsi -->
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('albums.destroy', $album->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
