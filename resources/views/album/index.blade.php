@extends('layouts.frontend')

@section('content')
<div class="container">
    <section class="album-section">

        <div class="album-subtitle">Album Kami</div>        
        <div class="albums-grid">
            @foreach($albums as $album)
                <div class="album-card">
                    <div class="album-image">
                        <img src="{{ asset('frontend/assets/img/bg.jpeg') }}" alt="">
                        <span class="album-year">{{ date('Y', strtotime($album->tanggal_rilis)) }}</span>
                    </div>
                    <div class="album-content">
                        <h3 class="album-title">{{ $album->judul }}</h3>
                        <p class="album-desc">{{ Str::limit($album->deskripsi, 80, '...') }}</p>
                        <div class="album-footer">
                            <i class="far fa-calendar-alt"></i> 
                            {{ $album->tanggal_rilis ? date('F j, Y', strtotime($album->tanggal_rilis)) : 'Coming Soon' }}
                        </div>

                        <div class="album-action mt-3">
                            <a href="{{ route('album.detail', $album->id) }}" class="btn custom-btn">
                                Daftar Lagu
                            </a>                            
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
