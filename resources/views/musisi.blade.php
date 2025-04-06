@extends('layouts.frontend')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #7f8c8d;
        --accent-color: #e74c3c;
        --light-accent: #f39c12;
        --card-bg: #ffffff;
        --bg-gradient: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        --border-radius: 16px;
        --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: var(--bg-gradient);
        color: var(--primary-color);
        line-height: 1.6;
    }

    .musician-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 6rem 2rem;
    }

    .section-header {
        text-align: center;
        margin-bottom: 4rem;
        position: relative;
    }

    .section-title {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: var(--primary-color);
        position: relative;
        display: inline-block;
    }

    .section-title:after {
        content: '';
        position: absolute;
        width: 60px;
        height: 4px;
        background: var(--accent-color);
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .section-subtitle {
        font-size: 1.2rem;
        color: var(--secondary-color);
        max-width: 700px;
        margin: 0 auto;
    }

    .musician-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2.5rem;
    }

    .musician-card {
        background: var(--card-bg);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        transition: var(--transition);
        overflow: hidden;
        position: relative;
    }

    .musician-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
    }

    .musician-image-container {
        position: relative;
        height: 320px;
        overflow: hidden;
    }

    .musician-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .musician-card:hover .musician-image {
        transform: scale(1.05);
    }

    .placeholder-image {
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, #ddd 0%, #eee 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: #999;
    }

    .musician-info {
        padding: 1.5rem;
        text-align: center;
        position: relative;
    }

    .musician-name {
        font-size: 1.6rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: var(--primary-color);
    }

    .musician-role {
        font-size: 1rem;
        color: var(--accent-color);
        font-weight: 500;
        margin-bottom: 1.5rem;
        position: relative;
    }

    .musician-role:after {
        content: '';
        position: absolute;
        width: 40px;
        height: 2px;
        background: var(--light-accent);
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
    }

    .musician-description {
        font-size: 0.95rem;
        color: var(--secondary-color);
        margin-bottom: 1.5rem;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    .social-link {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        transition: var(--transition);
    }

    .social-link:hover {
        background: var(--accent-color);
        color: white;
        transform: translateY(-3px);
    }

    .instagram-link {
        display: inline-flex;
        align-items: center;
        background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D);
        color: white;
        padding: 10px 20px;
        border-radius: 30px;
        font-size: 0.95rem;
        font-weight: 500;
        text-decoration: none;
        transition: var(--transition);
        margin-top: 1rem;
    }

    .instagram-link i {
        margin-right: 8px;
        font-size: 1.1rem;
    }

    .instagram-link:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(225, 48, 108, 0.3);
    }

    /* Lightbox */
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: var(--transition);
        z-index: 1000;
    }

    .lightbox img {
        max-width: 90%;
        max-height: 90%;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        transform: scale(0.9);
        transition: var(--transition);
    }

    .lightbox.show {
        opacity: 1;
        visibility: visible;
    }

    .lightbox.show img {
        transform: scale(1);
    }

    .lightbox-close {
        position: absolute;
        top: 30px;
        right: 30px;
        font-size: 2.5rem;
        color: white;
        cursor: pointer;
        transition: var(--transition);
    }

    .lightbox-close:hover {
        color: var(--accent-color);
    }

    /* Decorative elements */
    .band-logo-corner {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background: var(--accent-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 1.2rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .musician-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .musician-section {
            padding: 4rem 1.5rem;
        }
        
        .section-title {
            font-size: 2.2rem;
        }
        
        .section-subtitle {
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .musician-grid {
            grid-template-columns: 1fr;
        }
        
        .musician-image-container {
            height: 280px;
        }
    }
</style>

<!-- Lightbox Container -->
<div class="lightbox" id="lightbox">
    <span class="lightbox-close">&times;</span>
    <img src="" alt="Zoomed Image">
</div>

<div class="musician-section">
    <div class="section-header">
        <h1 class="section-title">MEET THE BAND</h1>
        <p class="section-subtitle">The talented musicians who bring our music to life. Each member brings their unique style and energy to create our signature sound.</p>
    </div>
    
    <div class="musician-grid">
        @foreach ($musisis as $musisi)
        <div class="musician-card">
            <div class="musician-image-container">
                @if($musisi->gambar)
                    <img src="{{ asset('storage/' . $musisi->gambar) }}" alt="{{ $musisi->nama_musisi }}" class="musician-image" onclick="openLightbox(this)">
                @else
                    <div class="placeholder-image">
                        <i class="fas fa-music"></i>
                    </div>
                @endif
            </div>
            
            <div class="musician-info">
                <h3 class="musician-name">{{ $musisi->nama_musisi }}</h3>
                
                @if($musisi->deskripsi)
                    <p class="musician-role">{{ $musisi->deskripsi }}</p>
                @endif
                
                @if($musisi->bio)
                    <p class="musician-description">{{ Str::limit($musisi->bio, 120) }}</p>
                @endif
                
                <div class="social-links">
                    @if($musisi->ig_url)
                        <a href="{{ $musisi->ig_url }}" class="social-link" target="_blank" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif
                    @if($musisi->fb_url)
                        <a href="{{ $musisi->fb_url }}" class="social-link" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    @endif
                    @if($musisi->twitter_url)
                        <a href="{{ $musisi->twitter_url }}" class="social-link" target="_blank" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    @endif
                    @if($musisi->youtube_url)
                        <a href="{{ $musisi->youtube_url }}" class="social-link" target="_blank" title="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    @endif
                </div>
                
                @if($musisi->ig_url)
                    <a href="{{ $musisi->ig_url }}" class="instagram-link" target="_blank">
                        <i class="fab fa-instagram"></i> Follow
                    </a>
                @endif
            </div>
            
            <div class="band-logo-corner">
                {{ substr($musisi->nama_musisi, 0, 1) }}
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    function openLightbox(img) {
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = lightbox.querySelector('img');

        lightboxImage.src = img.src;
        lightbox.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    document.querySelector('.lightbox-close').addEventListener('click', function() {
        document.getElementById('lightbox').classList.remove('show');
        document.body.style.overflow = 'auto';
    });

    document.getElementById('lightbox').addEventListener('click', function(e) {
        if (e.target === this) {
            this.classList.remove('show');
            document.body.style.overflow = 'auto';
        }
    });

    // Close lightbox when pressing ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.getElementById('lightbox').classList.remove('show');
            document.body.style.overflow = 'auto';
        }
    });
</script>
@endsection