@extends('layouts.frontend')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4 text-uppercase fw-bold">Merchandise Kami</h1>
    <div class="row">
        @foreach($merchandises as $merchandise)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card merchandise-card">
                <div class="merchandise-img-container">
                    <img src="{{ asset('storage/'.$merchandise->gambar) }}" class="merchandise-img" alt="{{ $merchandise->nama }}">
                    <div class="badge-container">
                        <span class="badge bg-primary">Rp {{ number_format($merchandise->harga, 0, ',', '.') }}</span>
                      
                    </div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $merchandise->nama }}</h5>
                    <p class="text-muted small">{{ Str::limit($merchandise->deskripsi, 60) }}</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('merchandises.show', $merchandise->id) }}" class="btn btn-outline-primary btn-sm px-4">Detail</a>
                        @if($merchandise->stok > 0)
                        <form action="{{ route('cart.add', $merchandise->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm px-4">+ Keranjang</button>
                        </form>
                        @else
                        <button class="btn btn-secondary btn-sm px-4" disabled>Habis</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    /* Card merchandise dengan efek hover */
    .merchandise-card {
        overflow: hidden;
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    .merchandise-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
    }

    /* Gambar dengan efek zoom */
    .merchandise-img-container {
        position: relative;
        overflow: hidden;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .merchandise-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform 0.4s ease-in-out;
    }

    .merchandise-card:hover .merchandise-img {
        transform: scale(1.1);
    }

    /* Label harga & stok */
    .badge-container {
        position: absolute;
        top: 10px;
        left: 10px;
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .badge {
        font-size: 12px;
        padding: 6px 10px;
        border-radius: 8px;
    }

    /* Responsif */
    @media (max-width: 768px) {
        .merchandise-img {
            height: 180px;
        }
    }
</style>
@endsection
