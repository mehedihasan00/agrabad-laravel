@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/client') }}">Client</a></li>
        <li class="breadcrumb-item active">Update Client</li>
    </ol>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 mb-md-3">
            <form action="{{ route('update.client', $client->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Add Client+</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="name" class="form-label"><strong>Client Name</strong></label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" aria-describedby="name" placeholder="Please service name" value="{{ $client->name }}">
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label"><strong>Client Image</strong></label>
                            <input type="file" name="image" class="form-control form-control-sm" id="image" aria-describedby="image" accept="image/*" onchange="loadFile(event)">
                            <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                            <img id="output" src="{{ asset('img/client/' . $client->image) }}" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Update Client</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
    </div>
</div>
@endsection