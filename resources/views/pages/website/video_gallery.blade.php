@extends('layouts.master_home')
@section('web_content')
<section id="video-gallery" class="section-padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Latest Videos</h1>
                    <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur
                        adipiscing <br> elit, sed do eiusmod tempor</p>
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
        </div>
    </div>
</section>
@endsection