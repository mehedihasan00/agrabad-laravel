@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Gallery</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-6 mb-md-3">
            <form action="{{ route('store.gallery') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Add a Photo</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="title" class="form-label"><strong>Image Title</strong></label>
                            <input type="text" name="title" class="form-control form-control-sm" id="title" aria-describedby="title" placeholder="Please Enter a Title">
                            <span class="text-danger">@error('title') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label"><strong>Image</strong></label>
                            <input type="file" name="image" class="form-control form-control-sm" id="image" aria-describedby="image" accept="image/*" onchange="loadFile(event)">
                            <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                            <img id="output" style="display:none; max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Add Photo+</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
        
        <div class="col-12 col-lg-6">
            <div class="card mb-4">
                <div class="card-header card-mod-back">
                <h5 class="add-slider">
                    Images List
                </h5>
                </div>
                <div class="card-body data-gallery">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th id="action" class="datatable-sorter">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th id="action" class="datatable-sorter">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach($galleries as $gallery)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $gallery->title }}</td>
                                <td><img src="{{ asset('img/gallery/'.$gallery->image) }}" alt="" style="height: 33px; width: 50px;"></td>
                                <td class="d-flex gap-1">
                                    <a href="{{ url('gallery/edit/'. $gallery->id) }}" type="submit" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                    <a href="{{ url('gallery/delete/'.$gallery->id) }}" type="submit" class="d-inline btn btn-danger btn-sm b-btn" onclick="return confirmDel()"><i class="fas fa-trash"></i></button>
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
@endsection