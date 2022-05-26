@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Client</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-6 mb-md-3">
            <form action="{{ route('store.client') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Add Client+</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="name" class="form-label"><strong>Client Name</strong></label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" aria-describedby="name" placeholder="Please service name">
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label"><strong>Client Image</strong></label>
                            <input type="file" name="image" class="form-control form-control-sm" id="image" aria-describedby="image" accept="image/*" onchange="loadFile(event)">
                            <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                            <img id="output" style="display:none; max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Add Client+</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
        <div class="col-12 col-lg-6">
            <div class="slider-list">
                <div class="card mb-4">
                    <div class="card-header card-mod-msg">
                        <h5 class="add-slider">Our Client list</h4>
                    </div>
                    <div class="card-body data-message">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Client Name</th>
                                    <th>Client Image</th>
                                    <th id="action" class="datatable-sorter">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>SL</th>
                                    <th>Client Name</th>
                                    <th>Client Image</th>
                                    <th id="action" class="datatable-sorter">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php $count = 1; @endphp
                                @foreach($clients as $client)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td><img src="{{ asset('img/client/'.$client->image) }}" alt="" style="height: 33px; width: 50px;"></td>
                                    <td class="d-flex gap-1">
                                        <a href="{{ url('client/edit/'. $client->id) }}" type="submit" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                        <a href="{{ url('client/delete/'.$client->id) }}" type="submit" class="d-inline btn btn-danger btn-sm b-btn" onclick="return confirmDel()"><i class="fas fa-trash"></i></button>
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