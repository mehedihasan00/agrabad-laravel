@extends('layouts.master_home')
      @section('web_content')
      <section id="slider">
        <div id="main-slide" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @php $count = 0; @endphp

                @foreach($sliders as $slider)
                @if($count == 0) 
                <li data-target="#main-slide" data-slide-to="{{ $count++ }}" class="active"></li>
                @else
                <li data-target="#main-slide" data-slide-to="{{ $count++ }}"></li>
                @endif
                @endforeach
                <!-- <li data-target="#main-slide" data-slide-to="2"></li> -->
            </ol>
            <div class="carousel-inner">
                @php $count = 0; @endphp
                @foreach($sliders as $slider)
                @if($count == 0)
                <div class="carousel-item active">
                    <img class="d-block w-100 slider{{ $count++ }}" src="{{ asset('img/slider/'. $slider->image) }}" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <h1 class="wow fadeInDown heading" data-wow-delay=".4s">{{ $slider->title }}</h1>
                        <p class="fadeInUp wow" data-wow-delay=".6s"> {{ $slider->caption }}
                        </p>
                        <a href="{{ $slider->link_url }}" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s"> {{ $slider->link_title }} </a>
                        <!-- <a href="#google-map-area" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Contact</a> -->
                    </div>
                </div>
                @else
                <div class="carousel-item">
                <img class="d-block w-100 slider{{ $count++ }}" src="{{ asset('img/slider/'. $slider->image) }}" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <h1 class="wow fadeInDown heading" data-wow-delay=".4s">{{ $slider->title }}</h1>
                        <p class="fadeInUp wow" data-wow-delay=".6s"> {{ $slider->caption }}
                        </p>
                        <a href="{{ $slider->link_url }}" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s"> {{ $slider->link_title }} </a>
                        <!-- <a href="#google-map-area" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Contact</a> -->
                    </div>
                </div>
                @endif
                @endforeach
                <!-- <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/slider/slider3.jpg') }}" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <h1 class="wow fadeInUp heading" data-wow-delay=".6s">Book Your Seat Today!</h1>
                        <p class="fadeInUp wow" data-wow-delay=".8s">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Provident eum ullam <br> cupiditate nam rerum numquam blanditiis doloribus aspernatur.
                        </p>
                        <a href="#pricing" class="fadeInUp wow btn btn-common" data-wow-delay=".8s">Book Ticket</a>
                    </div>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
                <span class="carousel-control" aria-hidden="true"><i class="fal fa-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
                <span class="carousel-control" aria-hidden="true"><i class="fal fa-chevron-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                    <h2 class="intro-title">Little About</h2>
                    <h3 class="title-sub">Agrabad Convention Hall</h3>
                    <p class="intro-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum,
                        doloremque quaerat sit tempora eius est reiciendis accusamus magnam quae. Explicabo dolore
                        officia, iure a ullam aliquam nemo excepturi.
                    </p></br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laboriosam sit nam animi,
                        distinctio maiores possimus! Suscipit officiis reiciendis vitae omnis eligendi? Tempora at ullam
                        repudiandae, magnam nemo fuga omnis.</p>
                    <div class="mt-3 mb-3">
                        <a href="about-us.html" class="btn btn-common">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{ asset('img/about/agrabad-convention_hall_bhaban_540x360.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Services & Events</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="service-block-wrapper text-center wow fadeInLeft" data-wow-delay="0.2s">
                       <div class="image-box">
                           <img src="{{ asset('img/service/wedding.jpg') }}" class="service-img" alt="" srcset="">
                           <span class="image-overlay"></span>
                       </div>
                       <div class="service-title">
                            <h5>Wedding</h5>
                       </div>
                       <a href="{{ route('serviceDetail') }}" class="btn btn-detail">Detail</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="service-block-wrapper text-center wow fadeInLeft" data-wow-delay="0.2s">
                       <div class="image-box">
                           <img src="{{ asset('img/service/birthday.jpg') }}" class="service-img" alt="" srcset="">
                           <span class="image-overlay"></span>
                       </div>
                       <div class="service-title">
                            <h5>Birthday</h5>
                       </div>
                       <a href="{{ route('serviceDetail') }}" class="btn btn-detail">Detail</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="service-block-wrapper text-center wow fadeInLeft" data-wow-delay="0.2s">
                       <div class="image-box">
                           <img src="{{ asset('img/service/engagement.jpg') }}" class="service-img" alt="" srcset="">
                           <span class="image-overlay"></span>
                       </div>
                       <div class="service-title">
                            <h5>Engagement</h5>
                       </div>
                       <a href="{{ route('serviceDetail') }}" class="btn btn-detail">Detail</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="service-block-wrapper text-center wow fadeInLeft" data-wow-delay="0.2s">
                       <div class="image-box">
                           <img src="{{ asset('img/service/gaye-holud.jpg') }}" class="service-img" alt="" srcset="">
                           <span class="image-overlay"></span>
                       </div>
                       <div class="service-title">
                            <h5>Gaye Holud</h5>
                       </div>
                       <a href="{{ route('serviceDetail') }}" class="btn btn-detail">Detail</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="service-block-wrapper text-center wow fadeInLeft" data-wow-delay="0.2s">
                       <div class="image-box">
                           <img src="{{ asset('img/service/iftar-party.jpg') }}" class="service-img" alt="" srcset="">
                           <span class="image-overlay"></span>
                       </div>
                       <div class="service-title">
                            <h5>Iftar Party</h5>
                       </div>
                       <a href="{{ route('serviceDetail') }}" class="btn btn-detail">Detail</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="service-block-wrapper text-center wow fadeInLeft" data-wow-delay="0.2s">
                       <div class="image-box">
                           <img src="{{ asset('img/service/office-meeting.jpg') }}" class="service-img" alt="" srcset="">
                           <span class="image-overlay"></span>
                       </div>
                       <div class="service-title">
                            <h5>Office Meeting</h5>
                       </div>
                       <a href="{{ route('serviceDetail') }}" class="btn btn-detail">Detail</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="see-more-button mt-4 text-center">
                        <a href="service.html" class="view-all-btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Management</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team-item text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('img/team/team-01.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Emilly Williams</a></h3>
                            <p>Product Designer, Tesla</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('img/team/team-02.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Patric Green</a></h3>
                            <p>Front-end Developer, Dropbox</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('img/team/team-03.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Paul Kowalsy</a></h3>
                            <p>Lead Designer, TNW</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('img/team/team-04.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Jhon Doe</a></h3>
                            <p>Back-end Developer, ASUS</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team-item text-center wow fadeInUp" data-wow-delay="1s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('img/team/team-05.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Daryl Dixon</a></h3>
                            <p>Full-stack Developer, Google</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center wow fadeInUp" data-wow-delay="1.2s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('img/team/team-06.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Chris Adams</a></h3>
                            <p>UI Designer, Apple</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="team-item text-center wow fadeInUp" data-wow-delay="1.4s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('img/team/team-07.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Lisa Amaira</a></h3>
                            <p>Product Manager, Uber</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team-item text-center wow fadeInUp" data-wow-delay="1.6s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('img/team/team-08.jpg') }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Rick Grimes</a></h3>
                            <p>QA, Samsung</p>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <div class="see-more-button mt-4 text-center">
                        <a href="team.html" class="view-all-btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Photo Gallery</h1>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                @php $count=1 @endphp
                @foreach($galleries as $gallery)
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card wow fadeInUp" data-wow-delay="0.2s">
                        <img class="card-img-top" src="{{ asset('img/Gallery/'. $gallery->image) }}" alt="Card image cap">
                        <div class="image-black-cover">
                            <a href="{{ asset('img/Gallery/'. $gallery->image) }}" data-gallery="portfolioGallery" class="item-view gallery-lightbox" title="image title">
                                <i class="fal fa-search-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12">
                    <div class="see-more-button mt-4 text-center">
                        <a href="gallery.html" class="view-all-btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="video-gallery" class="section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Latest Videos</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="video-item wow fadeInUp" data-wow-delay="0.2s">
                        <iframe width="100%" height="196" src="https://www.youtube.com/embed/8Fbhi2izN0c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="video-item wow fadeInUp" data-wow-delay="0.2s">
                        <iframe width="100%" height="196" src="https://www.youtube.com/embed/8Fbhi2izN0c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="video-item wow fadeInUp" data-wow-delay="0.2s">
                        <iframe width="100%" height="196" src="https://www.youtube.com/embed/8Fbhi2izN0c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    </div>
                </div>
                <div class="col-12">
                    <div class="see-more-button mt-4 text-center">
                        <a href="videos.html" class="view-all-btn">View All</a>
                    </div>
                </div>                                        
            </div>
        </div>
    </section>

    <section id="sponsors" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsors and Partners</h1>
                    </div>
                </div>
            </div>
            <div class="row mb-30 wow fadeInDown text-center" data-wow-delay="0.3s">
                <div class="col-12 col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div>
                            <div class="col-12">
                                <div class="spnsors-logo">
                                    <img class="img-fluid" src="{{ asset('img/client/gold-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <div class="spnsors-logo">
                                    <img class="img-fluid" src="{{ asset('img/client/gold-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <div class="spnsors-logo">
                                    <img class="img-fluid" src="{{ asset('img/client/gold-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <div class="spnsors-logo">
                                    <img class="img-fluid" src="{{ asset('img/client/gold-4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <div class="spnsors-logo">
                                    <img class="img-fluid" src="{{ asset('img/client/1733895055252016.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <div class="spnsors-logo">
                                    <img class="img-fluid" src="{{ asset('img/client/1733895143051514.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contact-item wow fadeInUp" data-wow-delay="0.2s">
                        <i class="fal fa-home-alt"></i>
                        <div class="contact-info">
                            <h3>Direct Contact</h3>
                            <p>548 Market St.</p>
                            <p>San Francisco, CA</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-item wow fadeInUp" data-wow-delay="0.4s">
                        <i class="fal fa-question-circle"></i>
                        <div class="contact-info">
                            <h3>Queries</h3>
                            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="eb838e878784ab84858e9d8e859fc5888486">[email&#160;protected]</a></p>
                            <p>+123445467567</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-item wow fadeInUp" data-wow-delay="0.6s">
                        <i class="fal fa-ribbon"></i>
                        <div class="contact-info">
                            <h3>Organized By</h3>
                            <p>OneEvent LLC</p>
                            <p>548 Market St.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection