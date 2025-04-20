<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="{{ route('welcome') }}"><img src="{{ asset('frontend/assets/img/perunggu_modified.png') }}" alt="Logo"></a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="{{ route('albums') }}">Albums</a></li>
                            <li><a href="{{ route('musisi') }}">Personil</a></li>
                            <li><a href="{{ route('events') }}">Events</a></li>
                            <li><a href="{{ route('videos') }}">Videos</a></li>
                            <li><a href="{{ route('merchandises.index') }}">Merch</a></li>
                            
                            <!-- User Authentication Section -->
                            <li class="dropdown">
                                @auth
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle me-1"></i> {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-2" style="min-width: 180px;">
                                    <li>
                                        <!-- Form Logout -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item p-1" style="cursor: pointer; background: none; border: none; width: 100%; text-align: left;">
                                                <i class="bi bi-box-arrow-right me-1"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                                @else
                                <a href="{{ route('login') }}" class="d-flex align-items-center">
                                    <i class="bi bi-box-arrow-in-right me-1"></i> Login
                                </a>
                                @endauth
                            </li>
                            
                            
                            <!-- Cart Icon -->
                            <li>
                                <a href="{{ route('cart.index') }}" class="position-relative">
                                    <i class="bi bi-cart3"></i>
                                    @auth
                                        @if(count((array) session('cart')))
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            {{ count((array) session('cart')) }}
                                        </span>
                                        @endif
                                    @endauth
                                </a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>