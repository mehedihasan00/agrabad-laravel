@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ asset('admin/slider') }}">Slider</a></li>
        <li class="breadcrumb-item active">Update Slider</li>
    </ol>
    <div class="row">
                @php 
                    // $sliders as $slider
                    //echo $slider->id; 
                    //echo "<br>";
                    //echo "<br>";
                @endphp
        <div class="col-12 col-lg-6 offset-md-3 mb-md-3">
            <form action="{{ url('slider/update/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Update Slider</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="title" class="form-label"><strong>Title</strong></label>
                            <input type="text" name="title" class="form-control form-control-sm" id="title" aria-describedby="title" placeholder="Please Enter a Title" value="{{ $slider->title }}">
                            <span class="text-danger">@error('title') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="caption" class="form-label"><strong>Caption</strong></label>
                            <input type="text" name="caption" class="form-control form-control-sm" id="caption" aria-describedby="caption" placeholder="Please Enter Some Text" value="{{ $slider->caption }}">
                            <span class="text-danger">@error('caption') {{ $message }} @enderror</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="linkTitle" class="form-label"><strong>Link Title</strong></label>
                                    <input type="text" name="link_title" class="form-control form-control-sm" id="linkTitle" aria-describedby="linkTitle" placeholder="Please Enter link title for button" value="{{ $slider->link_title }}">
                                    <span class="text-danger">@error('link_title') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="linkUrl" class="form-label"><strong>Url Link</strong></label>
                                    <input type="url" name="link_url" class="form-control form-control-sm" id="linkUrl" aria-describedby="linkUrl" placeholder="Please Enter a Url for button" value="{{ $slider->link_url }}">
                                    <span class="text-danger">@error('link_url') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label"><strong>Status</strong></label>
                                    <select name="status" class="form-select form-select-sm" aria-label="Default select status" id="status">
                                        @if($slider->status == 1)
                                        <option value = "1">On</option>
                                        <option value="0">off</option>
                                        @else
                                        <option value = "0">Off</option>
                                        <option value="1">On</option>
                                        @endif
                                    </select>
                                    <span class="text-danger">@error('status') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label"><strong>Image</strong></label>
                                    <input type="file" name="image" class="form-control form-control-sm" id="image" aria-describedby="image" accept="image/*" onchange="loadFile(event)">
                                    <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                                    <img id="output" src="{{ asset('img/slider/'. $slider->image) }}" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                                </div>
                            </div>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-between">
                            <a href="{{ url('admin/slider') }}" type="button" class="btn btn-primary btn-sm">prev</a>
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Update</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
    </div>
</div>
@endsection