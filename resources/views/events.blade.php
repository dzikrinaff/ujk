@extends('layouts.frontend')

@section('content')

    <!-- Tours Section Begin -->
    <section class="tours spad">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <div class="container">
            <div class="section-title">
                <h2>Event Mendatang</h2>
            </div>
            <div class="row">
                @foreach($events as $event)
                <div class="col-12"> <!-- Gunakan col-12 agar event tidak bersebelahan -->
                    <div class="row align-items-center"> <!-- Tambahkan align-items-center untuk sejajarkan vertikal -->
                        <!-- Jika iterasi ganjil, teks di kiri dan gambar di kanan -->
                        @if($loop->odd)
                        <div class="col-lg-6 order-lg-1">
                            <div class="tours__item__text">
                                <h2>{{ $event->nama_event }}</h2>
                                <div class="tours__text__widget">
                                    <ul>
                                        <li>
                                            <i class="fa fa-clock-o"></i>
                                            <span>{{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y') }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            {{ $event->lokasi }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="tours__text__desc">
                                    <p>{{ $event->deskripsi }}</p>
                                </div>
                                @if($event->ticket_url)
                                    <a href="{{ $event->ticket_url }}" class="primary-btn border-btn" target="_blank">Buy tickets</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-2">
                            <div class="tours__item__pic">
                                @if(isset($event->image) && $event->image)
                                    <img src="{{ asset('storage/events/' . $event->image) }}" alt="{{ $event->nama_event }}">
                                @else
                                    <img src="{{ asset('frontend/assets/img/tours/oke.jpg')}}" alt="Default Image">
                                @endif
                            </div>
                        </div>
                        @else
                        <!-- Jika iterasi genap, teks di kanan dan gambar di kiri -->
                        <div class="col-lg-6 order-lg-2">
                            <div class="tours__item__text tours__item__text--right">
                                <h2>{{ $event->nama_event }}</h2>
                                <div class="tours__text__widget">
                                    <ul>
                                        <li>
                                            <i class="fa fa-clock-o"></i>
                                            <span>{{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y') }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            {{ $event->lokasi }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="tours__text__desc">
                                    <p>{{ $event->deskripsi }}</p>
                                </div>
                                @if($event->ticket_url)
                                    <a href="{{ $event->ticket_url }}" class="primary-btn border-btn" target="_blank">Buy tickets</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="tours__item__pic tours__item__pic--left">
                                @if(isset($event->image) && $event->image)
                                    <img src="{{ asset('storage/events/' . $event->image) }}" alt="{{ $event->nama_event }}">
                                @else
                                    <img src="{{ asset('frontend/assets/img/tours/oke.jpg')}}" alt="Default Image">
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection