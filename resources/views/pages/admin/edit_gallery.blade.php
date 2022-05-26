@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/gallery') }}">Gallery</a></li>
        <li class="breadcrumb-item active">Gallery Update</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-6 mb-md-3 offset-md-3">
            <form action="{{ route('update.gallery', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Update Photo</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="title" class="form-label"><strong>Image Title</strong></label>
                            <input type="text" name="title" class="form-control form-control-sm" id="title" aria-describedby="title" placeholder="Please Enter a Title" value="{{ $gallery->title }}">
                            <span class="text-danger">@error('title') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label"><strong>Image</strong></label>
                            <input type="file" name="image" class="form-control form-control-sm" id="image" aria-describedby="image" accept="image/*" onchange="loadFile(event)">
                            <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                            <img id="output" src="{{ asset('img/gallery/' . $gallery->image) }}" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-between">
                            <a href="{{ url('admin/gallery') }}" class="btn btn-primary btn-sm">Prev</a>
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Update Photo+</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
    </div>
</div>
@endsection