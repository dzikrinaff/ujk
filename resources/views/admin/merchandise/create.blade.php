@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="h4 text-dark mb-4">Tambah Merchandise</h1>
    <form action="{{ route('merchandise.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control mb-3" required>
        
        <label>Deskripsi:</label>
        <textarea name="deskripsi" class="form-control mb-3"></textarea>

        <label>Harga:</label>
        <input type="number" name="harga" class="form-control mb-3" required>

        <label>Stok:</label>
        <input type="number" name="stok" class="form-control mb-3" required>

        <label>Gambar:</label>
        <input type="file" name="gambar" class="form-control mb-3">

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
