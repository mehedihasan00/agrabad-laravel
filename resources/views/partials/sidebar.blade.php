<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                <a class="nav-link" href="{{ url('admin/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSetting" aria-expanded="false" aria-controls="collapseSetting">
                    <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                    Setting
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSetting" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin/setting') }}">Company Contents</a>
                    </nav>
                </div>
                <a class="nav-link @yield('webcontent') collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Web Contents
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{  request()->routeIs('slider') ? 'active' : '' }}" href="{{ url('/admin/slider') }}">Slider</a>
                        <a class="nav-link" href="{{ url('/admin/service') }}">Services</a>
                        <a class="nav-link @yield('management')" href="{{ route('management.index') }}">Management</a>
                        <!-- <a class="nav-link" href="{{ url('/admin/team') }}">Our Team</a> -->
                        <a class="nav-link" href="{{ url('/admin/gallery') }}">Gallery</a>
                        <a class="nav-link" href="{{ url('/admin/video') }}">Video</a>
                        <a class="nav-link" href="{{ url('/admin/client') }}">Client</a>
                        <!-- <a class="nav-link" href="{{ url('/admin/category') }}">Category</a>
                        <a class="nav-link" href="{{ url('/admin/product') }}">Product</a>-->
                    </nav>
                </div>
                <a class="nav-link" href="{{ url('admin/message') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                    Customer Message
                </a>
                <!-- <a class="nav-link" href="{{ url('admin/users')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>
                <a class="nav-link" href="{{ url('admin/registration')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                    Add User
                </a>
                
                <a class="nav-link" onclick="logOut('#')" style="cursor: pointer">
                    <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                    Log Out
                </a> -->
            </div>
        </div>
    </nav>
</div>