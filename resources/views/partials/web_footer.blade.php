<footer id="footer">
    <div class="footer-2">
        <div class="container section-footer-padding">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
                    <h3>About</h3>
                    <p>
                       {!! Str::words($setting->about_company, 20, '') !!}
                    </p>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                    <h3>Quick Link</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('aboutUs') }}">About</a></li>
                        <li><a href="{{ route('service') }}">Service Us</a></li>
                        <li><a href="{{ route('team') }}">Management</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                    <h3>Learn More</h3>
                    <ul>
                        <li><a href="#">How it Works</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Log In</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                    <h3>Information</h3>
                    <p>{{ $setting->info }}</p>
                    <p class="mt-4">
                        <i class="fal fa-envelope"></i> &nbsp;
                        <span>{{ $setting->email }}</span>
                    </p>
                    <p class="mt-2">
                        <i class="fal fa-phone-office"></i> &nbsp;
                        <a href="tel: {{ $setting->tele_phone }}" class="text-white">{{ $setting->tele_phone }}</a>
                    </p>

                    <p class="mt-2">
                        <i class="fal fa-phone-alt"></i>
                        <a href="tel: {{ $setting->hotline }}" class="text-white">{{ $setting->hotline }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container footer-box clearfix">
            <div class="copyright wow fadeInLeft" data-wow-delay="0.2s">&copy; Copyright <strong><a href="http://linktechbd.com/" target="_blank">linktechbd.com</a></strong> All Rights Reserved</div>
            <div class="credit wow fadeInRight" data-wow-delay="0.2s">Designed by <a href="http://linktechbd.com/" class="highlights" target="_blank">Link Up Technology</a></div>
        </div>
    </div>
    </footer>
