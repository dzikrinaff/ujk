@extends('layouts.frontend')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style>
    :root {
        --primary-color: #010101;
        --secondary-color: #7f8c8d;
        --accent-color: #ffffff;
        --light-bg: #f9f9f9;
        --card-bg: #ffffff;
        --text-dark: #000000;
        --text-light: #ffffff;
        --border-radius: 20px;
        --shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        --transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: var(--light-bg);
        color: var(--text-dark);
        min-height: 100vh;
        overflow-x: hidden;
    }

    .musician-section {
        max-width: 1400px;
        margin: 0 auto;
        padding: 8rem 2rem;
        position: relative;
    }

    .section-header {
    text-align: center;
    margin-bottom: 1rem;
    font-size: 1rem; /* Ukuran lebih kecil dari 4.5rem */
    margin-bottom: 1rem; /* Jarak bawah lebih kecil */
    line-height: 1.2; /* Tinggi baris lebih rapat */
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem; /* Diubah dari 5rem ke 2rem */
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: var(--primary-color);
    position: relative;
    display: inline-block;
    line-height: 1.2;
}

    .musician-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 3rem;
    }

    .musician-card {
        background: var(--card-bg);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        transition: var(--transition);
        overflow: hidden;
        position: relative;
        transform-style: preserve-3d;
        perspective: 1000px;
    }

    .musician-card:hover {
        transform: translateY(-15px) rotateX(5deg);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
    }

    .musician-image-container {
        position: relative;
        height: 380px;
        overflow: hidden;
    }

    .musician-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .musician-card:hover .musician-image {
        transform: scale(1.1);
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(81, 80, 80, 0.8) 0%, transparent 60%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 2.5rem;
        z-index: 2;
    }

    .instagram-hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #4d4d4de6, #4d4d4de6);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: var(--transition);
        z-index: 3;
    }

    .musician-card:hover .instagram-hover {
        opacity: 1;
    }

    .instagram-button {
        display: inline-flex;
        align-items: center;
        background: rgb(0, 0, 0);
        color: white;
        padding: 15px 30px;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        transition: var(--transition);
        opacity: 0;
        transform: translateY(10px);
    }

    .musician-card:hover .instagram-button {
        opacity: 1;
        transform: translateY(0);
    }

    .instagram-button i {
        margin-right: 12px;
        font-size: 1.4rem;
        color: white;
    }

    .social-links {
        position: absolute;
        bottom: 30px;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        gap: 15px;
        z-index: 4;
        opacity: 0;
        transition: var(--transition);
    }

    .musician-card:hover .social-links {
        opacity: 1;
    }

    .social-link {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(5px);
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgb(78, 230, 8);
        transition: var(--transition);
        transform: translateY(10px);
    }

    .musician-card:hover .social-link {
        transform: translateY(0);
    }

    .social-link:nth-child(1) { transition-delay: 0.1s; }
    .social-link:nth-child(2) { transition-delay: 0.2s; }
    .social-link:nth-child(3) { transition-delay: 0.3s; }

    .social-link:hover {
        background: rgb(231, 0, 0);
        color: white;
        transform: translateY(-5px) !important;
    }

    .placeholder-image {
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, #f5f5f5 0%, #e0e0e0 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 4rem;
        color: var(--accent-color);
    }

    .musician-info {
        padding: 0 2.5rem 2.5rem;
    }

    .musician-name {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: var(--text-light);
        text-shadow: 0 2px 5px rgba(255, 255, 255, 0.3);
    }

    .musician-role {
        font-size: 1.1rem;
        color: var(--accent-color);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Floating elements */
    .floating-element {
        position: absolute;
        border-radius: 50%;
        filter: blur(40px);
        opacity: 0.1;
        z-index: -1;
        animation: float 15s ease-in-out infinite;
    }

    .element-1 {
        width: 300px;
        height: 300px;
        background: var(--accent-color);
        top: 10%;
        left: 5%;
    }

    .element-2 {
        width: 400px;
        height: 400px;
        background: var(--primary-color);
        bottom: 10%;
        right: 5%;
        animation-delay: 2s;
        animation-direction: reverse;
    }

    @keyframes float {
        0% { transform: translate(0, 0) rotate(0deg); }
        50% { transform: translate(-20px, -20px) rotate(5deg); }
        100% { transform: translate(0, 0) rotate(0deg); }
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .musician-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        }
    }

    @media (max-width: 992px) {
        .section-title {
            font-size: rem;
        }
        
        .musician-image-container {
            height: 320px;
        }
    }

    @media (max-width: 768px) {
        .musician-section {
            padding: 6rem 1.5rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .musician-grid {
            grid-template-columns: 1fr;
            max-width: 500px;
            margin: 0 auto;
        }
    }

    @media (max-width: 576px) {
        .section-title {
            font-size: 2rem;
        }
        
        .musician-image-container {
            height: 300px;
        }
    }
</style>

<!-- Floating Background Elements -->
<div class="floating-element element-1"></div>
<div class="floating-element element-2"></div>

<div class="musician-section">
    <div class="section-header" data-aos="fade-up">
        <h1 class="section-title">Personil Band Kami</h1>
    </div>
    
    <div class="musician-grid">
        @foreach ($musisis as $musisi)
        <div class="musician-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="musician-image-container">
                @if($musisi->gambar)
                    <img src="{{ asset('storage/' . $musisi->gambar) }}" alt="{{ $musisi->nama_musisi }}" class="musician-image">
                    <div class="image-overlay">
                        <div class="musician-info">
                            <h3 class="musician-name">{{ $musisi->nama_musisi }}</h3>
                            <p class="musician-role">{{ $musisi->deskripsi }}</p>
                        </div>
                    </div>
                    
                    @if($musisi->ig_url)
                    <div class="instagram-hover">
                        <a href="{{ $musisi->ig_url }}" class="instagram-button" target="_blank">
                            <i class="fab fa-instagram"></i> Ikuti Saya
                        </a>
                        
                        <div class="social-links">
                            @if($musisi->fb_url)
                            <a href="{{ $musisi->fb_url }}" class="social-link" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            @endif
                            @if($musisi->twitter_url)
                            <a href="{{ $musisi->twitter_url }}" class="social-link" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            @endif
                            @if($musisi->youtube_url)
                            <a href="{{ $musisi->youtube_url }}" class="social-link" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                    @endif
                @else
                    <div class="placeholder-image">
                        <i class="fas fa-user"></i>
                    </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    // Initialize animations
    AOS.init({
        duration: 800,
        once: true
    });

    // Add hover effect to cards
    document.querySelectorAll('.musician-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const x = e.clientX - card.getBoundingClientRect().left;
            const y = e.clientY - card.getBoundingClientRect().top;
            
            const centerX = card.offsetWidth / 2;
            const centerY = card.offsetHeight / 2;
            
            const angleX = (y - centerY) / 20;
            const angleY = (centerX - x) / 20;
            
            card.style.transform = `translateY(-15px) rotateX(${angleX}deg) rotateY(${angleY}deg)`;
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(-15px) rotateX(5deg)';
        });
    });
</script>
@endsection