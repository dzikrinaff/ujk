@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h1 class="h4 text-dark">Daftar Lagu</h1>
        <a href="{{ route('lagu.create') }}" class="btn btn-primary">Tambah Lagu</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Judul Lagu</th>
                    <th>Album</th>
                    <th>Durasi</th>
                    <th>URL YouTube</th>
                    <th>URL Spotify</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lagu as $l)
                    <tr>
                        <td>{{ $l->judul }}</td>
                        <td>{{ $l->album ? $l->album->judul : 'Tidak Ada Album' }}</td>
                        <td>{{ $l->durasi }}</td>
                        <td>
                            @if($l->yt_url)
                                <a href="{{ $l->yt_url }}" target="_blank">YouTube</a>
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            @if($l->spotify_url)
                                <a href="{{ $l->spotify_url }}" target="_blank">Spotify</a>
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('lagu.edit', $l->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('lagu.destroy', $l->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus lagu ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
