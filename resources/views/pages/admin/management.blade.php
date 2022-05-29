@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Management</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-6 mb-md-3">
            <form action="{{ (@$managementData) ? route('management.update', $managementData->id) : route('management.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-header card-mod-back">
                        @if(@isset($managementData))
                            <h5 class="add-slider">Update Management</h4>
                        @else
                            <h5 class="add-slider">Add Management</h4>
                        @endif
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        
                        <div class="mb-3">
                            <label for="title" class="form-label"><strong>Name</strong></label>
                            <input type="text" name="name" value="{{ @$managementData->name }}" class="form-control form-control-sm" id="name" placeholder="Please Enter name">
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label"><strong>Designation</strong></label>
                            <input type="text" name="designation" value="{{ @$managementData->designation }}" class="form-control form-control-sm" id="designation" placeholder="Please Enter Designation">
                            <span class="text-danger">@error('designation') {{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label"><strong>Facebook</strong></label>
                            <input type="text" name="facebook" value="{{ @$managementData->facebook }}" class="form-control form-control-sm" id="facebook" placeholder="Please Enter Facerbook Link">
                            <span class="text-danger">@error('facebook') {{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label"><strong>Twitter</strong></label>
                            <input type="text" name="twitter" value="{{ @$managementData->twitter }}" class="form-control form-control-sm" id="twitter" placeholder="Please Enter Twitter Link">
                            <span class="text-danger">@error('twitter') {{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label"><strong>Instagram</strong></label>
                            <input type="text" name="instagram" value="{{ @$managementData->instagram }}" class="form-control form-control-sm" id="instagram" placeholder="Please Enter Instagram Link">
                            <span class="text-danger">@error('instagram') {{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label"><strong>Image</strong></label>
                            <input type="file" name="image" class="form-control form-control-sm" id="image" aria-describedby="image" accept="image/*" onchange="loadFile(event)">
                            <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                            <img src="{{(@$managementData) ? asset('img/management/'.$managementData->image) : asset('img/no.png') }}" id="output" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">{{(@$managementData)?'Update Mangement':'Add Mangement+'}}</button>
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
                                <th>Name</th>
                                <th>Image</th>
                                <th>Designation</th>
                                <th id="action" class="datatable-sorter">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach($management as $item)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ asset('img/management/'.$item->image) }}" alt="" style="height: 30px; width: 30px;"></td>
                                <td>{{ $item->designation }}</td>
                                <td class="d-flex gap-1">
                                    <a href="{{ route('management.edit', $item->id) }}" type="submit" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                    <a href="{{ route('management.delete', $item->id) }}" type="submit" class="d-inline btn btn-danger btn-sm b-btn" onclick="return confirmDel()"><i class="fas fa-trash"></i></button>
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