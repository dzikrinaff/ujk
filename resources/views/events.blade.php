@extends('layouts.frontend')

@section('content')
    
    <!-- Countdown Section Begin -->
    {{-- <section class="countdown countdown--page spad set-bg" data-setbg="{{ asset('frontend/assets/img/countdown-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>Tomorrowland 2020</h1>
                        <h4>Music festival start in</h4>
                    </div>
                    <div class="countdown__timer" id="countdown-time">
                        <div class="countdown__item">
                            <span>20</span>
                            <p>days</p>
                        </div>
                        <div class="countdown__item">
                            <span>45</span>
                            <p>hours</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>minutes</p>
                        </div>
                        <div class="countdown__item">
                            <span>09</span>
                            <p>seconds</p>
                        </div>
                    </div>
                    <div class="buy__tickets">
                        <a href="#" class="primary-btn">Buy tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Countdown Section End -->

    <!-- Tours Section Begin -->
    <section class="event spad">
        <div class="container">
            <div class="section-title">
                <h2>Event Mendatang</h2>
            </div>
            <div class="event-container">
                @foreach($events as $event)
                <div class="event-item">
                    <div class="event-date">
                        <span class="day">{{ \Carbon\Carbon::parse($event->tanggal)->format('d') }}</span>
                        <span class="month">{{ \Carbon\Carbon::parse($event->tanggal)->format('M') }}</span>
                    </div>
                    <div class="event-details">
                        <h4>{{ $event->nama_event }}</h4>
                        <p><i class="fa fa-map-marker"></i> {{ $event->lokasi }}</p>
                        <p><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y') }}</p>
                        <p class="description">{{ $event->deskripsi }}</p>
                    </div>
                    @if($event->ticket_url)
                    <a href="{{ $event->ticket_url }}" class="btn btn-primary">Buy Tickets</a>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    
@endsection