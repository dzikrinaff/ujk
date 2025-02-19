@extends('layouts.frontend')

@section('content')
<main class="vs-page__main">
  <!-- Main Layouts -->
  <div class="vs-page__main--layouts">
    <!-- Hero Area -->
    <section class="vs-hero vs-hero--style2 z-index-common wow animate__fadeInUp" data-wow-delay="0.25s" aria-hidden="true">
      <div class="vs-carousel" data-fade="true">
        <div class="slick-slide" aria-hidden="true">
          <div class="vs-hero__item" data-bg-src="{{asset('frontend/assets/img/bg/h1-hero-2-1.png')}}">
            <img src="{{asset('frontend/assets/img/hero/hero-img-2-1.png')}}" alt="hero element" class="hero-ele1">
            <img src="{{asset('frontend/assets/img/hero/hero-img-2-2.png')}}" alt="hero element" class="hero-ele2">
            <img src="{{asset('frontend/assets/img/hero/hero-img-2-3.png')}}" alt="hero element" class="hero-ele3">
            <img src="{{asset('frontend/assets/img/hero/hero-img-2-4.png')}}" alt="hero element" class="hero-ele4">
            <div class="container">
              <div class="row align-items-center gy-4">
                <div class="col-lg-7">
                  <div class="vs-hero__content">
                    <div class="vs-hero__title--sub">
                      <div class="vs-hero__loading">
                        <div class="vs-hero__bar vs-hero__bar--small"></div>
                        <div class="vs-hero__bar"></div>
                        <div class="vs-hero__bar"></div>
                        <div class="vs-hero__bar"></div>
                        <div class="vs-hero__bar"></div>
                        <div class="vs-hero__bar"></div>
                        <div class="vs-hero__bar"></div>
                        <div class="vs-hero__bar"></div>
                      </div>
                      <span>final king</span>
                    </div>
                    <h1 class="vs-hero__title"><span class="vs-hero__title--highlight">nft games</span>
                      is king <img class="vs-hero__title--img" src="{{asset('frontend/assets/img/contoh.jpeg')}}" alt="roda">
                    </h1>
                    <h3 class="vs-hero__text">roda has the best pro <span>players</span></h3>
                    <div class="vs-hero__buttons" aria-hidden="true">
                      <a href="#" class="vs-btn vs-btn--style2" tabindex="-1">
                        view more
                        <span class="vs-btn__inner">
                                              <span class="vs-btn__blobs">
                                                  <span class="vs-btn__blob"></span>
                        <span class="vs-btn__blob"></span>
                        <span class="vs-btn__blob"></span>
                        <span class="vs-btn__blob"></span>
                        </span>
                        </span>
                        <svg class="vs-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                          <defs>
                            <filter>
                              <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                              <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                              </feColorMatrix>
                              <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                            </filter>
                          </defs>
                        </svg>
                      </a>
                      <a href="https://www.youtube.com/watch?v=zX-jSCDsJ8E" class="vs-hero__play play-btn popup-video" tabindex="-1">
                        <i class="fa-solid fa-play"></i>
                      </a>
                      <a class="vs-hero__link" href="about.html" tabindex="-1">
                        see history
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="vs-hero__image">
                    <img src="{{asset('frontend/assets/img/hero/hero-img-2-0.png')}}" alt="Hero Image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="breadcumb-shape">
        <span class="breadcumb-shape__one"></span>
        <span class="breadcumb-shape__two"></span>
        <span class="breadcumb-shape__three"></span>
      </div>
    </section>
    <!-- Hero Area End -->
    <!-- Twin Section -->
    <section class="twin-section space space-extra-bottom bg-color1 z-index-common overflow-hidden" data-bg-src="assets/img/bg/twin-section-bg-3.png">
      <img src="{{asset('frontend/assets/img/elements/twin-ele-1.png')}}" alt="twin-ele" class="twin-ele twin-ele--style1">
      <div class="sponsor">
        <div class="container text-center">
          <h2 class="sponsor__title wow animate__fadeInUp" data-wow-delay="0.25s">
            Leading Nft Game Investors <span>And Founders</span>
            <img src="{{asset('frontend/assets/img/svg/svg-section-icon.svg')}}" alt="svg section icon">
          </h2>
          <div class="vs-carousel" data-slide-show="4" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="1">
            <div class="sponsor__item wow animate__fadeInUp" data-wow-delay="0.35s">
              <img src="{{asset('frontend/assets/img/brand/brand-2-1.png')}}" alt="Brand">
            </div>
            <div class="sponsor__item wow animate__fadeInUp" data-wow-delay="0.45s">
              <img src="{{asset('frontend/assets/img/brand/brand-2-2.png')}}" alt="Brand">
            </div>
            <div class="sponsor__item wow animate__fadeInUp" data-wow-delay="0.55s">
              <img src="{{asset('frontend/assets/img/brand/brand-2-3.png')}}" alt="Brand">
            </div>
            <div class="sponsor__item wow animate__fadeInUp" data-wow-delay="0.65s">
              <img src="{{asset('frontend/assets/img/brand/brand-2-4.png')}}" alt="Brand">
            </div>
            <div class="sponsor__item wow animate__fadeInUp" data-wow-delay="0.75s">
              <img src="{{asset('frontend/assets/img/brand/brand-2-1.png')}}" alt="Brand">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <!-- Left Column: Image Tab-Content -->
          <div class="col-lg-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="tab-content vs-tab-content" id="nav-tabContent-left">
              <div class="tab-pane vs-tab-pane fade" id="nav-home-left" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="team-details__img-container" data-bg-src="{{asset('frontend/assets/img/svg/svg-square.svg')}}">
                  <img class="team-details__img" src="{{asset('frontend/assets/img/team/team-details-1.jpg')}}" alt="Team Details">
                </div>
              </div>
              <div class="tab-pane vs-tab-pane fade" id="nav-profile-left" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="team-details__img-container" data-bg-src="{{asset('frontend/assets/img/svg/svg-square.svg')}}">
                  <img class="team-details__img" src="{{asset('frontend/assets/img/team/team-details-2.jpg')}}" alt="Team Details">
                </div>
              </div>
              <div class="tab-pane vs-tab-pane fade show active" id="nav-contact-left" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                <div class="team-details__img-container" data-bg-src="{{asset('frontend/assets/img/svg/svg-square.svg')}}">
                  <img class="team-details__img" src="{{asset('frontend/assets/img/team/team-details-3.jpg')}}" alt="Team Details">
                </div>
              </div>
            </div>
          </div>
          <!-- Right Column: Text Tab-Content -->
          <div class="col-lg-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.45s">
            <div class="team-details__tab">
              <nav class="team-details__nav">
                <div class="team-details__nav-logo">
                  <img src="{{asset('frontend/assets/img/team/team-tab-logo.png')}}" alt="Roda Team Details">
                </div>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link vs-nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home-left, #nav-home-right" type="button" role="tab" aria-controls="nav-home-left" aria-selected="true">DEUTER</button>
                  <button class="nav-link vs-nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile-left, #nav-profile-right" type="button" role="tab" aria-controls="nav-profile-left" aria-selected="false">nft’s</button>
                  <button class="nav-link vs-nav-link active" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact-left, #nav-contact-right" type="button" role="tab" aria-controls="nav-contact-left" aria-selected="false">master</button>
                </div>
              </nav>
              <div class="tab-content vs-tab-content" id="nav-tabContent-right">
                <div class="tab-pane vs-tab-pane fade" id="nav-home-right" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                  <div class="team-details__nav-content">
                    <h2 class="title-style__big title-style__big--second">alexander graph <span>DEUTER
                                          strength</span></h2>
                    <p class="team-details__text">Extremely strong, fighting for dominance, predatory.
                      Tank is bank nan characterized by brutality. He destroys smaller opts. However,
                      he has one weakness.</p>
                    <div class="team-details__listing pt-15">
                      <h3 class="team-details__title-small">Trophies</h3>
                      <ul class="team-details__list">
                        <li class="team-details__list-item"><span>2019 - </span>dubai pubg
                          tournament 1st place</li>
                        <li class="team-details__list-item"><span>2020 - </span>Berlin Dota 2 game
                        </li>
                        <li class="team-details__list-item"><span>2024 - </span>Dota 2 Pro
                          Championship</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="tab-pane vs-tab-pane fade" id="nav-profile-right" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                  <div class="team-details__nav-content">
                    <h2 class="title-style__big title-style__big--second">
                      I'M roda WATCH my
                      STREAMS
                    </h2>
                    <p class="team-details__text">Extremely strong, fighting for dominance, predatory.
                      Tank is bank nan characterized by brutality. He destroys smaller opts. However,
                      he has one weakness.</p>
                    <div class="progress-box mb-50">
                      <div class="progress-box__header">
                        <h3 class="progress-box__title">success rate</h3>
                        <span class="progress-box__number">95%</span>
                      </div>
                      <div class="progress-box__progress">
                        <div class="progress-box__bar" role="progressbar" data-width="95" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="vs-btn vs-btn--style2" tabindex="-1">
                      join now
                      <span class="vs-btn__inner">
                                          <span class="vs-btn__blobs">
                                              <span class="vs-btn__blob"></span>
                      <span class="vs-btn__blob"></span>
                      <span class="vs-btn__blob"></span>
                      <span class="vs-btn__blob"></span>
                      </span>
                      </span>
                      <svg class="vs-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                          <filter>
                            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                            </feGaussianBlur>
                            <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                            </feColorMatrix>
                            <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                          </filter>
                        </defs>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="tab-pane vs-tab-pane fade show active" id="nav-contact-right" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                  <div class="team-details__nav-content">
                    <h2 class="title-style__big title-style__big--second">alexander graph <span>master
                                          strength</span></h2>
                    <p class="team-details__text">Extremely strong, fighting for dominance, predatory.
                      Tank is bank nan characterized by brutality. He destroys smaller opts. However,
                      he has one weakness.</p>
                    <div class="team-details__listing pt-15">
                      <h3 class="team-details__title-small">Trophies</h3>
                      <ul class="team-details__list">
                        <li class="team-details__list-item"><span>2019 - </span>dubai pubg
                          tournament 1st place</li>
                        <li class="team-details__list-item"><span>2020 - </span>Berlin Dota 2 game
                        </li>
                        <li class="team-details__list-item"><span>2024 - </span>Dota 2 Pro
                          Championship</li>
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
    <!-- Twin Section End -->
    <!-- Twin Section -->
      <section class="twin-section--style2 space overflow-hidden" data-bg-src="{{asset('frontend/assets/img/bg/twin-section-bg-2.png')}}">
      <div class="about">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 mb-30 wow animate__fadeInUp" data-wow-delay="0.25s">
              <div class="title-style title-style--style2 title-anime animation-style2">
                <span class="title-style__small title-anime__title">
                              play to earn
                              <svg width="79" height="6" viewBox="0 0 79 6" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4 0L0 3.2L4 6H38L39.5 3.4L41.5 6H75L78.5 3.2L75 0H41.5L39.5 2.2L38 0H4Z"
                                      fill="#A6D719"></path>
                              </svg>
                          </span>
                <h2 class="title-style__big title-anime__title">
                  <img src="{{asset('frontend/assets/img/svg/svg-section-icon.svg')}}" alt="svg section icon">
                  Best <span>Blockchain</span>
                  Game List
                </h2>
                <p class="about__text">
                  <img src="{{asset('frontend/assets/img/svg/svg-flag-icon.svg')}}" alt="svg-flag-icon" class="about__text--icon">
                  Top Play To Earn Tokens <span>by Market</span>
                </p>
                <a href="#" class="vs-btn vs-btn--style2" tabindex="-1">
                  play now
                  <span class="vs-btn__inner">
                                  <span class="vs-btn__blobs">
                                      <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  </span>
                  </span>
                  <svg class="vs-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                      <filter>
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                        </feGaussianBlur>
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                        </feColorMatrix>
                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                      </filter>
                    </defs>
                  </svg>
                </a>
              </div>
            </div>
            <div class="col-lg-7 mb-30 wow animate__fadeInUp" data-wow-delay="0.45s">
              <div class="about__img">
                <img src="{{asset('frontend/assets/img/about/about-right.png')}}" alt="about right">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="feature space-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 wow animate__fadeInUp" data-wow-delay="0.25s">
              <div class="creator-item creator-item--style2">
                <div class="creator-item__bg" data-bg-src="{{asset('frontend/assets/img/svg/svg-feature-item-bg.svg')}}"></div>
                <div class="creator-item__icon">
                  <svg class="creator-item__icon--img" width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.5001 1.95831C18.337 1.9359 13.3758 3.96211 9.70461 7.59256C6.03341 11.223 3.95195 16.1613 3.91673 21.3243C3.91557 24.0723 4.50513 26.7886 5.64548 29.2889C6.78582 31.7892 8.45029 34.0151 10.5261 35.8159V38.728C10.5344 40.4087 11.2092 42.0175 12.4025 43.2013C13.5957 44.385 15.2099 45.0469 16.8907 45.0416H30.1094C31.7899 45.0469 33.4038 44.3852 34.597 43.2019C35.7902 42.0187 36.4652 40.4104 36.474 38.7299V35.8179C38.5501 34.0169 40.2147 31.7906 41.3551 29.2899C42.4954 26.7893 43.0848 24.0727 43.0834 21.3243C43.0482 16.1613 40.9667 11.223 37.2955 7.59256C33.6243 3.96211 28.6631 1.9359 23.5001 1.95831ZM33.2917 33.3641C33.0603 33.5475 32.8733 33.7809 32.7447 34.0467C32.6162 34.3126 32.5495 34.6041 32.5495 34.8994V38.7299C32.5413 39.3704 32.2801 39.9816 31.823 40.4303C31.3659 40.8789 30.7499 41.1287 30.1094 41.125H29.3751V35.25C29.3751 34.7306 29.1687 34.2325 28.8015 33.8652C28.4342 33.498 27.9361 33.2916 27.4167 33.2916C26.8974 33.2916 26.3992 33.498 26.032 33.8652C25.6647 34.2325 25.4584 34.7306 25.4584 35.25V41.125H21.5417V35.25C21.5417 34.7306 21.3354 34.2325 20.9682 33.8652C20.6009 33.498 20.1028 33.2916 19.5834 33.2916C19.064 33.2916 18.5659 33.498 18.1987 33.8652C17.8314 34.2325 17.6251 34.7306 17.6251 35.25V41.125H16.8907C16.2488 41.1307 15.6309 40.8819 15.1721 40.433C14.7133 39.9841 14.451 39.3718 14.4428 38.7299V34.8994C14.4438 34.6048 14.3782 34.3137 14.2511 34.0478C14.1239 33.782 13.9384 33.5483 13.7084 33.3641C11.8801 31.9343 10.401 30.1073 9.38315 28.0214C8.36529 25.9354 7.83534 23.6453 7.8334 21.3243C7.8334 17.1692 9.48399 13.1843 12.4221 10.2463C15.3601 7.3082 19.345 5.65761 23.5001 5.65761C27.6551 5.65761 31.64 7.3082 34.5781 10.2463C37.5161 13.1843 39.1667 17.1692 39.1667 21.3243C39.1648 23.6453 38.6348 25.9354 37.617 28.0214C36.5991 30.1073 35.1201 31.9343 33.2917 33.3641Z" fill="#A6D719" />
                    <path d="M17.6251 29.375C19.7882 29.375 21.5417 27.6215 21.5417 25.4584C21.5417 23.2952 19.7882 21.5417 17.6251 21.5417C15.4619 21.5417 13.7084 23.2952 13.7084 25.4584C13.7084 27.6215 15.4619 29.375 17.6251 29.375Z" fill="#A6D719" />
                    <path d="M29.3751 29.375C31.5382 29.375 33.2917 27.6215 33.2917 25.4584C33.2917 23.2952 31.5382 21.5417 29.3751 21.5417C27.212 21.5417 25.4584 23.2952 25.4584 25.4584C25.4584 27.6215 27.212 29.375 29.3751 29.375Z" fill="#A6D719" />
                  </svg>
                </div>
                <div class="creator-item__content">
                  <h3 class="creator-item__title">
                    <a class="creator-item__title--link" href="single-match.html">registrasi</a>
                  </h3>
                  <p class="creator-item__text">Leverage Challenger mode's deep game integration close</p>
                </div>
                <span class="creator-item__number">01</span>
              </div>
            </div>
            <div class="col-lg-4 wow animate__fadeInUp" data-wow-delay="0.45s">
              <div class="creator-item creator-item--style2">
                <div class="creator-item__bg" data-bg-src="{{asset('frontend/assets/img/svg/svg-feature-item-bg.svg')}}"></div>
                <div class="creator-item__icon">
                  <svg width="48" height="34" viewBox="0 0 48 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M45.5626 12.9938C44.3813 5.56875 37.9688 0 30.5438 0H16.8751C9.28131 0 2.86881 5.56875 1.68756 12.9938C0.506311 20.925 6.10352e-05 24.4688 6.10352e-05 25.8188C6.10352e-05 34.0875 11.3063 36.7875 15.0188 29.3625L17.8876 23.625H29.3626L32.2313 29.3625C35.9438 36.7875 47.2501 34.0875 47.2501 25.8188C47.2501 24.6375 47.2501 26.1563 45.5626 12.9938ZM43.8751 25.8188C43.8751 30.5438 37.2938 32.2313 35.2688 27.8438L31.8938 21.0938C31.5563 20.5875 31.0501 20.25 30.3751 20.25H16.8751C16.2001 20.25 15.6938 20.5875 15.3563 21.2625L11.9813 28.0125C9.95631 32.2313 3.37506 30.5438 3.37506 25.8188L5.06256 13.5C5.90631 7.7625 10.9688 3.375 16.7063 3.375H30.3751C36.2813 3.375 41.1751 7.7625 42.0188 13.5C42.1876 13.6688 44.0438 26.6625 43.8751 25.8188Z" fill="#A6D719" />
                    <path d="M20.2501 11.8125C20.2501 12.825 19.5751 13.5 18.5626 13.5H16.8751V15.1875C16.8751 16.2 16.2001 16.875 15.1876 16.875C14.1751 16.875 13.5001 16.2 13.5001 15.1875V13.5H11.8126C10.8001 13.5 10.1251 12.825 10.1251 11.8125C10.1251 10.8 10.8001 10.125 11.8126 10.125H13.5001V8.4375C13.5001 7.425 14.1751 6.75 15.1876 6.75C16.2001 6.75 16.8751 7.425 16.8751 8.4375V10.125H18.5626C19.5751 10.125 20.2501 10.8 20.2501 11.8125Z" fill="#A6D719" />
                    <path d="M30.3751 11.8125C30.3751 12.825 29.7001 13.5 28.6876 13.5C27.6751 13.5 27.0001 12.825 27.0001 11.8125C27.0001 10.8 27.6751 10.125 28.6876 10.125C29.7001 10.125 30.3751 10.8 30.3751 11.8125Z" fill="#A6D719" />
                    <path d="M33.7501 15.1875C33.7501 16.2 33.0751 16.875 32.0626 16.875C31.0501 16.875 30.3751 16.2 30.3751 15.1875C30.3751 14.175 31.0501 13.5 32.0626 13.5C33.0751 13.5 33.7501 14.175 33.7501 15.1875Z" fill="#A6D719" />
                    <path d="M37.1251 11.8125C37.1251 12.825 36.4501 13.5 35.4376 13.5C34.4251 13.5 33.7501 12.825 33.7501 11.8125C33.7501 10.8 34.4251 10.125 35.4376 10.125C36.4501 10.125 37.1251 10.8 37.1251 11.8125Z" fill="#A6D719" />
                    <path d="M30.3751 8.4375C30.3751 7.425 31.0501 6.75 32.0626 6.75C33.0751 6.75 33.7501 7.425 33.7501 8.4375C33.7501 9.45 33.0751 10.125 32.0626 10.125C31.0501 10.125 30.3751 9.45 30.3751 8.4375Z" fill="#A6D719" />
                  </svg>
                </div>
                <div class="creator-item__content">
                  <h3 class="creator-item__title">
                    <a class="creator-item__title--link" href="single-match.html">Publisheree</a>
                  </h3>
                  <p class="creator-item__text">Leverage Challenger mode's deep game integration close</p>
                </div>
                <span class="creator-item__number">02</span>
              </div>
            </div>
            <div class="col-lg-4 wow animate__fadeInUp" data-wow-delay="0.65s">
              <div class="creator-item creator-item--style2">
                <div class="creator-item__bg" data-bg-src="{{asset('frontend/assets/img/svg/svg-feature-item-bg.svg')}}"></div>
                <div class="creator-item__icon">
                  <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M39.6563 16.1061H34.9603C33.8358 16.1061 32.7658 16.5292 31.9475 17.2966L28.7569 20.2843C27.8712 21.1147 27.3634 22.2866 27.3634 23.5C27.3634 24.7135 27.8712 25.8853 28.7576 26.7158L31.9475 29.7035C32.7658 30.4709 33.8358 30.894 34.9603 30.894H39.6563C42.086 30.894 44.0625 28.9175 44.0625 26.4877V20.5123C44.0625 18.0826 42.086 16.1061 39.6563 16.1061ZM41.125 26.4877C41.125 27.2981 40.466 27.9565 39.6563 27.9565H34.9603C34.5852 27.9565 34.2288 27.8159 33.9563 27.5606L30.7663 24.5729C30.4659 24.2918 30.3009 23.9102 30.3009 23.5C30.3009 23.0898 30.4659 22.7083 30.7656 22.4272L33.9563 19.4395C34.2281 19.1841 34.5852 19.0436 34.9603 19.0436H39.6563C40.466 19.0436 41.125 19.7019 41.125 20.5123V26.4877Z" fill="#A6D719" />
                    <path d="M7.34375 30.894H12.0397C13.1635 30.894 14.2335 30.4709 15.0525 29.7035L18.2432 26.7158C19.1289 25.8853 19.6366 24.7135 19.6366 23.5C19.6366 22.2866 19.1289 21.1147 18.2425 20.2843L15.0525 17.2966C14.2335 16.5292 13.1635 16.1061 12.0397 16.1061H7.34375C4.914 16.1061 2.9375 18.0826 2.9375 20.5123V26.4877C2.9375 28.9175 4.914 30.894 7.34375 30.894ZM5.875 20.5123C5.875 19.7019 6.53407 19.0436 7.34375 19.0436H12.0397C12.4148 19.0436 12.7712 19.1841 13.0445 19.4395L16.2337 22.4272C16.5342 22.7083 16.6991 23.0898 16.6991 23.5C16.6991 23.9102 16.5342 24.2918 16.2344 24.5729L13.0445 27.5606C12.7712 27.8159 12.4148 27.9565 12.0397 27.9565H7.34375C6.53407 27.9565 5.875 27.2981 5.875 26.4877V20.5123Z" fill="#A6D719" />
                    <path d="M26.2503 27.7901C24.631 26.4963 22.369 26.4963 20.7497 27.7901L17.7606 30.1782C16.7085 31.0202 16.1053 32.2738 16.1053 33.6206V39.6563C16.1053 42.086 18.0818 44.0625 20.5116 44.0625H26.4884C28.9182 44.0625 30.8947 42.086 30.8947 39.6563V33.6206C30.8947 32.2738 30.2915 31.0202 29.2395 30.1782L26.2503 27.7901ZM27.9572 39.6563C27.9572 40.4667 27.2981 41.125 26.4884 41.125H20.5116C19.7019 41.125 19.0428 40.4667 19.0428 39.6563V33.6206C19.0428 33.1717 19.2444 32.7529 19.5951 32.4732L22.5835 30.085C23.1228 29.6547 23.8772 29.6547 24.4165 30.085L27.405 32.4732C27.7557 32.7529 27.9572 33.1717 27.9572 33.6206V39.6563Z" fill="#A6D719" />
                    <path d="M30.8947 13.3794V7.34375C30.8947 4.914 28.9182 2.9375 26.4884 2.9375H20.5116C18.0818 2.9375 16.1053 4.914 16.1053 7.34375V13.3794C16.1053 14.7262 16.7085 15.9798 17.7606 16.8218L20.7497 19.2099C21.5594 19.8568 22.5297 20.1795 23.5 20.1795C24.4703 20.1795 25.4407 19.8568 26.2511 19.2099L29.2395 16.8218C30.2915 15.9798 30.8947 14.7262 30.8947 13.3794ZM27.9572 13.3794C27.9572 13.8283 27.7557 14.2472 27.405 14.5269L24.4173 16.915C23.8765 17.3453 23.1228 17.3453 22.5835 16.915L19.5951 14.5269C19.2444 14.2472 19.0428 13.8283 19.0428 13.3794V7.34375C19.0428 6.53336 19.7019 5.875 20.5116 5.875H26.4884C27.2981 5.875 27.9572 6.53336 27.9572 7.34375V13.3794Z" fill="#A6D719" />
                  </svg>
                </div>
                <div class="creator-item__content">
                  <h3 class="creator-item__title">
                    <a class="creator-item__title--link" href="single-match.html">big community</a>
                  </h3>
                  <p class="creator-item__text">Leverage Challenger mode's deep game integration close</p>
                </div>
                <span class="creator-item__number">03</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="image-gallery">
        <div class="image-gallery__col image-gallery__one wow animate__fadeInUp" data-wow-delay="0.25s">
          <img src="{{asset('frontend/assets/img/gallery/gallery-img-1.jpg')}}" alt="image gallery">
          <a href="{{asset('frontend/assets/img/gallery/gallery-img-1.jpg')}}" class="image-gallery__col--popup popup-image">
            <i class="fa-solid fa-plus"></i>
          </a>
        </div>
        <div class="image-gallery__col image-gallery__two wow animate__fadeInUp" data-wow-delay="0.45s">
          <img src="{{asset('frontend/assets/img/gallery/gallery-img-2.jpg')}}" alt="image gallery">
          <a href="{{asset('frontend/assets/img/gallery/gallery-img-2.jpg')}}" class="image-gallery__col--popup popup-image">
            <i class="fa-solid fa-plus"></i>
          </a>
        </div>
        <div class="image-gallery__col image-gallery__three wow animate__fadeInUp" data-wow-delay="0.65s">
          <img src="{{asset('frontend/assets/img/gallery/gallery-img-3.jpg')}}" alt="image gallery">
          <a href="{{asset('frontend/assets/img/gallery/gallery-img-3.jpg')}}" class="image-gallery__col--popup popup-image">
            <i class="fa-solid fa-plus"></i>
          </a>
        </div>
        <div class="image-gallery__col image-gallery__four wow animate__fadeInUp" data-wow-delay="0.85s">
          <img src="{{asset('frontend/assets/img/gallery/gallery-img-4.jpg')}}" alt="image gallery">
          <a href="{{asset('frontend/assets/img/gallery/gallery-img-4.jpg')}}" class="image-gallery__col--popup popup-image">
            <i class="fa-solid fa-plus"></i>
          </a>
        </div>
      </div>
    </section>
    <!-- Twin Section End -->
    <!-- Game Open Registration -->
    <section class="game space space-extra-bottom z-index-common">
      <div class="game__bg--image" data-bg-src="{{asset('frontend/assets/img/bg/game-bg-1-1.png')}}"></div>
      <div class="game__bg--color"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-auto wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="title-style text-center title-anime animation-style5">
              <span class="title-style__small justify-content-center title-anime__title">
                          Free tournaments
                      </span>
              <h2 class="title-style__big title-anime__title">Play To Earn gaming</h2>
              <svg width="79" height="6" viewBox="0 0 79 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 0L0 3.2L4 6H38L39.5 3.4L41.5 6H75L78.5 3.2L75 0H41.5L39.5 2.2L38 0H4Z" fill="#A6D719" />
              </svg>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="game-card game-card--style2">
              <div class="game-card__content">
                <div class="game-card__image">
                  <img src="{{asset('frontend/assets/img/game/game-icon-2-1.png')}}" alt="Game Thumbnail" class="game-card__thumbnail">
                </div>
                <div class="game-card__details">
                  <h2 class="game-card__title">
                    <a class="game-card__title--link" href="single-match.html">
                      PUBG Mobile
                    </a>
                    <a class="game-card__compare" href="#">
                      <svg width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.22234 6.32538H7.89629C9.08195 6.32538 10.1454 6.78295 10.9032 7.50837C11.3433 6.03521 12.1745 4.68481 13.3479 3.5353C11.8444 2.48623 9.94981 1.8501 7.90851 1.8501H1.22234C0.550051 1.8501 0 2.35231 0 2.96613V5.19819C0 5.83432 0.550051 6.32538 1.22234 6.32538Z" fill="#F7F5E8" />
                        <path d="M32.6973 15.5216L26.0844 12.0396C25.681 11.8275 25.1677 12.0954 25.1677 12.5194V13.7694H20.9751C19.7894 13.7694 18.726 13.3118 17.9681 12.5864C17.5281 14.0596 16.6969 15.41 15.5234 16.5595C17.0269 17.6085 18.9215 18.2447 20.9628 18.2447H25.1677V19.4946C25.1677 19.9187 25.681 20.1977 26.0844 19.9745L32.6973 16.4925C33.1006 16.2805 33.1006 15.7448 32.6973 15.5216Z" fill="#F7F5E8" />
                        <path d="M32.6975 4.5843L26.0846 8.06631C25.9869 8.12211 25.8768 8.14443 25.7791 8.14443C25.4612 8.14443 25.1679 7.91007 25.1679 7.58642V6.33647H20.9753C18.7262 6.33647 16.8805 7.98819 16.8805 10.0305C16.8927 14.5616 12.8712 18.2445 7.90851 18.2445H1.22234C0.550051 18.2445 0 17.7423 0 17.1285V14.8964C0 14.2826 0.550051 13.7804 1.22234 13.7804H7.89629C10.1332 13.7804 11.9911 12.1287 11.9911 10.0863C11.9789 5.55525 16.0004 1.87235 20.9631 1.87235H25.1679V0.611237C25.1679 0.287589 25.4612 0.0532227 25.7791 0.0532227C25.8768 0.0532227 25.9869 0.0755429 26.0846 0.131344L32.6975 3.61336C33.1008 3.8254 33.1008 4.3611 32.6975 4.5843Z" fill="#F7F5E8" />
                      </svg>
                    </a>
                  </h2>
                  <p class="game-card__time">Aug 19, 2024 - 3:30</p>
                  <div class="game-card__info">
                    <p class="game-card__players">Player
                      <span class="slot-container">
                                          <span class="game-card__players-count slot">
                                              <span class="slot-text" data-slot-text="05">05</span>
                      </span>
                      </span>
                    </p>
                    <p class="game-card__region">Regions
                      <span class="slot-container">
                                          <span class="game-card__region-name slot">
                                              <span class="slot-text" data-slot-text="UAE">UAE</span>
                      </span>
                      </span>
                    </p>
                    <p class="game-card__skill-level">Skill Level
                      <span class="slot-container">
                                          <span class="game-card__players-count slot">
                                              <span class="game-card__kd vs-primary slot-text"
                                                  data-slot-text="KD 3.5">
                                                  KD 3.5
                                              </span>
                      </span>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="game-card__footer">
                <a href="single-match.html" class="game-card__link">
                  view details
                  <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.25 5.66001C14.812 5.66001 12.59 3.439 12.59 1V0H10.59V1C10.59 2.774 11.368 4.438 12.589 5.66001H0.25V7.66001H12.589C11.368 8.88201 10.59 10.546 10.59 12.32V13.32H12.59V12.32C12.59 9.88101 14.812 7.66001 17.25 7.66001H18.25V5.66001H17.25Z" fill="#A6D719" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow animate__fadeInUp" data-wow-delay="0.45s">
            <div class="game-card game-card--style2">
              <div class="game-card__content">
                <div class="game-card__image">
                  <img src="{{asset('frontend/assets/img/game/game-icon-2-2.png')}}" alt="Game Thumbnail" class="game-card__thumbnail">
                </div>
                <div class="game-card__details">
                  <h2 class="game-card__title">
                    <a class="game-card__title--link" href="single-match.html">
                      call of duty
                    </a>
                    <a class="game-card__compare" href="#">
                      <svg width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.22234 6.32538H7.89629C9.08195 6.32538 10.1454 6.78295 10.9032 7.50837C11.3433 6.03521 12.1745 4.68481 13.3479 3.5353C11.8444 2.48623 9.94981 1.8501 7.90851 1.8501H1.22234C0.550051 1.8501 0 2.35231 0 2.96613V5.19819C0 5.83432 0.550051 6.32538 1.22234 6.32538Z" fill="#F7F5E8" />
                        <path d="M32.6973 15.5216L26.0844 12.0396C25.681 11.8275 25.1677 12.0954 25.1677 12.5194V13.7694H20.9751C19.7894 13.7694 18.726 13.3118 17.9681 12.5864C17.5281 14.0596 16.6969 15.41 15.5234 16.5595C17.0269 17.6085 18.9215 18.2447 20.9628 18.2447H25.1677V19.4946C25.1677 19.9187 25.681 20.1977 26.0844 19.9745L32.6973 16.4925C33.1006 16.2805 33.1006 15.7448 32.6973 15.5216Z" fill="#F7F5E8" />
                        <path d="M32.6975 4.5843L26.0846 8.06631C25.9869 8.12211 25.8768 8.14443 25.7791 8.14443C25.4612 8.14443 25.1679 7.91007 25.1679 7.58642V6.33647H20.9753C18.7262 6.33647 16.8805 7.98819 16.8805 10.0305C16.8927 14.5616 12.8712 18.2445 7.90851 18.2445H1.22234C0.550051 18.2445 0 17.7423 0 17.1285V14.8964C0 14.2826 0.550051 13.7804 1.22234 13.7804H7.89629C10.1332 13.7804 11.9911 12.1287 11.9911 10.0863C11.9789 5.55525 16.0004 1.87235 20.9631 1.87235H25.1679V0.611237C25.1679 0.287589 25.4612 0.0532227 25.7791 0.0532227C25.8768 0.0532227 25.9869 0.0755429 26.0846 0.131344L32.6975 3.61336C33.1008 3.8254 33.1008 4.3611 32.6975 4.5843Z" fill="#F7F5E8" />
                      </svg>
                    </a>
                  </h2>
                  <p class="game-card__time">Aug 19, 2024 - 3:30</p>
                  <div class="game-card__info">
                    <p class="game-card__players">Player
                      <span class="slot-container">
                                          <span class="game-card__players-count slot">
                                              <span class="slot-text" data-slot-text="05">05</span>
                      </span>
                      </span>
                    </p>
                    <p class="game-card__region">Regions
                      <span class="slot-container">
                                          <span class="game-card__region-name slot">
                                              <span class="slot-text" data-slot-text="UAE">UAE</span>
                      </span>
                      </span>
                    </p>
                    <p class="game-card__skill-level">Skill Level
                      <span class="slot-container">
                                          <span class="game-card__players-count slot">
                                              <span class="game-card__kd vs-primary slot-text"
                                                  data-slot-text="KD 3.5">
                                                  KD 3.5
                                              </span>
                      </span>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="game-card__footer">
                <a href="single-match.html" class="game-card__link">
                  view details
                  <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.25 5.66001C14.812 5.66001 12.59 3.439 12.59 1V0H10.59V1C10.59 2.774 11.368 4.438 12.589 5.66001H0.25V7.66001H12.589C11.368 8.88201 10.59 10.546 10.59 12.32V13.32H12.59V12.32C12.59 9.88101 14.812 7.66001 17.25 7.66001H18.25V5.66001H17.25Z" fill="#A6D719" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow animate__fadeInUp" data-wow-delay="0.65s">
            <div class="game-card game-card--style2">
              <div class="game-card__content">
                <div class="game-card__image">
                  <img src="{{asset('frontend/assets/img/game/game-icon-2-3.png')}}" alt="Game Thumbnail" class="game-card__thumbnail">
                </div>
                <div class="game-card__details">
                  <h2 class="game-card__title">
                    <a class="game-card__title--link" href="single-match.html">
                      mafia game
                    </a>
                    <a class="game-card__compare" href="#">
                      <svg width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.22234 6.32538H7.89629C9.08195 6.32538 10.1454 6.78295 10.9032 7.50837C11.3433 6.03521 12.1745 4.68481 13.3479 3.5353C11.8444 2.48623 9.94981 1.8501 7.90851 1.8501H1.22234C0.550051 1.8501 0 2.35231 0 2.96613V5.19819C0 5.83432 0.550051 6.32538 1.22234 6.32538Z" fill="#F7F5E8" />
                        <path d="M32.6973 15.5216L26.0844 12.0396C25.681 11.8275 25.1677 12.0954 25.1677 12.5194V13.7694H20.9751C19.7894 13.7694 18.726 13.3118 17.9681 12.5864C17.5281 14.0596 16.6969 15.41 15.5234 16.5595C17.0269 17.6085 18.9215 18.2447 20.9628 18.2447H25.1677V19.4946C25.1677 19.9187 25.681 20.1977 26.0844 19.9745L32.6973 16.4925C33.1006 16.2805 33.1006 15.7448 32.6973 15.5216Z" fill="#F7F5E8" />
                        <path d="M32.6975 4.5843L26.0846 8.06631C25.9869 8.12211 25.8768 8.14443 25.7791 8.14443C25.4612 8.14443 25.1679 7.91007 25.1679 7.58642V6.33647H20.9753C18.7262 6.33647 16.8805 7.98819 16.8805 10.0305C16.8927 14.5616 12.8712 18.2445 7.90851 18.2445H1.22234C0.550051 18.2445 0 17.7423 0 17.1285V14.8964C0 14.2826 0.550051 13.7804 1.22234 13.7804H7.89629C10.1332 13.7804 11.9911 12.1287 11.9911 10.0863C11.9789 5.55525 16.0004 1.87235 20.9631 1.87235H25.1679V0.611237C25.1679 0.287589 25.4612 0.0532227 25.7791 0.0532227C25.8768 0.0532227 25.9869 0.0755429 26.0846 0.131344L32.6975 3.61336C33.1008 3.8254 33.1008 4.3611 32.6975 4.5843Z" fill="#F7F5E8" />
                      </svg>
                    </a>
                  </h2>
                  <p class="game-card__time">Aug 19, 2024 - 3:30</p>
                  <div class="game-card__info">
                    <p class="game-card__players">Player
                      <span class="slot-container">
                                          <span class="game-card__players-count slot">
                                              <span class="slot-text" data-slot-text="05">05</span>
                      </span>
                      </span>
                    </p>
                    <p class="game-card__region">Regions
                      <span class="slot-container">
                                          <span class="game-card__region-name slot">
                                              <span class="slot-text" data-slot-text="UAE">UAE</span>
                      </span>
                      </span>
                    </p>
                    <p class="game-card__skill-level">Skill Level
                      <span class="slot-container">
                                          <span class="game-card__players-count slot">
                                              <span class="game-card__kd vs-primary slot-text"
                                                  data-slot-text="KD 3.5">
                                                  KD 3.5
                                              </span>
                      </span>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="game-card__footer">
                <a href="single-match.html" class="game-card__link">
                  view details
                  <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.25 5.66001C14.812 5.66001 12.59 3.439 12.59 1V0H10.59V1C10.59 2.774 11.368 4.438 12.589 5.66001H0.25V7.66001H12.589C11.368 8.88201 10.59 10.546 10.59 12.32V13.32H12.59V12.32C12.59 9.88101 14.812 7.66001 17.25 7.66001H18.25V5.66001H17.25Z" fill="#A6D719" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow animate__fadeInUp" data-wow-delay="0.85s">
            <div class="game-card game-card--style2">
              <div class="game-card__content">
                <div class="game-card__image">
                  <img src="{{asset('frontend/assets/img/game/game-icon-2-4.png')}}" alt="Game Thumbnail" class="game-card__thumbnail">
                </div>
                <div class="game-card__details">
                  <h2 class="game-card__title">
                    <a class="game-card__title--link" href="single-match.html">
                      diaper mobile
                    </a>
                    <a class="game-card__compare" href="#">
                      <svg width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.22234 6.32538H7.89629C9.08195 6.32538 10.1454 6.78295 10.9032 7.50837C11.3433 6.03521 12.1745 4.68481 13.3479 3.5353C11.8444 2.48623 9.94981 1.8501 7.90851 1.8501H1.22234C0.550051 1.8501 0 2.35231 0 2.96613V5.19819C0 5.83432 0.550051 6.32538 1.22234 6.32538Z" fill="#F7F5E8" />
                        <path d="M32.6973 15.5216L26.0844 12.0396C25.681 11.8275 25.1677 12.0954 25.1677 12.5194V13.7694H20.9751C19.7894 13.7694 18.726 13.3118 17.9681 12.5864C17.5281 14.0596 16.6969 15.41 15.5234 16.5595C17.0269 17.6085 18.9215 18.2447 20.9628 18.2447H25.1677V19.4946C25.1677 19.9187 25.681 20.1977 26.0844 19.9745L32.6973 16.4925C33.1006 16.2805 33.1006 15.7448 32.6973 15.5216Z" fill="#F7F5E8" />
                        <path d="M32.6975 4.5843L26.0846 8.06631C25.9869 8.12211 25.8768 8.14443 25.7791 8.14443C25.4612 8.14443 25.1679 7.91007 25.1679 7.58642V6.33647H20.9753C18.7262 6.33647 16.8805 7.98819 16.8805 10.0305C16.8927 14.5616 12.8712 18.2445 7.90851 18.2445H1.22234C0.550051 18.2445 0 17.7423 0 17.1285V14.8964C0 14.2826 0.550051 13.7804 1.22234 13.7804H7.89629C10.1332 13.7804 11.9911 12.1287 11.9911 10.0863C11.9789 5.55525 16.0004 1.87235 20.9631 1.87235H25.1679V0.611237C25.1679 0.287589 25.4612 0.0532227 25.7791 0.0532227C25.8768 0.0532227 25.9869 0.0755429 26.0846 0.131344L32.6975 3.61336C33.1008 3.8254 33.1008 4.3611 32.6975 4.5843Z" fill="#F7F5E8" />
                      </svg>
                    </a>
                  </h2>
                  <p class="game-card__time">Aug 19, 2024 - 3:30</p>
                  <div class="game-card__info">
                    <p class="game-card__players">Player
                      <span class="slot-container">
                                          <span class="game-card__players-count slot">
                                              <span class="slot-text" data-slot-text="05">05</span>
                      </span>
                      </span>
                    </p>
                    <p class="game-card__region">Regions
                      <span class="slot-container">
                                          <span class="game-card__region-name slot">
                                              <span class="slot-text" data-slot-text="UAE">UAE</span>
                      </span>
                      </span>
                    </p>
                    <p class="game-card__skill-level">Skill Level
                      <span class="slot-container">
                                          <span class="game-card__players-count slot">
                                              <span class="game-card__kd vs-primary slot-text"
                                                  data-slot-text="KD 3.5">
                                                  KD 3.5
                                              </span>
                      </span>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="game-card__footer">
                <a href="single-match.html" class="game-card__link">
                  view details
                  <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.25 5.66001C14.812 5.66001 12.59 3.439 12.59 1V0H10.59V1C10.59 2.774 11.368 4.438 12.589 5.66001H0.25V7.66001H12.589C11.368 8.88201 10.59 10.546 10.59 12.32V13.32H12.59V12.32C12.59 9.88101 14.812 7.66001 17.25 7.66001H18.25V5.66001H17.25Z" fill="#A6D719" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 pt-30 mb-30 text-center wow animate__fadeInUp" data-wow-delay="1.2s">
            <a href="tournament-list.html" class="vs-btn vs-btn--style2" tabindex="-1">
              more matches
              <span class="vs-btn__inner">
                          <span class="vs-btn__blobs">
                              <span class="vs-btn__blob"></span>
              <span class="vs-btn__blob"></span>
              <span class="vs-btn__blob"></span>
              <span class="vs-btn__blob"></span>
              </span>
              </span>
              <svg class="vs-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                  <filter>
                    <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                    <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                    </feColorMatrix>
                    <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                  </filter>
                </defs>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Game Open Registration End -->
    <!-- Team Area -->
    <section class="team-layout space space-extra-bottom" data-bg-src="{{asset('frontend/assets/img/bg/team-page-layout-bg-1.png')}}">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-auto wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="title-style text-center title-anime animation-style5">
              <span class="title-style__small justify-content-center title-anime__title">
                          our team member
                      </span>
              <h2 class="title-style__big title-anime__title">meet our elite team</h2>
              <svg width="79" height="6" viewBox="0 0 79 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 0L0 3.2L4 6H38L39.5 3.4L41.5 6H75L78.5 3.2L75 0H41.5L39.5 2.2L38 0H4Z" fill="#A6D719" />
              </svg>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="team-member team-member--style2">
              <div class="team-member__image-container">
                <div class="team-member__image-bg" style="background-image: url('{{ asset('frontend/assets/img/svg/team-svg-circle-1.svg') }}');"></div>
                <img src="{{ asset('frontend/assets/img/gitar.jpg') }}" alt="sverker lind From Roda" class="team-member__image">
            </div>
              <div class="team-member__details">
                <h3 class="team-member__name">
                  <a href="team-details.html">sverker lind</a>
                </h3>
                <span class="team-member__role">support</span>
                <div class="team-member__social--media">
                  <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                  <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.45s">
            <div class="team-member team-member--style2">
              <div class="team-member__image-container">
                <div class="team-member__image-bg" data-bg-src="{{asset('frontend/assets/img/svg/team-svg-circle-1.svg')}}"></div>
                <img src="{{asset('frontend/assets/img/team/team-member-2.png')}}" alt="sverker lind From Roda" class="team-member__image">
              </div>
              <div class="team-member__details">
                <h3 class="team-member__name">
                  <a href="team-details.html">paul walker</a>
                </h3>
                <span class="team-member__role">Team Leader</span>
                <div class="team-member__social--media">
                  <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                  <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.65s">
            <div class="team-member team-member--style2">
              <div class="team-member__image-container">
                <div class="team-member__image-bg" data-bg-src="{{asset('frontend/assets/img/svg/team-svg-circle-1.svg')}}"></div>
                <img src="{{asset('frontend/assets/img/team/team-member-3.png')}}" alt="sverker lind From Roda" class="team-member__image">
              </div>
              <div class="team-member__details">
                <h3 class="team-member__name">
                  <a href="team-details.html">jason lind</a>
                </h3>
                <span class="team-member__role">Founder</span>
                <div class="team-member__social--media">
                  <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                  <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.85s">
            <div class="team-member team-member--style2">
              <div class="team-member__image-container">
                <div class="team-member__image-bg" data-bg-src="{{asset('frontend/assets/img/svg/team-svg-circle-1.svg')}}"></div>
                <img src="{{asset('frontend/assets/img/team/team-member-4.png')}}" alt="sverker lind From Roda" class="team-member__image">
              </div>
              <div class="team-member__details">
                <h3 class="team-member__name">
                  <a href="team-details.html">max waker</a>
                </h3>
                <span class="team-member__role">Member</span>
                <div class="team-member__social--media">
                  <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                  <a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team Area End -->
    <!-- Video Area Start -->
    <section class="video video--layout2 z-index-common wow animate__fadeInUp" data-wow-delay="0.25s">
      <div class="video__bg z-index-common">
        <div data-vs-gsap-parallax-speed="5" data-vs-gsap-parallax-zoom>
          <img class="video__img" src="{{asset('frontend/assets/img/video/video-bg-1-2.jpg')}}" alt="roda">
        </div>
        <div class="video__content">
          <div class="container">
            <div class="row justify-content-center wow animate__fadeInUp" data-wow-delay="0.65s">
              <div class="col-auto">
                <a href="https://www.youtube.com/watch?v=zX-jSCDsJ8E" class="play-btn video__play--btn popup-video">
                  <i class="fa-solid fa-play"></i>
                  <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.8" cx="53.5" cy="53.5" r="49.5" fill="none" stroke="white" stroke-width="8" stroke-dasharray="3 3" />
                  </svg>
                </a>
                <h2 class="video__title">LIVE STREAMS</h2>
                <a href="#" class="vs-btn vs-btn--style2" tabindex="-1">
                  view Twitch
                  <span class="vs-btn__inner">
                                  <span class="vs-btn__blobs">
                                      <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  </span>
                  </span>
                  <svg class="vs-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                      <filter>
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                        </feGaussianBlur>
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                        </feColorMatrix>
                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                      </filter>
                    </defs>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Video Area End -->
    <!-- Product Area -->
    <section class="product space space-extra-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-auto wow animate__fadeInUp" data-wow-delay="0.45s">
            <div class="title-style text-center title-anime animation-style5">
              <span class="title-style__small justify-content-center title-anime__title">
                          our product
                      </span>
              <h2 class="title-style__big title-anime__title">Explore accessories</h2>
              <svg width="79" height="6" viewBox="0 0 79 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 0L0 3.2L4 6H38L39.5 3.4L41.5 6H75L78.5 3.2L75 0H41.5L39.5 2.2L38 0H4Z" fill="#A6D719" />
              </svg>
            </div>
          </div>
        </div>
        <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1">
          <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="product__item">
              <div class="product__img">
                <a class="product__img--link" href="shop-details.html">
                  <img src="{{asset('frontend/assets/img/products/product-1-1.png')}}" alt="Product Image" class="product__img--main">
                </a>
                <a class="product__wishlist" role="button" href="wishlist.html">
                  <i class="fa-sharp fa-light fa-heart"></i>
                </a>
                <a href="javascript:void(0)" class="vs-btn vs-btn--style2 sideCartTogglerTo" tabindex="-1">
                  add to cart
                  <span class="vs-btn__inner">
                                  <span class="vs-btn__blobs">
                                      <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  </span>
                  </span>
                  <svg class="vs-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                      <filter>
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                        </feGaussianBlur>
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                        </feColorMatrix>
                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                      </filter>
                    </defs>
                  </svg>
                </a>
              </div>
              <div class="product__content">
                <h3 class="product__title">
                  <a class="product__title--link" href="shop-details.html">headphones</a>
                  <span class="product__price">
                                  <bdi>
                                      <span>$</span>35
                  </bdi>
                  </span>
                </h3>
                <a class="product__tag" href="shop.html">equipment</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.45s">
            <div class="product__item">
              <div class="product__img">
                <a class="product__img--link" href="shop-details.html">
                  <img src="{{asset('frontend/assets/img/products/product-1-2.png')}}" alt="Product Image" class="product__img--main">
                </a>
                <a class="product__wishlist" role="button" href="wishlist.html">
                  <i class="fa-sharp fa-light fa-heart"></i>
                </a>
                <a href="javascript:void(0)" class="vs-btn vs-btn--style2 sideCartTogglerTo" tabindex="-1">
                  add to cart
                  <span class="vs-btn__inner">
                                  <span class="vs-btn__blobs">
                                      <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  </span>
                  </span>
                  <svg class="vs-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                      <filter>
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                        </feGaussianBlur>
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                        </feColorMatrix>
                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                      </filter>
                    </defs>
                  </svg>
                </a>
              </div>
              <div class="product__content">
                <h3 class="product__title">
                  <a class="product__title--link" href="shop-details.html">ps4 slim</a>
                  <span class="product__price">
                                  <bdi>
                                      <span>$</span>135
                  </bdi>
                  </span>
                </h3>
                <a class="product__tag" href="shop.html">games</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.65s">
            <div class="product__item">
              <div class="product__img">
                <a class="product__img--link" href="shop-details.html">
                  <img src="{{asset('frontend/assets/img/products/product-1-3.png')}}" alt="Product Image" class="product__img--main">
                </a>
                <a class="product__wishlist" role="button" href="wishlist.html">
                  <i class="fa-sharp fa-light fa-heart"></i>
                </a>
                <a href="javascript:void(0)" class="vs-btn vs-btn--style2 sideCartTogglerTo" tabindex="-1">
                  add to cart
                  <span class="vs-btn__inner">
                                  <span class="vs-btn__blobs">
                                      <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  </span>
                  </span>
                  <svg class="vs-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                      <filter>
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                        </feGaussianBlur>
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                        </feColorMatrix>
                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                      </filter>
                    </defs>
                  </svg>
                </a>
              </div>
              <div class="product__content">
                <h3 class="product__title">
                  <a class="product__title--link" href="shop-details.html">controller</a>
                  <span class="product__price">
                                  <bdi>
                                      <span>$</span>80
                  </bdi>
                  </span>
                </h3>
                <a class="product__tag" href="shop.html">equipment</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.85s">
            <div class="product__item">
              <div class="product__img">
                <a class="product__img--link" href="shop-details.html">
                  <img src="{{asset('frontend/assets/img/products/product-1-4.png')}}" alt="Product Image" class="product__img--main">
                </a>
                <a class="product__wishlist" role="button" href="wishlist.html">
                  <i class="fa-sharp fa-light fa-heart"></i>
                </a>
                <a href="javascript:void(0)" class="vs-btn vs-btn--style2 sideCartTogglerTo" tabindex="-1">
                  add to cart
                  <span class="vs-btn__inner">
                                  <span class="vs-btn__blobs">
                                      <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  <span class="vs-btn__blob"></span>
                  </span>
                  </span>
                  <svg class="vs-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                      <filter>
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                        </feGaussianBlur>
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                        </feColorMatrix>
                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                      </filter>
                    </defs>
                  </svg>
                </a>
              </div>
              <div class="product__content">
                <h3 class="product__title">
                  <a class="product__title--link" href="shop-details.html">r12 case</a>
                  <span class="product__price">
                                  <bdi>
                                      <span>$</span>99
                  </bdi>
                  </span>
                </h3>
                <a class="product__tag" href="shop.html">equipment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Area End -->
  </div>
  <!-- Main Layouts End -->
  
</main>

@endsection