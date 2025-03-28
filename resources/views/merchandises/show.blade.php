@extends('layouts.frontend')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm merchandise-detail-card">
                <div class="merchandise-img-container">
                    <img src="{{ asset('storage/'.$merchandise->gambar) }}" class="merchandise-img" alt="{{ $merchandise->nama }}">
                </div>
                <div class="card-body">
                    <h2 class="card-title text-center fw-bold">{{ $merchandise->nama }}</h2>
                    <p class="text-muted text-center">{{ Str::limit($merchandise->deskripsi, 100) }}</p>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="price-tag">Rp {{ number_format($merchandise->harga, 0, ',', '.') }}</span>
                        <span class="badge {{ $merchandise->stok > 0 ? 'bg-success' : 'bg-danger' }}">
                            {{ $merchandise->stok > 0 ? 'Tersedia' : 'Habis' }}
                        </span>
                    </div>

                    <div class="d-grid gap-2">
                        @if($merchandise->stok > 0)
                        <form action="{{ route('cart.add', $merchandise->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success btn-lg">+ Tambah ke Keranjang</button>
                        </form>
                        @else
                        <button class="btn btn-secondary btn-lg" disabled>Habis</button>
                        @endif
                        <a href="{{ route('merchandises.index') }}" class="btn btn-outline-primary btn-lg">← Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Card detail merchandise */
    .merchandise-detail-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    .merchandise-detail-card:hover {
        box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
    }

    /* Gambar dengan efek hover */
    .merchandise-img-container {
        position: relative;
        overflow: hidden;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .merchandise-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    .merchandise-img:hover {
        transform: scale(1.1);
    }

    /* Harga */
    .price-tag {
        font-size: 1.5rem;
        font-weight: bold;
        color: #28a745;
    }

    /* Responsif */
    @media (max-width: 768px) {
        .merchandise-img {
            height: 250px;
        }

        .price-tag {
            font-size: 1.2rem;
        }
    }
</style>
@endsection
