@extends('layouts.master_home')
@section('title', 'Service Detail')
@section('web_content')
<section id="all-details" class="all-details">
    <div class="fullwidth">
        <div class="image-box" style="display: flex; align-items: center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="section-title-header text-center wow fadeInUp" data-wow-delay="0.2s">
                            <h1 class="section-title pb-0">{{ $serviceDetail->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  
<section id="single-service" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-9">
                <div class="image-box mb-md-2">
                    <img src="{{ asset('img/service/'. $serviceDetail->image) }}" class="img-single-service" onerror="this.onerror=null; this.src='img/no.png'" alt="" srcset="">
                    <p class="m-0 text-center"><span style="color: #ad1f6d">Picture: </span><span>{{ $serviceDetail->name }}</span></p>
                </div>
                <div class="service-single-box">
                    <div class="mb-4"><span>Description: </span>{!! $serviceDetail->description !!}</div>
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Information</h5>
                        <p class="card-mod-text card-text">{{ $setting->info }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5 class="card-title">Email: </h5>
                            <p>
                                <i class="fal fa-envelope"></i>
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Telephone: </h5>
                            <p>
                                <i class="fal fa-phone-office"></i>
                                <a href="tel: {{ $setting->tele_phone }}">{{ $setting->tele_phone }}</a>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Hotline: </h5>
                            <p>
                                <i class="fal fa-phone-alt"></i>
                                <a href="tel: {{ $setting->hotline }}">{{ $setting->hotline }}</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection