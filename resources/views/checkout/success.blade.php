@extends('layouts.frontend')

@section('content')
<div class="container py-5 text-center">
    <div class="mb-4 mt-5">
        <i class="bi bi-check-circle-fill text-success display-1"></i>
    </div>
    <h1 class="fw-bold mb-3">Pembayaran Berhasil!</h1>
    <p class="lead">Terima kasih telah berbelanja dengan kami</p>
    {{-- <p class="text-muted">Order ID: {{ $pemesanan_id }}</p> --}}
    <div class="mt-4">
        <a href="{{ route('merchandises.index') }}" class="btn btn-primary">
            <i class="bi bi-house"></i> Kembali ke Beranda
        </a>
    </div>
</div>
@endsection