@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="h4 text-dark mb-4">Tambah Band</h1>
    <form action="{{ route('bands.store') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label for="nama" class="form-label">Nama Band</label>
            <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan nama band">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" placeholder="Masukkan deskripsi band"></textarea>
        </div>

        <div class="mb-4">
            <label for="ig_url" class="form-label">Instagram URL</label>
            <input type="url" name="ig_url" id="ig_url" class="form-control" placeholder="Masukkan URL Instagram band">
        </div>

        <div class="mb-4">
            <label for="yt_url" class="form-label">Youtube URL</label>
            <input type="url" name="yt_url" id="yt_url" class="form-control" placeholder="Masukkan URL Youtube band">
        </div>

        <div class="mb-4">
            <label for="spotify_url" class="form-label">Spotify URL</label>
            <input type="url" name="spotify_url" id="spotify_url" class="form-control" placeholder="Masukkan URL Spotify band">
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-4 py-2">Simpan</button>
        </div>
    </form>
</div>
@endsection
