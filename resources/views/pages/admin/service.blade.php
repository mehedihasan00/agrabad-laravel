@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Service</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-6 mb-md-3">
            <form action="{{ url('service/insert') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Add Services+</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="name" class="form-label"><strong>Service Name</strong></label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" aria-describedby="name" placeholder="Please service name">
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label"><strong>Service Image</strong></label>
                            <input type="file" name="image" class="form-control form-control-sm" id="image" aria-describedby="image" accept="image/*" onchange="loadFile(event)">
                            <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                            <img id="output1" style="display:none; max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                        </div>
                        <div class="mb-3">
                            <label for="ckdescription" class="form-label"><strong>Service Description</strong></label>
                            <textarea name="description" class="form-control" id="ckdescription" rows="3" placeholder="write a description"></textarea>
                            <span class="text-danger">@error('description') {{ $message }} @enderror</span>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Add Services+</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
        <div class="col-12 col-lg-6">
            <div class="slider-list">
                <div class="card mb-4">
                    <div class="card-header card-mod-msg">
                        <h5 class="add-slider">Our Services list</h4>
                    </div>
                    <div class="card-body data-message">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Service Name</th>
                                    <th>Service Image</th>
                                    <th>Service Description</th>       
                                    <th id="action" class="datatable-sorter">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Service Name</th>
                                    <th>Service Image</th>
                                    <th>Service Description</th>       
                                    <th id="action" class="datatable-sorter">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php $count = 1; @endphp
                                @foreach($services as $service)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td><img src="{{ asset('img/service/'.$service->image) }}" alt="" style="height: 33px; width: 50px;"></td>
                                    <!-- <td>{!! $service->description !!}</td> -->
                                    <td>
                                        {!! Str::words($service->description, 10, '...') !!}
                                        <a href="#staticBackdrop{{ $service->id }}" class=""  data-bs-toggle="modal" style="text-decoration: none; color: #000">
                                            <span style="color: #0b5ed7">see more</span>
                                        </a>
                                        <div class="modal fade" id="staticBackdrop{{ $service->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content modal-background">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Description</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {!! $service->description !!}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="d-flex gap-1">
                                        <a href="{{ url('service/edit/'. $service->id) }}" type="submit" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                        <a href="{{ url('service/delete/'.$service->id) }}" type="submit" class="d-inline btn btn-danger btn-sm b-btn" onclick="return confirmDel()"><i class="fas fa-trash"></i></button>
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