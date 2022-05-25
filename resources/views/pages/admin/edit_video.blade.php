@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/video') }}">Video</a></li>
        <li class="breadcrumb-item active">Update Video</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-6 mb-md-3 offset-md-3">
            <form action="{{ route('update.video', $video->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card mb-md-4">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Youtube  link</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="videoLink" class="form-label"><strong>Update youtube embed Link</strong></label>
                            <input type="url" name="link" class="form-control form-control-sm" id="videoLink" aria-describedby="videoLink" placeholder="Please Enter an youtube link" value="{{ $video->link }}">
                            <span class="text-danger">@error('link') {{ $message }} @enderror</span>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-between">
                            <a href="{{ url('admin/video') }}" class="btn btn-primary btn-sm">Prev</a>
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Update link</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem; text-align: center">
                        <iframe width="460" height="300" src="{{ $video->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>         
            </form>
        </div>
    </div>
</div>
@endsection