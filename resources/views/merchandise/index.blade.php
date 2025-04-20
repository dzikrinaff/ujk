@extends('layouts.frontend')

@section('content')
<div class="merch-store">
    <!-- Hero Banner -->
    <div class="merch-hero position-relative mb-5">
        <div class="container py-5">
            <div class="d-flex justify-content-center align-items-center text-center" style="min-height: 100vh;">
                <div>
                    <h1 class="display-3 fw-bold text-white mb-3">OFFICIAL MERCH</h1>
                    <p class="lead text-white mb-4">Merch resmi kami sudah tersedia! Cek koleksi sekarang juga!</p>
                    <a href="#merch-list" class="btn btn-outline-light btn-lg px-4">Shop Now</a>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container py-4" id="merch-list">
        <!-- Filter Bar -->
        <div class="d-flex justify-content-between align-items-center mb-5 p-3 bg-dark text-white rounded">
            <h2 class="mb-0 shop-all-title">MERCH ALL</h2>
            <div class="position-relative">
                <a href="{{ route('cart.index') }}" class="btn btn-outline-light position-relative">
                    <i class="bi bi-cart3"></i> CART
                    @if(session('cart'))
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ count(session('cart')) }}
                        </span>
                    @endif
                </a>
            </div>
        </div>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Merch Grid -->
        <div class="row g-4">
            @foreach($merchandises as $item)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="merch-card">
                    <div class="merch-badge @if($item->stok < 5) bg-danger @else bg-success @endif">
                        @if($item->stok < 5) 
                            ONLY {{ $item->stok }} LEFT 
                        @else 
                            IN STOCK 
                        @endif
                    </div>
                    <div class="merch-image">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}">
                        <div class="merch-overlay">
                            <a href="{{ route('merchandises.show', $item->id) }}" class="btn btn-transparent btn-icon">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                            <form action="{{ route('cart.add', $item->id) }}" method="POST" class="btn-icon-form">
                                @csrf
                                <button type="submit" class="btn btn-transparent btn-icon">
                                    <i class="bi bi-cart-plus-fill"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="merch-info p-3">
                        <h5 class="merch-title">{{ $item->nama }}</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="merch-price">Rp {{ number_format($item->harga) }}</span>
                            <span class="merch-stock @if($item->stok < 5) text-danger @else text-success @endif">
                                <i class="bi bi-box-seam"></i> {{ $item->stok }} available
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .merch-store {
        background-color: #ffffff;
    }

    .merch-hero {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
          url('https://i.pinimg.com/736x/63/4c/75/634c755dae438e50b4fa1c046ab362ff.jpg');
        background-size: cover;
        background-position: center;
        min-height: 600px;
        display: flex;
        align-items: center;
    }

    .merch-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(155, 101, 101, 0.1);
        transition: all 0.3s ease;
        position: relative;
    }

    .merch-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .shop-all-title {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    font-weight: 800;
    }

    .merch-store .d-flex.justify-content-between.align-items-center.mb-5.p-3.rounded {
        background-color: #2a2a2a !important; 
    }

    .merch-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 12px;
        font-weight: bold;
        color: white;
        z-index: 2;
    }
    
    .merch-image {
        height: 250px;
        position: relative;
        overflow: hidden;
    }

    .merch-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .merch-card:hover .merch-image img {
        transform: scale(1.1);
    }

    .merch-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        gap: 20px;
    }

    .merch-card:hover .merch-overlay {
        opacity: 1;
    }

    .btn-transparent {
        background: transparent;
        border: none;
        padding: 0;
        width: 40px;
        height: 40px;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .merch-card:hover .btn-transparent {
        opacity: 1;
    }

    .btn-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        font-size: 1.2rem;
        color: white;
        transition: all 0.3s ease;
    }

    .btn-icon:hover {
        transform: scale(1.5); /* Memperbesar 50% */
    color: #fdfdfd; /* Bisa tambahkan perubahan warna */
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Efek glow */
    }

    .btn-icon-form {
        margin: 0;
    }

    .merch-info {
        background-color: #fff;
    }

    .merch-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .merch-price {
        font-weight: bold;
        color: #dc3545;
    }

    .merch-stock {
        font-size: 0.85rem;
    }
</style>
@endsection