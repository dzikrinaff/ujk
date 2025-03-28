@extends('layouts.frontend')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    :root {
        --primary-color: #333;
        --secondary-color: #555;
        --accent-color: #E53E3E;
        --card-bg: #fff;
        --border-radius: 12px;
        --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s ease-in-out;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #f8f9fa;
        color: var(--primary-color);
    }

    .musician-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 1rem;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 600;
        text-align: center;
        margin-bottom: 20px;
        color: var(--primary-color);
    }

    .section-subtitle {
        font-size: 1.1rem;
        text-align: center;
        color: var(--secondary-color);
        max-width: 600px;
        margin: 0 auto 3rem;
    }

    .musician-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .musician-card {
        background: var(--card-bg);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        transition: var(--transition);
        text-align: center;
        padding: 20px;
    }

    .musician-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .musician-image {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #ddd;
        margin-bottom: 15px;
        transition: var(--transition);
        cursor: pointer;
    }

    .musician-card:hover .musician-image {
        transform: scale(1.05);
    }

    .placeholder-image {
        width: 110px;
        height: 110px;
        background: #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 2.5rem;
        color: #777;
        margin-bottom: 15px;
    }

    .musician-info {
        padding: 10px 0;
    }

    .musician-name {
        font-size: 1.4rem;
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 5px;
    }

    .musician-role {
        font-size: 0.95rem;
        color: var(--secondary-color);
        margin-bottom: 15px;
    }

    .instagram-link {
        display: inline-flex;
        align-items: center;
        background: #eee;
        color: var(--primary-color);
        padding: 8px 15px;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition);
    }

    .instagram-link i {
        margin-right: 8px;
        font-size: 1.1rem;
        color: var(--accent-color);
    }

    .instagram-link:hover {
        background: var(--accent-color);
        color: #fff;
    }

    /* Lightbox (Zoom Image) */
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: var(--transition);
    }

    .lightbox img {
        max-width: 80%;
        max-height: 80%;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
    }

    .lightbox.show {
        opacity: 1;
        visibility: visible;
    }

    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 2rem;
        color: #fff;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .musician-grid {
            grid-template-columns: 1fr;
        }

        .section-title {
            font-size: 2rem;
        }
    }
</style>

<!-- Lightbox Container -->
<div class="lightbox" id="lightbox">
    <span class="lightbox-close">&times;</span>
    <img src="" alt="Zoomed Image">
</div>

<div class="musician-section">
    <div class="section-title" style="margin-top: 40px;">
        <h2>PERSONEL BAND</h2>
    </div>
    <div class="musician-grid">
        @foreach ($musisis as $musisi)
        <div class="musician-card">
            @if($musisi->gambar)
                <img src="{{ asset('storage/' . $musisi->gambar) }}" alt="{{ $musisi->nama_musisi }}" class="musician-image" onclick="openLightbox(this)">
            @else
                
            @endif
            
            <div class="musician-info">
                <h3 class="musician-name">{{ $musisi->nama_musisi }}</h3>
                
                @if($musisi->deskripsi)
                    <p class="musician-role">{{ $musisi->deskripsi }}</p>
                @endif
                
                @if($musisi->ig_url)
                    <a href="{{ $musisi->ig_url }}" class="instagram-link" target="_blank">
                        <i class="fab fa-instagram"></i> Ikuti Saya
                    </a>
                @endif
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
    }

    document.querySelector('.lightbox-close').addEventListener('click', function() {
        document.getElementById('lightbox').classList.remove('show');
    });

    document.getElementById('lightbox').addEventListener('click', function(e) {
        if (e.target === this) {
            this.classList.remove('show');
        }
    });
</script>
@endsection
