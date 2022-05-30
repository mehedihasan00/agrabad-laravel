@extends('layouts.master_home')
@section('title', 'Image Gallery')
@section('web_content')
<section id="gallery-detail" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-header text-center">
                    <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Photo Gallery</h1>
                    <p class="wow fadeInDown" data-wow-delay="0.2s"></p>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            @foreach ($gallery as $item)
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card wow fadeInUp" data-wow-delay="0.2s">
                    <img class="card-img-top" src="{{ asset('img/gallery/'.$item->image) }}" onerror="this.onerror=null; this.src='img/no.png'" alt="Card image cap">
                    <div class="image-black-cover">
                        <a href="{{ asset('img/gallery/'.$item->image) }}" data-gallery="portfolioDetail" class="item-view gallery-lightbox" title="{{ $item->title }}">
                            <i class="fal fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection