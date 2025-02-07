@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="h4 text-dark mb-4">Edit Album</h1>
    <form action="{{ route('albums.update', $album->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $album->judul }}" required placeholder="Masukkan judul album">
        </div>

        <div class="mb-4">
            <label for="tanggal_rilis" class="form-label">Tanggal Rilis</label>
            <input type="date" name="tanggal_rilis" id="tanggal_rilis" class="form-control" value="{{ $album->tanggal_rilis }}" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" placeholder="Masukkan deskripsi album">{{ $album->deskripsi }}</textarea>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success px-4 py-2">Update</button>
        </div>
    </form>
</div>
@endsection
