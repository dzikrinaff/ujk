@extends('layouts.frontend')

@section('content')
<div class="container py-5 mt-5">
    <h1 class="mb-4 fw-bold">Checkout</h1>

    @if($carts->count())
        <form id="checkoutForm">
            @csrf
            <div class="mb-4">
                <h4 class="fw-semibold">Ringkasan Pesanan</h4>
                <ul class="list-group shadow-sm mb-3">
                    @foreach($carts as $cart)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong>{{ $cart->merchandise->nama }}</strong><br>
                                <small>x {{ $cart->quantity }}</small>
                            </div>
                            <span>Rp {{ number_format($cart->merchandise->harga * $cart->quantity, 0, ',', '.') }}</span>
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <strong>Total</strong>
                        <strong>Rp {{ number_format($total, 0, ',', '.') }}</strong>
                    </li>
                </ul>
            </div>

            <!-- Form Input Data Pengiriman -->
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Data Pengiriman</h5>
                    <div class="mb-3">
                        <label for="telpon" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="telpon" name="telpon" 
                               value="{{ old('telpon', auth()->user()->phone ?? '') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Lengkap</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ old('alamat', auth()->user()->address ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <button type="submit" id="pay-button" class="btn btn-success w-100 py-3 fs-5">
                Bayar Sekarang <i class="bi bi-wallet2 ms-2"></i>
            </button>
        </form>
        
        <!-- Loading Indicator -->
        <div id="loading-indicator" class="text-center mt-3" style="display: none;">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-2">Memproses pembayaran...</p>
        </div>

        <!-- Error Message -->
        <div id="error-message" class="alert alert-danger mt-3" style="display: none;"></div>

    @else
        <div class="text-center py-5">
            <i class="bi bi-cart-x display-1 text-muted"></i>
            <h4 class="fw-bold mt-3">Keranjang kamu kosong</h4>
            <a href="{{ route('merchandises.index') }}" class="btn btn-outline-primary mt-3">
                <i class="bi bi-arrow-left me-2"></i> Kembali Belanja
            </a>
        </div>
    @endif
</div>
@endsection

@push('scripts')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" 
        data-client-key="{{ config('midtrans.client_key') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('checkoutForm');
    const payButton = document.getElementById('pay-button');
    const loadingIndicator = document.getElementById('loading-indicator');
    const errorMessage = document.getElementById('error-message');
    
    if (!form) return;

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // UI Feedback
        payButton.disabled = true;
        loadingIndicator.style.display = 'block';
        errorMessage.style.display = 'none';

        try {
            // 1. Validasi Form
            const formData = new FormData(form);
            const telpon = formData.get('telpon');
            const alamat = formData.get('alamat');
            
            if (!telpon || !alamat) {
                throw new Error('Nomor telepon dan alamat wajib diisi!');
            }

            // 2. Kirim Data ke Server
            const response = await fetch("{{ route('checkout.process') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
                body: formData
            });

            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(errorData.message || 'Proses pembayaran gagal!');
            }

            const data = await response.json();
            console.log("Snap Token:", data.snap_token);

            // 3. Pastikan Snap.js Terload
            if (typeof snap === 'undefined') {
                throw new Error('Midtrans Payment Gateway tidak terload!');
            }

            // 4. Buka Popup Pembayaran
            snap.pay(data.snap_token, {
                onSuccess: function(result) {
                    window.location.href = "{{ route('payment.success') }}?order_id=" + data.order_id;
                },
                onPending: function(result) {
                    window.location.href = "{{ route('payment.pending') }}?order_id=" + data.order_id;
                },
                onError: function(error) {
                    errorMessage.textContent = 'Pembayaran gagal: ' + error.message;
                    errorMessage.style.display = 'block';
                },
                onClose: function() {
                    payButton.disabled = false;
                    loadingIndicator.style.display = 'none';
                }
            });

        } catch (error) {
            console.error("Error:", error);
            errorMessage.textContent = error.message;
            errorMessage.style.display = 'block';
            payButton.disabled = false;
            loadingIndicator.style.display = 'none';
        }
    });
});
</script>
@endpush


