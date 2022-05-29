@extends('layouts.master_home')
@section('web_content')
<section id="about-detail" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-header text-center">
                    <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">About Us</h1>
                    <p class="wow fadeInDown" data-wow-delay="0.2s"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="image-right text-center">
                    <img class="img-fluid" src="{{ asset('img/about/' . $setting->about_image) }}" alt="" style="display: inherit;">
                    <span style="font-size: 13px;"><b>Picture:</b> {{ $setting->company_name }}</span>
                </div>
                <h3 class="title-sub">{{ $setting->company_name }}</h3>
                <p class="intro-desc">{!! $setting->about_company !!}</p>
                <!-- <div class="mt-3 mb-3">
                    <a href="#" class="btn btn-common">Read More</a>
                </div> -->
            </div>
        </div>
    </div>
</section>
@endsection