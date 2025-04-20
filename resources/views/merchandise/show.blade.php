@extends('layouts.frontend')

@section('content')
<!-- Tambahkan padding top untuk menghindari navbar -->
<section class="pt-5 pb-5 bg-light" style="margin-top: 80px;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="bg-white p-3 p-md-4 shadow-sm rounded">
                    <!-- Tambahkan lightbox trigger -->
                    <a href="{{ asset('storage/' . $merchandise->gambar) }}" data-lightbox="merch-image" data-title="{{ $merchandise->nama }}">
                        <img src="{{ asset('storage/' . $merchandise->gambar) }}" 
                             class="img-fluid rounded w-100 zoom-hover" 
                             alt="{{ $merchandise->nama }}"
                             style="max-height: 500px; object-fit: contain; cursor: zoom-in;">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white p-3 p-md-4 shadow-sm rounded h-100">
                    <!-- Judul dengan efek modern -->
                    <h1 class="fw-bold mb-3 merch-title">{{ $merchandise->nama }}</h1>
                    
                    <!-- Harga dengan styling menarik -->
                    <div class="d-flex align-items-center mb-3">
                        <h3 class="price-display mb-0">
                            <span class="currency">Rp</span> 
                            <span class="amount">{{ number_format($merchandise->harga) }}</span>
                        </h3>
                    </div>

                    <!-- Stok dengan indikator visual -->
                    <div class="mb-3 stock-container">
                        <span class="stock-label">Stok:</span>
                        <span class="stock-value @if($merchandise->stok < 5) low-stock @else in-stock @endif">
                            @if($merchandise->stok < 5)
                                <i class="bi bi-exclamation-triangle-fill"></i> Hanya tersisa {{ $merchandise->stok }}
                            @else
                                <i class="bi bi-check-circle-fill"></i> {{ $merchandise->stok }} tersedia
                            @endif
                        </span>
                    </div>

                    <!-- Deskripsi dengan format lebih baik -->
                    <div class="merch-description mb-4">
                        <p>{{ $merchandise->deskripsi }}</p>
                    </div>

                    <!-- Form dengan styling lebih baik -->
                    <form action="{{ route('cart.add', $merchandise->id) }}" method="POST">
                        @csrf
                        <div class="row g-3 align-items-center mb-4">
                            <div class="col-md-3 col-6">
                                <input type="number" name="quantity" 
                                       class="form-control quantity-input" 
                                       value="1" 
                                       min="1" 
                                       max="{{ $merchandise->stok }}" 
                                       required>
                            </div>
                            <div class="col-md-9 col-6">
                                <button type="submit" class="btn btn-add-to-cart w-100 py-2">
                                    <i class="bi bi-cart-plus me-1"></i> Tambahkan ke Keranjang
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Info produk dengan layout lebih baik -->
                    <div class="product-info border-top pt-3">
                        <div class="row">
                            <div class="col-md-6 info-item">
                                <p><i class="bi bi-tag-fill text-primary me-2"></i><strong>Material:</strong> 100% Katun</p>
                            </div>
                            <div class="col-md-6 info-item">
                                <p><i class="bi bi-patch-check-fill text-success me-2"></i><strong>Produk:</strong> Merchandise Resmi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

<style>
    body {
        background-color: #f8f9fa;
        padding-top: 70px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    /* Efek zoom hover pada gambar */
    .zoom-hover {
        transition: transform 0.3s ease;
    }
    
    .zoom-hover:hover {
        transform: scale(1.02);
    }
    
    /* Styling judul produk */
    .merch-title {
        color: #2c3e50;
        font-size: 2rem;
        position: relative;
        padding-bottom: 10px;
    }
    
    .merch-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, #f39c12, #e74c3c);
    }
    
    /* Tampilan harga */
    .price-display {
        color: #e74c3c;
        font-weight: 700;
    }
    
    .price-display .currency {
        font-size: 1.2rem;
        margin-right: 5px;
    }
    
    .price-display .amount {
        font-size: 1.8rem;
    }
    
    /* Tampilan stok */
    .stock-container {
        background: #f8f9fa;
        padding: 8px 12px;
        border-radius: 6px;
    }
    
    .stock-label {
        color: #7f8c8d;
    }
    
    .stock-value {
        font-weight: 600;
        margin-left: 8px;
    }
    
    .in-stock {
        color: #27ae60;
    }
    
    .low-stock {
        color: #e74c3c;
    }
    
    /* Deskripsi produk */
    .merch-description {
        line-height: 1.8;
        color: #34495e;
    }
    
    /* Input quantity */
    .quantity-input {
        border: 2px solid #bdc3c7;
        font-weight: 600;
        text-align: center;
    }
    
    .quantity-input:focus {
        border-color: #f39c12;
        box-shadow: 0 0 0 0.25rem rgba(243, 156, 18, 0.25);
    }
    
    /* Tombol tambah ke keranjang */
    .btn-add-to-cart {
        background-color: #f39c12;
        color: white;
        font-weight: 600;
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-add-to-cart:hover {
        background-color: #e67e22;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    /* Info produk */
    .product-info {
        color: #7f8c8d;
    }
    
    .info-item {
        margin-bottom: 8px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        section {
            margin-top: 60px !important;
        }
        
        body {
            padding-top: 60px;
        }
        
        .merch-title {
            font-size: 1.5rem;
        }
        
        .price-display .amount {
            font-size: 1.5rem;
        }
    }
</style>

<!-- Lightbox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endsection