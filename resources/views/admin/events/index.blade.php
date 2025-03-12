@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h1 class="h4 text-dark">Daftar Event</h1>
        <a href="{{ route('events.create') }}" class="btn btn-primary">Tambah Event</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Nama Event</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr>
                    <td>{{ $event->nama_event }}</td>
                    <td>{{ $event->lokasi }}</td>
                    <td>{{ $event->tanggal }}</td>
                    <td>{{ Str::limit($event->deskripsi, 50) }}</td> <!-- Membatasi panjang deskripsi -->
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
