@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Slider</li>
    </ol>
    <div class="row">
                @php 
                    // $sliders as $slider
                    //echo $slider->id; 
                    //echo "<br>";
                    //echo "<br>";
                @endphp
        <div class="col-12 col-lg-5 mb-md-3">
            <form action="{{ url('slider/insert') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Add Slider+</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <div class="mb-3">
                            <label for="title" class="form-label"><strong>Title</strong></label>
                            <input type="text" name="title" class="form-control form-control-sm" id="title" aria-describedby="title" placeholder="Please Enter a Title">
                            <span class="text-danger">@error('title') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="caption" class="form-label"><strong>Caption</strong></label>
                            <input type="text" name="caption" class="form-control form-control-sm" id="caption" aria-describedby="caption" placeholder="Please Enter Some Text">
                            <span class="text-danger">@error('caption') {{ $message }} @enderror</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="linkTitle" class="form-label"><strong>Link Title</strong></label>
                                    <input type="text" name="link_title" class="form-control form-control-sm" id="linkTitle" aria-describedby="linkTitle" placeholder="Please Enter link title for button">
                                    <span class="text-danger">@error('link_title') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="linkUrl" class="form-label"><strong>Url Link</strong></label>
                                    <input type="url" name="link_url" class="form-control form-control-sm" id="linkUrl" aria-describedby="linkUrl" placeholder="Please Enter a Url for button">
                                    <span class="text-danger">@error('link_url') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label"><strong>Status</strong></label>
                                    <select name="status" class="form-select form-select-sm" aria-label="Default select status" id="status">
                                        <option value="1">On</option>
                                        <option value="0">off</option>
                                    </select>
                                    <span class="text-danger">@error('status') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label"><strong>Image</strong></label>
                                    <input type="file" name="image" class="form-control form-control-sm" id="image" aria-describedby="image" accept="image/*" onchange="loadFile(event)">
                                    <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                                    <img id="output1" style="display:none; max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                                </div>  
                            </div>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Add Slider+</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
        <div class="col-12 col-lg-7">
            <div class="slider-list">
                <div class="card mb-4">
                    <div class="card-header card-mod-msg">
                        <h5 class="add-slider">All Customer Messages</h4>
                    </div>
                    <div class="card-body data-message">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Caption</th>
                                    <th>Link Title</th>
                                    <th>Url Link</th>
                                    <th>Status</th>          
                                    <th id="action" class="datatable-sorter">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>SL</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Caption</th>
                                    <th>Link Title</th>
                                    <th>Url Link</th>
                                    <th>Status</th>             
                                    <th id="action" class="datatable-sorter">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php $count = 1; @endphp
                                @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td><img src="{{ asset('img/slider/'.$slider->image) }}" alt="" style="height: 33px; width: 50px;"></td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->caption }}</td>
                                    <td>{{ $slider->link_title }}</td>
                                    <td>{{ $slider->link_url }}</td>
                                    <td>
                                        @if($slider->status == 0) 
                                            <span>off</span>
                                        @else 
                                            <span>On</span>
                                        @endif
                                    </td>
                                    <td class="d-flex gap-1">
                                        <a href="{{ url('slider/edit/'. $slider->id) }}" type="submit" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                        <a href="{{ url('slider/delete/'.$slider->id) }}" type="submit" class="d-inline btn btn-danger btn-sm b-btn" onclick="return confirmDel()"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection