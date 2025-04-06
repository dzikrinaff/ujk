@extends('layouts.frontend')

@section('content')
<!-- Breadcrumb Begin -->
 
    <!-- Breadcrumb End -->

    <!-- Video Section Begin -->
    <section class="videos spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>YOutube feed</h2>
                    </div>
                    <div class="videos__large__item set-bg" data-setbg="{{ asset('frontend/assets/img/videos/dan.jpg')}}">
                        <a href="https://www.youtube.com/watch?v=MUXGntTGqvU" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        <div class="videos__large__item__text">
                            <h4>Lintas Resonan jadi salah satu pengalaman berharga buat kami.
                                Berbagi panggung bareng Danilla dan ketemu langsung dengan kalian — jadi pengingat kenapa kami terus bermusik.
                                
                                Tonton keseruannya di YouTube Lintas Resonan!
                            </h4>
                            <ul>
                                <li>01:59:31</li>
                                <li>22 November 2024</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="videos__slider owl-carousel">
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ asset('frontend/assets/img/videos/v2.jpg')}}">
                                        <a href="https://www.youtube.com/watch?v=ZR7C9jOLBrY" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Kami berkunjung ke studio SEA Today untuk berbincang dengan Hans dan Krizia mengenai single terbaru mereka berjudul “Tapi”. </h5>
                                        <ul>
                                            <li>22:22</li>
                                            <li>5 Desember 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ asset('frontend/assets/img/videos/img1.jpeg')}}">
                                        <a href="https://www.youtube.com/watch?v=_HZj4nSHOqE" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Obrolan serius tapi santai bareng kami di Podcast Authenticity_ID Bahas musik,keresahan,sampai perjalanan kami di balik lagu-lagunya. Udah nonton belum?</h5>
                                        <ul>
                                            <li>02:04:39</li>
                                            <li>9 Agustus ,2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ asset('frontend/assets/img/videos/v3.jpeg')}}">
                                        <a href="https://www.youtube.com/watch?v=teL7H7VaStY" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>The Sounds Project Vol.6 (2023) jadi salah satu panggung yang nggak bakal kita lupa.                                         
                                            Udah tayang lengkap di YouTube, waktunya nostalgia bareng!</h5>
                                        <ul>
                                            <li>35:58</li>
                                            <li>4 November 2023</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ asset('frontend/assets/img/videos/v4.jpeg')}}">
                                        <a href="https://www.youtube.com/watch?v=hizLfSiX_wM" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Perunggu kalau dibikin intimate tuh rasanya beda banget sih......
                                            Cek aja langsung Perunggu Session | Live! at Folkative</h5>
                                        <ul>
                                            <li>19:23</li>
                                            <li> 3 November 2023</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ asset('frontend/assets/img/videos/v5.jpg')}}">
                                        <a href="https://www.youtube.com/watch?v=P1TVzn7sSps" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>OTW Manggung #BesokHariSeninTour2024 - Malang. Sudah tayang nihh,, Tonton fullnya di channel kami  
                                        </h5>
                                        <ul>
                                            <li>42:12</li>
                                            <li> 18 Agustus 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->
    @endsection
