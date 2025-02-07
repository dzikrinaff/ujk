@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="h4 text-dark mb-4">Tambah Merchandise</h1>
    <form action="{{ route('merchandise.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-4">
            <label for="nama" class="form-label">Nama Merchandise</label>
            <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan nama merchandise">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" placeholder="Masukkan deskripsi merchandise"></textarea>
        </div>

        <div class="mb-4">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" required placeholder="Masukkan harga merchandise">
        </div>

        <div class="mb-4">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" required placeholder="Masukkan jumlah stok merchandise">
        </div>

        <div class="mb-4">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-4 py-2">Simpan</button>
        </div>
    </form>
</div>
@endsection
