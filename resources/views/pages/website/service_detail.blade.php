@extends('layouts.master_home')
@section('web_content')
<section id="all-details" class="all-details">
    <div class="fullwidth">
        <div class="image-box" style="display: flex; align-items: center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="section-title-header text-center" style="background-color: #1f381799; color: #fff;">
                            <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Service Detail Title</h1>
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
                <div class="image-box mb-4">
                    <img src="{{ asset('img/service/'.$serviceDetail->image) }}" class="img-single-service" alt="" srcset="">
                </div>
                <div class="service-single-box">
                    <p class="mb-4">{!! $serviceDetail->description !!}</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Standard
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-purple">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Average
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-purple">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Local
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-purple">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Information</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5 class="card-title">Email: </h5>
                            <p>
                                <i class="fal fa-envelope"></i>
                                <span>info@email.com</span>
                            </p>
                            <p>
                                <i class="fal fa-envelope"></i>
                                <span>info@email.com</span>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Telephone: </h5>
                            <p>
                                <i class="fal fa-phone-office"></i>
                                <a href="tel: 02-222 292 976">02-222 292 976</a>
                            </p>
                            <p>
                                <i class="fal fa-phone-office"></i>
                                <a href="tel: 02-222 292 976">02-222 292 976</a>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Hotline: </h5>
                            <p>
                                <i class="fal fa-phone-alt"></i>
                                <a href="tel: +88 01715-667199">+88 01715-667199</a>
                            </p>
                            <p>
                                <i class="fal fa-phone-alt"></i>
                                <a href="tel: +88 01715-667199">+88 01715-667199</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection