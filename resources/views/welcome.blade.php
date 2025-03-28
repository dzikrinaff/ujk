@extends('layouts.frontend')

@section('content')

<section class="hero spad set-bg" data-setbg="{{ asset('frontend/assets/img/webp.webp') }}">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="hero__text">
                  <span>New single</span>
                  <h1>Feel the heart beats</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br />tempor
                      incididunt ut labore et dolore magna aliqua.</p>
                  <a href="https://www.youtube.com/watch?v=cCoDqaj_pWs" class="play-btn video-popup"><i class="fa fa-play"></i></a>
              </div>
          </div>
      </div>
  </div>
  <div class="linear__icon">
      <i class="fa fa-angle-double-down"></i>
  </div>
</section>
<!-- Hero Section End -->



<!-- About Section Begin -->
<section class="about spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <div class="about__pic">
                  <img src="{{ asset('frontend/assets/img/about/about.png') }}" alt="">
              </div>
          </div>
          <div class="col-lg-6">
              <div class="about__text">
                  <div class="section-title">
                      <h2>DJ Alexandra Rud</h2>
                      <h1>About me</h1>
                  </div>
                  <p>DJ Rainflow knows how to move your mind, body and soul by delivering tracks that stand out
                      from the norm. As if this impressive succession of high impact, floor-filling bombs wasn’t
                      enough to sustain.</p>
                  <a href="#" class="primary-btn">CONTACT ME</a>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- About Section End -->

<!-- Services Section Begin -->
<section class="services">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6 p-0">
              <div class="services__left set-bg" data-setbg="{{ asset('frontend/assets/img/services/service-left.jpg') }}">
                  <a href="https://www.youtube.com/watch?v=JGwWNGJdvx8" class="play-btn video-popup"><i class="fa fa-play"></i></a>
              </div>
          </div>
          <div class="col-lg-6 p-0">
              <div class="row services__list">
                  <div class="col-lg-6 p-0 order-lg-1 col-md-6 order-md-1">
                      <div class="service__item deep-bg">
                          <img src="{{ asset('frontend/assets/img/services/service-1.png') }}" alt="">
                          <h4>Wedding</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                      </div>
                  </div>
                  <div class="col-lg-6 p-0 order-lg-2 col-md-6 order-md-2">
                      <div class="service__item">
                          <img src="{{ asset('frontend/assets/img/services/service-2.png') }}" alt="">
                          <h4>Clubs and bar</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                      </div>
                  </div>
                  <div class="col-lg-6 p-0 order-lg-4 col-md-6 order-md-4">
                      <div class="service__item deep-bg">
                          <img src="{{ asset('frontend/assets/img/services/service-4.png') }}" alt="">
                          <h4>DJ lessons</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                      </div>
                  </div>
                  <div class="col-lg-6 p-0 order-lg-3 col-md-6 order-md-3">
                      <div class="service__item">
                          <img src="{{ asset('frontend/assets/img/services/service-3.png') }}" alt="">
                          <h4>Corporate events</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Services Section End -->

