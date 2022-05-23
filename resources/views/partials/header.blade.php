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
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('backend/assets/img/avater.png') }}" alt="nothing" srcset="" style="height: 30px; width: 30px;">
                custom name
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ url('admin/setting') }}">Settings</a></li>
                <li><a class="dropdown-item" href="{{ url('admin/password') }}">Change Password</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>