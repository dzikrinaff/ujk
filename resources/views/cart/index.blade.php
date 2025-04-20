@extends('layouts.frontend')

@section('content')
<div class="container py-5 mt-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="fw-bold display-6"> Keranjang Kamu</h1>
        <a href="{{ route('merchandises.index') }}" class="btn btn-outline-dark">
            <i class="bi bi-arrow-left me-2"></i> Kembali Ke Produk
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($carts->count())
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th style="width: 50%">Product</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carts as $cart)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $cart->merchandise->gambar) }}" class="rounded-2 me-3" width="60" height="60">
                                    <div>
                                        <h6 class="mb-0">{{ $cart->merchandise->nama }}</h6>
                                        <small class="text-muted">SKU: {{ $cart->merchandise->id }}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center">Rp {{ number_format($cart->merchandise->harga) }}</td>
                            <td class="align-middle text-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <!-- Button - -->
                                    <form action="{{ route('cart.update', $cart->id) }}" method="POST" class="me-1">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="quantity" value="{{ $cart->quantity - 1 }}">
                                        <button class="btn btn-sm btn-outline-secondary" {{ $cart->quantity <= 1 ? 'disabled' : '' }}>−</button>
                                    </form>

                                    <!-- Quantity Display -->
                                    <input type="text" value="{{ $cart->quantity }}" class="form-control form-control-sm text-center mx-2" style="width: 60px;" readonly>

                                    <!-- Button + -->
                                    <form action="{{ route('cart.update', $cart->id) }}" method="POST" class="ms-1">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="quantity" value="{{ $cart->quantity + 1 }}">
                                        <button class="btn btn-sm btn-outline-secondary" {{ $cart->quantity >= $cart->merchandise->stok ? 'disabled' : '' }}>+</button>
                                    </form>
                                </div>
                                @if($cart->quantity >= $cart->merchandise->stok)
                                    <small class="text-danger">Max stock reached</small>
                                @endif
                            </td>
                            <td class="align-middle text-center fw-bold">
                                Rp {{ number_format($cart->merchandise->harga * $cart->quantity) }}
                            </td>
                            <td class="align-middle text-center">
                                <form action="{{ route('cart.destroy', $cart->id) }}" method="POST" onsubmit="return confirm('Apakah Kamu Yakin?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer bg-light border-0">
            <div class="row">
                <div class="col-md-5 offset-md-7">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal:</span>
                        <span class="fw-bold">Rp {{ number_format($total) }}</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="fw-bold">Total:</span>
                        <span class="fw-bold text-primary">Rp {{ number_format($total) }}</span>
                    </div>
                    <a href="{{ route('checkout.index') }}" class="btn btn-primary w-100 py-3">
                        Proses Checkout <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="text-center py-5">
        <div class="mb-4">
            <i class="bi bi-cart-x display-1 text-muted"></i>
        </div>
        <h4 class="fw-bold mb-3">Keranjang Kamu Kosong</h4>
        <p class="text-muted mb-4">Sepertinya Kamu belum menambahkan apa pun ke keranjang Kamu</p>
        <a href="{{ route('merchandises.index') }}" class="btn btn-primary px-4">
            <i class="bi bi-arrow-left me-2"></i> Kembali Ke Produk
        </a>
    </div>
    @endif
</div>
@endsection
