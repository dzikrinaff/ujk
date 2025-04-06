@extends('layouts.frontend')

@section('content')
    <div class="container">
        <section>
            <h2 class="section-title"><i class="fas fa-compact-disc"></i> Albums</h2>
            <div class="albums-grid">
                @foreach($albums as $album)
                    <div class="album-card">
                        <div class="album-cover">
                            <img src="{{ asset('frontend/assets/img/bg.jpeg') }}" alt="">
                            <div class="overlay">
                                <i class="fas fa-play play-icon"></i>
                            </div>
                        </div>
                        <div class="album-info">
                            <h3 class="album-judul">{{ $album->judul }}</h3>
                            <div class="album-tanggal-rilis">
                                <i class="far fa-calendar-alt"></i>
                                {{ $album->tanggal_rilis ? date('F j, Y', strtotime($album->tanggal_rilis)) : 'Release date not set' }}
                            </div>
                            <p class="album-deskripsi">{{ Str::limit($album->deskripsi, 100, '...') }}</p>
                            {{-- <a href="{{ route('album.detail', $album->id) }}" class="btn-detail">View Details</a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
