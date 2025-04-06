@extends('layouts.frontend')

@section('content')
<div class="lagu-container">
    <header class="lagu-header">
        <h1>Music Library</h1>
        <p class="subtitle">Songs from "{{ $album->judul }}"</p>
    </header>

    <section id="lagu-section">
        <h2 class="section-title"><i class="fas fa-music"></i> Songs</h2>
        <table class="lagu-table">
            <tbody>
                @forelse ($lagus as $lagu)
                    <tr>
                        <td class="lagu-judul">{{ $lagu->judul }}</td>
                        <td class="lagu-durasi">{{ $lagu->durasi ?? '-' }}</td>
                        <td>
                            <div class="lagu-links">
                                @if ($lagu->yt_url)
                                    <a href="{{ $lagu->yt_url }}" class="lagu-link yt-link" title="YouTube" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                @endif
                                @if ($lagu->spotify_url)
                                    <a href="{{ $lagu->spotify_url }}" class="lagu-link spotify-link" title="Spotify" target="_blank">
                                        <i class="fab fa-spotify"></i>
                                    </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" style="text-align: center; color: var(--gray);">
                            No songs available for this album
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
</div>
@endsection