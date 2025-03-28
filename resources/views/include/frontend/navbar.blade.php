<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="./about.html">About</a></li>
                            <li><a href="{{ route('musisi') }}">Personel</a></li>
                            <li><a href="{{ route('events') }}">Events</a></li>
                            <li><a href="./videos.html">Videos</a></li>
                            <li><a href="{{ route('merchandises.index') }}">Merch</a></li>
                               
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>