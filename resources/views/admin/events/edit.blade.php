@extends('layouts.admin')


@section('content')
<div class="container">
    <h2>Edit Event</h2>
    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Event</label>
            <input type="text" name="nama_event" class="form-control" value="{{ $event->nama_event }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $event->lokasi }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $event->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Ticket URL</label>
            <input type="url" name="ticket_url" class="form-control" value="{{ $event->ticket_url }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $event->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('events.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
