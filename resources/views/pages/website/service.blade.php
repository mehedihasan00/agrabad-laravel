@extends('layouts.master_home')
@section('web_content')
<section id="service-detail" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Services & Event</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="service-block-wrapper text-center wow fadeInLeft" data-wow-delay="0.2s">
                       <div class="image-box">
                           <img src="img/service/wedding.jpg" class="service-img" alt="" srcset="">
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
                           <img src="img/service/birthday.jpg" class="service-img" alt="" srcset="">
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
                           <img src="img/service/engagement.jpg" class="service-img" alt="" srcset="">
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
                           <img src="img/service/gaye-holud.jpg" class="service-img" alt="" srcset="">
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
                           <img src="img/service/iftar-party.jpg" class="service-img" alt="" srcset="">
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
                           <img src="img/service/office-meeting.jpg" class="service-img" alt="" srcset="">
                       </div>
                       <div class="service-title">
                            <h5>Office Meeting</h5>
                       </div>
                       <a href="{{ route('serviceDetail') }}" class="btn btn-detail">Detail</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="service-block-wrapper text-center wow fadeInLeft" data-wow-delay="0.2s">
                       <div class="image-box">
                           <img src="img/service/office-party.jpg" class="service-img" alt="" srcset="">
                       </div>
                       <div class="service-title">
                            <h5>Office Party</h5>
                       </div>
                       <a href="{{ route('serviceDetail') }}" class="btn btn-detail">Detail</a>
                    </div>
                </div>                
            </div>
    </section>
    @endsection