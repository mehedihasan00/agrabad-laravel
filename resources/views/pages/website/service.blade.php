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
                
                                
            </div>
    </section>
    @endsection