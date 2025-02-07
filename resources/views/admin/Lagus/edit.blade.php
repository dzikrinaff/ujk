@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="h4 text-dark mb-4">Edit Lagu</h1>
    <form action="{{ route('lagu.update', $lagu->id) }}" method="POST">
        @csrf @method('PUT')
        
        <div class="mb-4">
            <label for="album_id" class="form-label">Album</label>
            <select name="album_id" id="album_id" class="form-control" required>
                <option value="">Pilih Album</option>
                @foreach ($albums as $album)
                    <option value="{{ $album->id }}" {{ $lagu->album_id == $album->id ? 'selected' : '' }}>{{ $album->judul }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="judul" class="form-label">Judul Lagu</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $lagu->judul) }}" required placeholder="Masukkan judul lagu">
        </div>

        <div class="mb-4">
            <label for="durasi" class="form-label">Durasi</label>
            <input type="time" name="durasi" id="durasi" class="form-control" value="{{ old('durasi', $lagu->durasi) }}" required>
        </div>

        <div class="mb-4">
            <label for="lirik" class="form-label">Lirik</label>
            <textarea name="lirik" id="lirik" class="form-control" rows="4" placeholder="Masukkan lirik lagu">{{ old('lirik', $lagu->lirik) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="yt_url" class="form-label">YouTube URL</label>
            <input type="url" name="yt_url" id="yt_url" class="form-control" value="{{ old('yt_url', $lagu->yt_url) }}" placeholder="Masukkan URL YouTube lagu">
        </div>

        <div class="mb-4">
            <label for="spotify_url" class="form-label">Spotify URL</label>
            <input type="url" name="spotify_url" id="spotify_url" class="form-control" value="{{ old('spotify_url', $lagu->spotify_url) }}" placeholder="Masukkan URL Spotify lagu">
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-4 py-2">Update</button>
        </div>
    </form>
</div>
@endsection
