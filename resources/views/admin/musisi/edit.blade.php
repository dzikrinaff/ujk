@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h1 class="h4 text-dark">Edit Musisi</h1>
        <a href="{{ route('musisi.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm p-4">
        <form action="{{ route('musisi.update', $musisi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control">
                @if($musisi->gambar)
                    <div class="mt-2">
                        <img src="{{ asset('storage/'.$musisi->gambar) }}" width="120" class="img-thumbnail">
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Musisi</label>
                <input type="text" name="nama_musisi" class="form-control" value="{{ $musisi->nama_musisi }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control">{{ $musisi->deskripsi }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Instagram URL</label>
                <input type="text" name="ig_url" class="form-control" value="{{ $musisi->ig_url }}">
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan Perubahan
            </button>
        </form>
    </div>
</div>
@endsection
