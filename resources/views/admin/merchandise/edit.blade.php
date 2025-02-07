@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="h4 text-dark mb-4">Edit Merchandise</h1>
    <form action="{{ route('merchandise.update', $merchandise->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="nama" class="form-label">Nama Merchandise</label>
            <input type="text" name="nama" id="nama" class="form-control" required value="{{ $merchandise->nama }}">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4">{{ $merchandise->deskripsi }}</textarea>
        </div>

        <div class="mb-4">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" required value="{{ $merchandise->harga }}">
        </div>

        <div class="mb-4">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" required value="{{ $merchandise->stok }}">
        </div>

        <div class="mb-4">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
            @if($merchandise->gambar_url)
                <img src="{{ asset('storage/'.$merchandise->gambar_url) }}" width="100" height="100" alt="Gambar Merchandise">
            @endif
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-4 py-2">Simpan</button>
        </div>
    </form>
</div>
@endsection
