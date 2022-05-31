<footer id="footer">
    <div class="footer-2">
        <div class="container section-footer-padding">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
                    <h3>About</h3>
                    <p>
                        {{ $setting->info }}
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                    <h3>Quick Link</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('aboutUs') }}">About</a></li>
                        <li><a href="{{ route('service') }}">Service Us</a></li>
                        <li><a href="{{ route('team') }}">Management</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('contactus') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                    <h3>Information</h3>
                    <p class="mt-2">
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

                <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                    <h3>Location</h3>
                    <div class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.7378941826544!2d91.81117080813044!3d22.328109395144736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8ca6b937279%3A0x481751884fe1837d!2sAgrabad%20Convention%20Hall!5e0!3m2!1sen!2sbd!4v1653713332238!5m2!1sen!2sbd" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        @php $currentURL = Request::url(); @endphp
        <div class="container d-sm-flex d-lg-block justify-content-sm-center footer-box clearfix">
            <div class="d-none d-lg-block copyright wow fadeInLeft" data-wow-delay="0.2s">&copy; Copyright <span>@php echo(date("Y",time())); @endphp</span>, All Rights Reserved By <a class="text-white" href="#" target="_blank">{{ $setting->company_name }}</a></div>
            <div class="credit wow fadeInRight" data-wow-delay="0.2s">Designed & Developed By <a href="http://linktechbd.com/" class="highlights" target="_blank">Link Up Technology</a></div>
        </div>
    </div>
    </footer>
