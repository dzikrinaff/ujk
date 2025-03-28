@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h1 class="h4 text-dark">Tambah Musisi</h1>
        <a href="{{ route('musisi.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <div class="card shadow-sm p-4">
        <form action="{{ route('musisi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Musisi</label>
                <input type="text" name="nama_musisi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Instagram URL</label>
                <input type="text" name="ig_url" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan
            </button>
        </form>
    </div>
</div>
@endsection