<!-- Track Section Begin -->
<section class="track spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-7">
              <div class="section-title">
                  <h2>Latest tracks</h2>
                  <h1>Music podcast</h1>
              </div>
          </div>
          <div class="col-lg-5">
              <div class="track__all">
                  <a href="#" class="primary-btn border-btn">View all tracks</a>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-7 p-0">
              <div class="track__content nice-scroll">
                  <div class="single_player_container">
                      <h4>David Guetta Miami Ultra</h4>
                      <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1"
                          data-url="{{ asset('frontend/assets/music-files/1.mp3') }}"></div>
                      <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                          <div class="jp-gui jp-interface">
                              <!-- Player Controls -->
                              <div class="player_controls_box">
                                  <button class="jp-play player_button" tabindex="0"></button>
                              </div>
                              <!-- Progress Bar -->
                              <div class="player_bars">
                                  <div class="jp-progress">
                                      <div class="jp-seek-bar">
                                          <div>
                                              <div class="jp-play-bar">
                                                  <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                              </div>
                              <!-- Volume Controls -->
                              <div class="jp-volume-controls">
                                  <button class="jp-mute" tabindex="0"><i
                                          class="fa fa-volume-down"></i></button>
                                  <div class="jp-volume-bar">
                                      <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_player_container">
                      <h4>David Guetta Miami Ultra</h4>
                      <div class="jp-jplayer jplayer" data-ancestor=".jp_container_2"
                          data-url="{{ asset('frontend/assets/music-files/2.mp3') }}"></div>
                      <div class="jp-audio jp_container_2" role="application" aria-label="media player">
                          <div class="jp-gui jp-interface">
                              <!-- Player Controls -->
                              <div class="player_controls_box">
                                  <button class="jp-play player_button" tabindex="0"></button>
                              </div>
                              <!-- Progress Bar -->
                              <div class="player_bars">
                                  <div class="jp-progress">
                                      <div class="jp-seek-bar">
                                          <div>
                                              <div class="jp-play-bar">
                                                  <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                              </div>
                              <!-- Volume Controls -->
                              <div class="jp-volume-controls">
                                  <button class="jp-mute" tabindex="0"><i
                                          class="fa fa-volume-down"></i></button>
                                  <div class="jp-volume-bar">
                                      <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_player_container">
                      <h4>David Guetta Miami Ultra</h4>
                      <div class="jp-jplayer jplayer" data-ancestor=".jp_container_3"
                          data-url="{{ asset('frontend/assets/music-files/3.mp3') }}"></div>
                      <div class="jp-audio jp_container_3" role="application" aria-label="media player">
                          <div class="jp-gui jp-interface">
                              <!-- Player Controls -->
                              <div class="player_controls_box">
                                  <button class="jp-play player_button" tabindex="0"></button>
                              </div>
                              <!-- Progress Bar -->
                              <div class="player_bars">
                                  <div class="jp-progress">
                                      <div class="jp-seek-bar">
                                          <div>
                                              <div class="jp-play-bar">
                                                  <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                              </div>
                              <!-- Volume Controls -->
                              <div class="jp-volume-controls">
                                  <button class="jp-mute" tabindex="0"><i
                                          class="fa fa-volume-down"></i></button>
                                  <div class="jp-volume-bar">
                                      <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_player_container">
                      <h4>David Guetta Miami Ultra</h4>
                      <div class="jp-jplayer jplayer" data-ancestor=".jp_container_4"
                          data-url="{{ asset('frontend/assets/music-files/4.mp3') }}"></div>
                      <div class="jp-audio jp_container_4" role="application" aria-label="media player">
                          <div class="jp-gui jp-interface">
                              <!-- Player Controls -->
                              <div class="player_controls_box">
                                  <button class="jp-play player_button" tabindex="0"></button>
                              </div>
                              <!-- Progress Bar -->
                              <div class="player_bars">
                                  <div class="jp-progress">
                                      <div class="jp-seek-bar">
                                          <div>
                                              <div class="jp-play-bar">
                                                  <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                              </div>
                              <!-- Volume Controls -->
                              <div class="jp-volume-controls">
                                  <button class="jp-mute" tabindex="0"><i
                                          class="fa fa-volume-down"></i></button>
                                  <div class="jp-volume-bar">
                                      <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_player_container">
                      <h4>David Guetta Miami Ultra</h4>
                      <div class="jp-jplayer jplayer" data-ancestor=".jp_container_5"
                          data-url="{{ asset('frontend/assets/music-files/5.mp3') }}"></div>
                      <div class="jp-audio jp_container_5" role="application" aria-label="media player">
                          <div class="jp-gui jp-interface">
                              <!-- Player Controls -->
                              <div class="player_controls_box">
                                  <button class="jp-play player_button" tabindex="0"></button>
                              </div>
                              <!-- Progress Bar -->
                              <div class="player_bars">
                                  <div class="jp-progress">
                                      <div class="jp-seek-bar">
                                          <div>
                                              <div class="jp-play-bar">
                                                  <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                              </div>
                              <!-- Volume Controls -->
                              <div class="jp-volume-controls">
                                  <button class="jp-mute" tabindex="0"><i
                                          class="fa fa-volume-down"></i></button>
                                  <div class="jp-volume-bar">
                                      <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_player_container">
                      <h4>David Guetta Miami Ultra</h4>
                      <div class="jp-jplayer jplayer" data-ancestor=".jp_container_6"
                          data-url="{{ asset('frontend/assets/music-files/6.mp3') }}"></div>
                      <div class="jp-audio jp_container_6" role="application" aria-label="media player">
                          <div class="jp-gui jp-interface">
                              <!-- Player Controls -->
                              <div class="player_controls_box">
                                  <button class="jp-play player_button" tabindex="0"></button>
                              </div>
                              <!-- Progress Bar -->
                              <div class="player_bars">
                                  <div class="jp-progress">
                                      <div class="jp-seek-bar">
                                          <div>
                                              <div class="jp-play-bar">
                                                  <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                              </div>
                              <!-- Volume Controls -->
                              <div class="jp-volume-controls">
                                  <button class="jp-mute" tabindex="0"><i
                                          class="fa fa-volume-down"></i></button>
                                  <div class="jp-volume-bar">
                                      <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-5 p-0">
              <div class="track__pic">
                  <img src="{{ asset('frontend/assets/img/track-right.jpg') }}" alt="">
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Track Section End -->

<!-- Youtube Section Begin -->
<section class="youtube spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Youtube feed</h2>
                    <h1>Latest videos</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="youtube__item">
                    <div class="youtube_item_pic">
                        <img src="{{ asset('frontend/assets/img/youtube/youtube-1.jpg') }}" alt="David Guetta">
                        <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1" class="play-btn video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="youtube_item_text">
                        <h4>David Guetta Miami Ultra Music Festival 2019</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="youtube__item">
                    <div class="youtube_item_pic">
                        <img src="{{ asset('frontend/assets/img/youtube/youtube-2.jpg') }}" alt="Martin Garrix">
                        <a href="https://www.youtube.com/watch?v=K4DyBUG242c?autoplay=1" class="play-btn video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="youtube_item_text">
                        <h4>Martin Garrix (Full live-set) | SLAM!Koningsdag</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="youtube__item">
                    <div class="youtube_item_pic">
                        <img src="{{ asset('frontend/assets/img/youtube/youtube-3.jpg') }}" alt="Dimitri Vegas">
                        <a href="https://www.youtube.com/watch?v=S19UcWdOA-I?autoplay=1" class="play-btn video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="youtube_item_text">
                        <h4>Dimitri Vegas, Steve Aoki & Like Mike’s “3 Are Legend”</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  
<!-- Youtube Section End -->



@endsection
