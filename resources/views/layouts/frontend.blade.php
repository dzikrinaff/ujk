<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PerungguWebsite</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/your-key.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nowfont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rockville.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/albums.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const payButton = document.getElementById('pay-button');
            const loadingIndicator = document.getElementById('loading-indicator');
            const errorMessage = document.getElementById('error-message');
            
            if (!payButton) {
                console.error("Tombol pembayaran tidak ditemukan");
                return;
            }
        
            // Fungsi untuk memuat ulang Snap.js jika gagal
            function loadSnapScript() {
                return new Promise((resolve) => {
                    if (typeof snap !== 'undefined') {
                        resolve();
                        return;
                    }
        
                    console.log("Memuat ulang Snap.js...");
                    const script = document.createElement('script');
                    script.src = 'https://app.sandbox.midtrans.com/snap/snap.js';
                    script.setAttribute('data-client-key', '{{ config('midtrans.client_key') }}');
                    script.onload = () => resolve();
                    script.onerror = () => {
                        console.error("Gagal memuat Snap.js");
                        resolve(false);
                    };
                    document.body.appendChild(script);
                });
            }
        
            payButton.addEventListener('click', async function() {
                console.log("Memulai proses pembayaran...");
                
                // UI Feedback
                payButton.disabled = true;
                loadingIndicator.style.display = 'block';
                errorMessage.style.display = 'none';
        
                try {
                    // Debug info
                    console.log('Client Key:', '{{ config('midtrans.client_key') }}');
                    console.log('Environment:', '{{ config('midtrans.is_production') ? 'Production' : 'Sandbox' }}');
        
                    // 1. Dapatkan snap token dari server
                    const response = await fetch("{{ route('checkout.process') }}", {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        }
                    });
        
                    console.log("Status response:", response.status);
                    
                    if (!response.ok) {
                        const errorData = await response.json();
                        throw new Error(errorData.error || `HTTP error! status: ${response.status}`);
                    }
        
                    const data = await response.json();
                    console.log("Data response:", data);
        
                    // 2. Pastikan Snap.js terload
                    if (typeof snap === 'undefined') {
                        const loaded = await loadSnapScript();
                        if (!loaded) {
                            throw new Error("Gagal memuat Midtrans Payment Gateway");
                        }
                    }
        
                    // 3. Buka popup pembayaran
                    snap.pay(data.snap_token, {
                        onSuccess: function(result) {
                            console.log("Pembayaran sukses:", result);
                            window.location.href = "{{ route('payment.success') }}?order_id=" + data.order_id;
                        },
                        onPending: function(result) {
                            console.log("Pembayaran pending:", result);
                            window.location.href = "{{ route('payment.pending') }}?order_id=" + data.order_id;
                        },
                        onError: function(error) {
                            console.error("Error pembayaran:", error);
                            window.location.href = "{{ route('payment.error') }}?order_id=" + data.order_id;
                        },
                        onClose: function() {
                            console.log("Popup pembayaran ditutup");
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
        </script> --}}
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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('include.frontend.navbar')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @yield('content')

    <!-- Footer Section Begin -->
    @include('include.frontend.footer')

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- Music Plugin -->
    <script src="{{ asset('frontend/assets/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jplayerInit.js') }}"></script>
</body>

</html>