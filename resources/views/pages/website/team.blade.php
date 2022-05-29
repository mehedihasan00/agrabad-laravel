@extends('layouts.master_home')
@section('web_content')
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
            @foreach ($management as $item)
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="team-item text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-img">
                        <img class="img-fluid" src="{{ asset('img/team/'.$item->image) }}" alt="" style="width: 255px; height: 255px">
                        <div class="team-overlay">
                            <div class="overlay-social-icon text-center">
                                <ul class="social-icons">
                                    <li><a href="{{ $item->facebook }}" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="{{ $item->twitter }}" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="{{ $item->instagram }}" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
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
            
        </div>
        
    </div>
</section>
@endsection