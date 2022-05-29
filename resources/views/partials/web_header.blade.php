<div id="topbar" class="topbar">
    <div class="container">
        <div class="nav-box d-flex justify-content-md-between">
            <div class="address text-center">
                <span class="phone">
                    <i class="fal fa-phone-alt"></i>
                    +8801715-566671
                </span>
                <!-- <span class="text">
                    <i class="fal fa-map-marker-alt"></i>
                    <span>Fatema Heights (1st Floor) 16, Agrabad C/A, Chittagong-4100</span>
                </span> -->
            </div>
            <div class="icon d-none d-md-block">
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<header id="header-wrap">
    <nav class="navbar navbar-expand-lg scrolling-navbar" id="white-bg">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                    aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                </button>
                <!-- <a href="index.html" class="navbar-brand"><img src="assets/img/logo/agrabad-logo-designhill_180x80.png" alt=""></a> -->
                <a href="{{ route('home') }}" class="navbar-brand nav-mod-title"><span>Agrabad Convention Hall</span></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}/#slider">
                            Home
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->routeIs('aboutUs')) ? 'active' : '' }}">
                        <a class="nav-link page-scroll" href="{{ route('aboutUs') }}">
                            About
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->routeIs('service')) ? 'active' : '' }}">
                        <a class="nav-link page-scroll" href="{{ route('service') }}">
                            Service
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->routeIs('team')) ? 'active' : '' }}">
                        <a class="nav-link page-scroll" href="{{ route('team') }}">
                            Management
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->routeIs('gallery')) ? 'active' : '' }}">
                        <a class="nav-link page-scroll" href="{{ route('gallery') }}">
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->routeIs('videoGallery')) ? 'active' : '' }}">
                        <a class="nav-link page-scroll" href="{{ route('videoGallery') }}">
                            Videos
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ url('/') }}#sponsors">
                            Clients
                        </a>
                    </li> -->
                    <li class="nav-item {{ (request()->routeIs('contactus')) ? 'active' : '' }}">
                        <a class="nav-link page-scroll" href="{{ route('contactus') }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <ul class="mobile-menu">
            <li>
                <a class="page-scrool" href="{{ route('home') }}/#slider">Home</a>
            </li>
            <li>
                <a class="page-scroll" href="{{ route('aboutUs') }}">About</a>
            </li>
            <li>
                <a class="page-scroll" href="{{ route('service') }}">Service</a>
            </li>
            <li>
                <a class="page-scroll" href="{{ route('team') }}">Management</a>
            </li>
            <li>
                <a class="page-scroll" href="{{ route('gallery') }}">Gallery</a>
            </li>
            <li>
                <a class="page-scroll" href="{{ route('videoGallery') }}">Videos</a>
            </li>
            <li>
                <a class="page-scroll" href="{{ route('home') }}#sponsors">Clients</a>
            </li>
            <li>
                <a class="page-scroll" href="{{ route('home') }}#google-map-area">Contact</a>
            </li>
        </ul>

    </nav>    
</header>