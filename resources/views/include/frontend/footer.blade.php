<footer class="vs-footer vs-footer--style2 vs-footer--fixed wow animate__fadeInUp" data-wow-delay="0.65s">
    <div class="vs-footer__widgets" data-bg-src="{{asset('frontend/assets/img/bg/footer-bg-2.png')}}">
      <div class="container">
        <div class="row justify-content-center position-relative">
          <div class="col-xl-auto">
            <div class="vs-footer__widget text-center">
              <a href="#body" class="vs-footer__backtotop">
                <i class="fa-solid fa-caret-up"></i>
                TES CIK
              </a>
              <img src="{{asset('frontend/assets/img/svg/footer-logo-sep.svg')}}" alt="sep" class="vs-footer__sep">
              <div class="vs-footer__logo mb-20">
                <a href="index.html">
                  <img src="{{asset('frontend/assets/img/logo.svg')}}" alt="Roda Logo">
                </a>
                <!-- Mobile Menu Toggle Button -->
                <button class="menu-toggle active" id="menuToggle" aria-label="Toggle Menu">
                  <i class="fal fa-bars"></i>
                </button>
              </div>
              <nav class="main-menu main-menu--footer mobile-nav">
                <!-- Navigation Menu -->
                <ul class="menu show" id="menu">
                  <li class="menu-item-has-children">
                    <a class="vs-svg-assets" data-svg-assets="{{asset('frontend/assets/img/svg/svg-menu-bottom-line.svg')}}" href="index.html">HOME</a>
                  </li>
                  <li>
                    <a class="vs-svg-assets" data-svg-assets="{{asset('frontend/assets/img/svg/svg-menu-bottom-line.svg')}}" href="about.html">About</a>
                  </li>
                  <li>
                    <a class="vs-svg-assets" data-svg-assets="{{asset('frontend/assets/img/svg/svg-menu-bottom-line.svg')}}" href="service.html">Service</a>
                  </li>
                  <li class="menu-item-has-children">
                    <a class="vs-svg-assets" data-svg-assets="{{asset('frontend/assets/img/svg/svg-menu-bottom-line.svg')}}" href="shop.html">Shop</a>
                  </li>
                  <li class="menu-item-has-children">
                    <a class="vs-svg-assets" data-svg-assets="{{asset('frontend/assets/img/svg/svg-menu-bottom-line.svg')}}" href="blog.html">Blog</a>
                  </li>
                  <li>
                    <a class="vs-svg-assets" data-svg-assets="{{asset('frontend/assets/img/svg/svg-menu-bottom-line.svg')}}" href="contact.html">Contact</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <hr class="vs-footer__divider">
        <div class="row justify-content-between gy-4">
          <div class="col-lg-4 text-center text-lg-start">
            <h3 class="vs-footer__title--sub">About <span>Information</span></h3>
            <div class="vs-footer__info">
              <span>Address :</span> 9608 North Mopac Mexpressway Suite 700 Austin, TX 78759
            </div>
            <div class="vs-footer__info">
              <span>Phone :</span> <a href="tel:+13337558596">+1 333 755 8596</a>
            </div>
          </div>
          <div class="col-lg-6">
            <form class="email-subscription__form">
              <input id="email-subscription3" class="email-subscription__input" type="email" placeholder="Your email address" required autocomplete="off">
              <div class="email-subscription__right">
                <button type="submit" class="vs-btn email-subscription__btn">Subscribe</button>
              </div>
            </form>
            <div class="vs-footer__newsletter--bottom d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
              <div class="vs-footer__links">
                <a href="#">Terms of use</a>
                <a href="#">Policy</a>
              </div>
              <span class="vs-footer__newsletter--divider"></span>
              <div class="vs-footer__social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="vs-footer__copyright">
      <div class="container">
        Copyright © <span id="currentYear"></span> <a href="index.html">roda</a>. All rights reserved.
      </div>
    </div>
  </footer>