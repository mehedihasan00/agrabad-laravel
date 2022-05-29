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
                    <h3 class="title-sub">{{ $setting->company_name }}</h3>
                    @if(countwords($setting->about_company) > 80) 
                        <p class="intro-desc">{!! Str::words($setting->about_company, 80) !!}</p>
                        <div class="mt-3 mb-3">
                            <a href="{{ route('aboutUs') }}" class="btn btn-common">Read More</a>
                        </div>
                    @else
                    <p class="intro-desc">{{ $setting->about_company }}</p>
                    @endif
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                    <img class="img-fluid about_img" src="{{ asset('img/about/' . $setting->about_image) }}" alt="">
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
                @foreach ($service as $item)
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="service-block-wrapper text-center wow fadeInLeft" data-wow-delay="0.2s">
                       <div class="image-box">
                           <img src="{{ asset('img/service/'.$item->image) }}" class="service-img" alt="" srcset="">
                           <span class="image-overlay"></span>
                       </div>
                       <div class="service-title">
                            <h5>{{ $item->name }}</h5>
                       </div>
                       <a href="{{ route('serviceDetail', $item->id) }}" class="btn btn-detail">Detail</a>
                    </div>
                </div>
                
                @endforeach
                <div class="col-12">
                    <div class="see-more-button mt-4 text-center">
                        <a href="{{ route('service') }}" class="view-all-btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Management Section --}}
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
                @foreach($management as $item)
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team-item text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('img/team/' . $item->image) }}" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="{{ $item->fb_link }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="{{ $item->twitter_link }}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="{{ $item->instagram_link }}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">{{ $item->name }}</a></h3>
                            <p>{{ $item->designation }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12">
                    <div class="see-more-button mt-4 text-center">
                        <a href="{{ route('team') }}" class="view-all-btn">View All</a>
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
                        <a href="{{ route('gallery') }}" class="view-all-btn">View All</a>
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
                @foreach($videos as $video)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="video-item wow fadeInUp" data-wow-delay="0.2s">
                        <iframe width="100%" height="196" src="{{ $video->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    </div>
                </div>
                @endforeach
                <div class="col-12">
                    <div class="see-more-button mt-4 text-center">
                        <a href="{{ route('videoGallery') }}" class="view-all-btn">View All</a>
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
                        @foreach($client as $index)
                        <div>
                            <div class="col-12">
                                <div class="spnsors-logo">
                                    <img class="img-fluid" src="{{ asset('img/client/' . $index->image) }}" alt="{{  $index->image }}">
                                </div>
                                <div class="sponsors-name">
                                    <p>{{ $index->name }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                            <p>{{ $setting->company_address }}</p>
                            <!-- <p>548 Market St.</p>
                            <p>San Francisco, CA</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-item wow fadeInUp" data-wow-delay="0.4s">
                        <i class="fal fa-question-circle"></i>
                        <div class="contact-info">
                            <h3>Queries</h3>
                            <p>
                                <!-- <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb838e878784ab84858e9d8e859fc5888486">[email&#160;protected]</a> -->
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email  }}</a>
                            </p>
                            <p>{{ $setting->tele_phone }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-item wow fadeInUp" data-wow-delay="0.6s">
                        <i class="fal fa-ribbon"></i>
                        <div class="contact-info">
                            <h3>Organized By</h3>
                            <p>{{ $setting->company_name }}</p>
                            <!-- <p>{{ $setting->company_address }}</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection