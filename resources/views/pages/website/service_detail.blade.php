@extends('layouts.master_home')
@section('web_content')
<section id="all-details" class="all-details">
    <div class="fullwidth">
        <div class="image-box" style="display: flex; align-items: center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="section-title-header text-center" style="background-color: #1f381799; color: #fff;">
                            <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s" style="font-size: 30px">{{ $serviceDetail->name }}</h1>
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
            <div class="col-md-9">
                <div class="image-box mb-md-2">
                    <img src="{{ asset('img/service/'. $serviceDetail->image) }}" class="img-single-service" alt="" srcset="">
                    <p class="m-0 text-center"><span style="color: #ad1f6d">Picture: </span><span>{{ $serviceDetail->name }}</span></p>
                </div>
                <div class="service-single-box">
                    <div class="mb-4"><span>Description: </span>{!! $serviceDetail->description !!}</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Information</h5>
                        <p class="card-text">{{ $setting->info }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5 class="card-title">Email: </h5>
                            <p>
                                <i class="fal fa-envelope"></i>
                                <span>{{ $setting->email }}</span>
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