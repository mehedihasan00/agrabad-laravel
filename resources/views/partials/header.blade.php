<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ url('admin/dashboard') }}" style="font-size: 1rem">Agrabad Convention Hall</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <!-- Time Now -->
    <span class="d-none d-md-inline-block ms-2 me-0 me-md-3 my-2 my-md-0" id="time_is_link" style="font-size:15px; color: gray;">
        Date & Time: 
        <span id='ct7'></span>
        <!-- <span id="Dhaka_z412" style="font-size:15px; color: gray;"></span> -->
    </span>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-auto me-3 me-lg-4">
        <!-- @if(session('LoggedUser'))
        <li class="nav-item dropdown">
            <a href="">{{ session('LoggedUser') }}</a>
        </li>
        @endif -->
        <li class="nav-item dropdown">
            <!-- <div name="trigger">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>
                @else
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                            {{ Auth::user()->name }}

                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>
                @endif
            </div> -->
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="nav-profile" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('profile.show') }}">Settings</a></li>
                <li><a class="dropdown-item" href="{{ url('admin/password') }}">Change Password</a></li>
                <li><hr class="dropdown-divider" /></li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit(); " role="button">
                            {{ __('Log Out') }}
                        </a>
                    </li>
                </form>
            </ul>
        </li>
    </ul>
</nav>