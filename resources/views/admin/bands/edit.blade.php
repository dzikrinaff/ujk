@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="h4 text-dark">Edit Band</h1>

    <form action="{{ route('bands.update', $band->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Band</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $band->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5">{{ $band->deskripsi }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Band</button>
        <a href="{{ route('bands.index') }}" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>
@endsection
