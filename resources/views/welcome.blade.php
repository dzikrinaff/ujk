@extends('layouts.frontend')

@section('content')

<section class="hero spad set-bg" data-setbg="{{ asset('frontend/assets/img/about/perunggu1.jpg') }}">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="hero__text">
                <h1>Selamat Datang di Website Kami </h1>
                  {{-- <span>Single Baru Kami</span> --}}
                
                  {{-- <p>Lagu baru kami bermakna tentang perjalanan hidup dan kekuatan doa seorang ibu. </p>  --}}
                  {{-- <p>Lagu ini juga menggambarkan pengaruh besar seorang ibu dalam kehidupan. </p> --}}
                  {{-- <a href="https://www.youtube.com/watch?v=LUNkmVh6JEs" class="play-btn video-popup"><i class="fa fa-play"></i></a> --}}
              </div>
          </div>
      </div>
  </div>

</section>
<!-- Hero Section End -->



<!-- About Section Begin -->
<section class="about spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <div class="about__pic">
                  <img src="{{ asset('frontend/assets/img/webp.webp') }}" alt="">
              </div>
          </div>
          <div class="col-lg-6">
              <div class="about__text">
                  <div class="section-title">
                      <h2>Halo, kami Perunggu</h2>
                  </div>
                  <p>Kami bukan siapa-siapa yang tiba-tiba jadi apa-apa.
                    Kami cuma tiga orang teman yang awalnya ketemu di dunia kerja, sama-sama capek sama rutinitas, lalu nemuin pelarian paling jujur lewat musik.
                    Perunggu lahir di Jakarta, sekitar tahun 2019. Awalnya nggak ada rencana besar, nggak ada mimpi muluk. Kami cuma pengen main musik bareng, cerita banyak hal, dan kalau ada yang mau dengar — ya itu bonus buat kami.
                    Kami tumbuh dari lagu-lagu sederhana yang lahir dari keresahan, kehilangan, dan perjalanan hidup yang kadang nggak selalu terang. Tapi justru dari situ kami belajar, bahwa nggak semua hal harus gemerlap buat bisa terasa hangat.
                  </p>
              </div>
          </div>
      </div>
  </div>
<!-- About Section End -->

<!-- Services Section Begin -->
<section class="services py-5">
    <div class="container">
      <div class="row align-items-center">
  
        <!-- Text Kiri -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="services__content">
            {{-- <h2 class="mb-4">Nikmati Pengalaman Terbaik</h2> --}}
            <p class="mb-4">Kadang hidup nggak selalu sesuai rencana...
                Kadang juga kita harus pergi jauh dari rumah buat cari mimpi...                
                Tapi ada satu hal yang selalu ikut kemana pun kita melangkah doa dari seorang ibu.                   
                Lagu "Tapi" dari Kita ini relate banget sama cerita anak rantau, perjuangan, dan rasa kangen rumah.    
                Dengerin deh single terbaru kita... siapa tau lagunya relate kaya kehidupan kamu juga</p>

          </div>
        </div>
  
        <!-- Gambar Kanan -->
        <div class="col-lg-6">
          <div class="services__image position-relative">
            <img src="{{ asset('frontend/assets/img/services/tapi.jpeg') }}" class="img-fluid rounded" alt="">
  
            <a href="https://www.youtube.com/watch?v=LUNkmVh6JEs" class="play-btn video-popup">
              <i class="fa fa-play"></i>
            </a>
          </div>
        </div>
  
      </div>
    </div>
  </section>
  


@endsection
