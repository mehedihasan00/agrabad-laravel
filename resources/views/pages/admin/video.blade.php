@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Video</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-6 mb-md-3">
            <form action="{{ route('store.video') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Youtube  link</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="videoLink" class="form-label"><strong>Drop an youtube embed Link</strong></label>
                            <input type="url" name="link" class="form-control form-control-sm" id="videoLink" aria-describedby="videoLink" placeholder="Please Enter an youtube link">
                            <span class="text-danger">@error('link') {{ $message }} @enderror</span>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Add Videos</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card mb-4">
                <div class="card-header card-mod-back">
                <h5 class="add-slider">
                    Videos List
                </h5>
                </div>
                <div class="card-body data-videos">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Video</th>
                                <th id="action" class="datatable-sorter">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Video</th>
                                <th id="action" class="datatable-sorter">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php $count = 1; @endphp 
                            @foreach($videos as $video)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>
                                    <iframe width="160" height="100" src="{{ $video->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </td>
                                <td class="d-flex gap-1">
                                    <a href="{{ route('edit.video', $video->id) }}" type="submit" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                    <a href="{{ route('delete.video', $video->id) }}" type="submit" class="d-inline btn btn-danger btn-sm b-btn" onclick="return confirmDel()"><i class="fas fa-trash"></i></button>
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