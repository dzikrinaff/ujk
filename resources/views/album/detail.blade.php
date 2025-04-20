@extends('layouts.frontend')

@section('content')
<div class="container py-5">
    <div class="album-detail">
        <!-- Header Album -->
        <div class="row mb-5 align-items-center">
            <div class="col-md-4 mb-3 mb-md-0 mt-5">
                <img src="{{ asset('frontend/assets/img/bg.jpeg') }}" alt="{{ $album->judul }}" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-8">
                <h1 class="fw-bold">{{ $album->judul }}</h1>
                <p class="text-muted mb-2">
                    <i class="far fa-calendar-alt"></i>
                    {{ $album->tanggal_rilis ? date('F j, Y', strtotime($album->tanggal_rilis)) : 'Coming Soon' }}
                </p>
                <p class="text-secondary">{{ $album->deskripsi }}</p>
            </div>
        </div>

        <!-- List Lagu -->
        <div class="card border-0 shadow-sm">
           
            <div class="card-body p-0">
                @forelse($album->lagu as $lagu)
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center border-bottom p-3">
                    <div>
                        <h6 class="mb-1 fw-semibold">{{ $lagu->judul }}</h6>
                        <small class="text-muted">{{ $lagu->durasi ?? '--:--' }}</small>
                    </div>
                    <div class="mt-md-0">
                        @if($lagu->yt_url)
                        <a href="{{ $lagu->yt_url }}" target="_blank" class="btn btn-danger btn-sm me-2">
                            <i class="fab fa-youtube"></i> YouTube
                        </a>
                        @endif
                        @if($lagu->spotify_url)
                        <a href="{{ $lagu->spotify_url }}" target="_blank" class="btn btn-success btn-sm">
                            <i class="fab fa-spotify"></i> Spotify
                        </a>
                        @endif
                    </div>
                </div>
                @empty
                <div class="p-4 text-center text-muted">
                    Belum ada lagu dalam album ini.
                </div>
                @endforelse
            </div>
        </div>

        <!-- Tombol Back -->
        <div class="text-center mt-5">
            <a href="{{ route('albums') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali ke Album
            </a>
        </div>
    </div>
</div>
@endsection
