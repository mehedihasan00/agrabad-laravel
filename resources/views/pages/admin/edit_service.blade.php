@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/service') }}">Service</a></li>
        <li class="breadcrumb-item active">Update Service</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3 mb-md-3">
            <form action="{{ url('service/update/'.$service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Update Services+</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        
                        <!-- <div class="mb-3">
                            <label for="serviceTitle" class="form-label"><strong>Service Title</strong></label>
                            <input type="text" name="title" class="form-control form-control-sm" id="serviceTitle" aria-describedby="serviceTitle" placeholder="Please Enter a Title" value="{{ $service->title }}">
                            <span class="text-danger">@error('title') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="serviceIcon" class="form-label"><strong>Icon</strong></label>
                            <input type="text" name="icon" class="form-control form-control-sm" id="serviceIcon" aria-describedby="serviceIcon" placeholder="Please Enter an Font Awesome icon Class" value="{{ $service->icon }}">
                            <span class="text-danger">@error('icon') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="serviceDesc" class="form-label"><strong>Service Description</strong></label>
                            <textarea name="description" class="form-control" id="serviceDesc" rows="3" placeholder="write a description">{{ $service->description }}</textarea>
                        </div> -->

                        <div class="mb-3">
                            <label for="name" class="form-label"><strong>Service Name</strong></label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" aria-describedby="name" placeholder="Please service name" value="{{ $service->name }}">
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label"><strong>Service Image</strong></label>
                            <input type="file" name="image" class="form-control form-control-sm" id="image" aria-describedby="image" accept="image/*" onchange="loadFile(event)">
                            <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                            <img id="output1" src="{{ asset('img/service/' . $service->image )}}" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                        </div>
                        <div class="mb-3">
                            <label for="ckdescription" class="form-label"><strong>Service Description</strong></label>
                            <textarea name="description" class="form-control" id="ckdescription" rows="3" placeholder="write a description">{{ $service->description }}</textarea>
                            <span class="text-danger">@error('description') {{ $message }} @enderror</span>
                        </div>

                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-between">
                            <a href="{{ url('admin/service') }}" type="submit" class="btn btn-primary btn-sm">Prev</a>
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Update Service</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
    </div>
</div>
@endsection