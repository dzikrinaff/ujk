@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h1 class="h4 text-dark">Daftar Band</h1>
        <a href="{{ route('bands.create') }}" class="btn btn-primary">Tambah Band</a>
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
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Instagram</th>
                    <th>Youtube</th>
                    <th>Spotify</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bands as $band)
                <tr>
                    <td>{{ $band->nama }}</td>
                    <td>{{ Str::limit($band->deskripsi, 50) }}</td> <!-- Membatasi panjang deskripsi -->
                    <td>
                        <a href="{{ $band->ig_url }}" target="_blank" class="text-primary">
                            <i class="fab fa-instagram"></i> Klik Instagram
                        </a>
                    </td>
                    <td>
                        <a href="{{ $band->yt_url }}" target="_blank" class="text-danger">
                            <i class="fab fa-youtube"></i>Klik YouTube
                        </a>
                    </td>
                    <td>
                        <a href="{{ $band->spotify_url }}" target="_blank" class="text-success">
                            <i class="fab fa-spotify"></i>Klik Spotify
                        </a>
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('bands.edit', $band->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('bands.destroy', $band->id) }}" method="POST" style="display:inline;">
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
