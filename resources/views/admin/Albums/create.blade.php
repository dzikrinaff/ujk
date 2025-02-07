@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="h4 text-dark mb-4">Tambah Album</h1>
    <form action="{{ route('albums.store') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label for="judul" class="form-label">Judul Album</label>
            <input type="text" name="judul" id="judul" class="form-control" required placeholder="Masukkan judul album">
        </div>

        <div class="mb-4">
            <label for="tanggal_rilis" class="form-label">Tanggal Rilis</label>
            <input type="date" name="tanggal_rilis" id="tanggal_rilis" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" placeholder="Masukkan deskripsi album"></textarea>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-4 py-2">Simpan</button>
        </div>
    </form>
</div>
@endsection
