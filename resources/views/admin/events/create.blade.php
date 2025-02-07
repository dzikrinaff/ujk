@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="h4 text-dark mb-4">Tambah Event</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label for="nama" class="form-label">Nama Event</label>
            <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan nama event">
        </div>

        <div class="mb-4">
            <label for="ticket_url" class="form-label">Ticket URL</label>
            <input type="url" name="ticket_url" id="ticket_url" class="form-control" required placeholder="Masukkan URL tiket">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" placeholder="Masukkan deskripsi event"></textarea>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-4 py-2">Simpan</button>
        </div>
    </form>
</div>
@endsection
