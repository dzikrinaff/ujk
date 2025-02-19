@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="h4 text-dark">Detail Merchandise</h1>
    
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">{{ $merchandise->nama }}</h5>
            
            @if ($merchandise->gambar_url)
                <div class="text-center mb-3">
                    <img src="{{ asset('storage/' . $merchandise->gambar_url) }}" class="img-fluid rounded shadow" style="max-width: 400px;" alt="{{ $merchandise->nama }}">
                </div>
            @else
                <p class="text-muted">Tidak ada gambar</p>
            @endif

            <p class="card-text"><strong>Deskripsi:</strong> {{ $merchandise->deskripsi }}</p>
            <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($merchandise->harga, 0, ',', '.') }}</p>

            <a href="{{ route('merchandise.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
