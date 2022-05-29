@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Team</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-6 mb-md-3">
            <form action="{{ route('store.team') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Add Team Member</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="name" class="form-label"><strong>Name</strong></label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" aria-describedby="name" placeholder="Please Enter a Name">
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="designation" class="form-label"><strong>Designation</strong></label>
                            <input type="text" name="designation" class="form-control form-control-sm" id="designation" aria-describedby="designation" placeholder="Enter Full Designation">
                            <span class="text-danger">@error('designation') {{ $message }} @enderror</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="facebook" class="form-label"><strong>Facebook Link</strong></label>
                                    <input type="url" name="fb_link" class="form-control form-control-sm" id="facebook" aria-describedby="facebook" placeholder="https://facebook.com/profile">
                                    <span class="text-danger">@error('facebook') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="twitter" class="form-label"><strong>Twitter Link</strong></label>
                                    <input type="url" name="twitter_link" class="form-control form-control-sm" id="twitter" aria-describedby="twitter" placeholder="https://twitter.com/profile">
                                    <span class="text-danger">@error('twitter') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="instagram" class="form-label"><strong>Instagram Link</strong></label>
                                    <input type="url" name="instagram_link" class="form-control form-control-sm" id="instagram" aria-describedby="instagram" placeholder="https://instagram.com/profile">
                                    <span class="text-danger">@error('instagram') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label"><strong>Profile Photo</strong></label>
                                    <input type="file" name="image" class="form-control form-control-sm" id="image" aria-describedby="image" accept="image/*" onchange="loadFile(event)">
                                    <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                                    <img id="output" style="display:none; max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                                </div>
                            </div>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Add Member+</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
        <div class="col-12 col-lg-6 mb-md-3">
            <div class="slider-list">
            <div class="card mb-4">
                    <div class="card-header card-mod-msg">
                        <h5 class="add-slider">All Person's List</h4>
                    </div>
                    <div class="card-body data-message">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Person's Name</th>
                                    <th>Person's Image</th>
                                    <th>Person's Description</th>       
                                    <th id="action" class="datatable-sorter">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Person's Name</th>
                                    <th>Person's Image</th>
                                    <th>Person's Description</th>       
                                    <th id="action" class="datatable-sorter">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php $count = 1; @endphp
                                @foreach($teams as $team)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $team->name }}</td>
                                    <td><img src="{{ asset('img/team/'.$team->image) }}" alt="" style="height: 33px; width: 50px;"></td>
                                    <td>{{ $team->designation }}</td>
                                    <td class="d-flex gap-1">
                                        <a href="{{ url('team/edit/'. $team->id) }}" type="submit" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                        <a href="{{ url('team/delete/'.$team->id) }}" type="submit" class="d-inline btn btn-danger btn-sm b-btn" onclick="return confirmDel()"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Team Members</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <table style="font-size: 0.8rem">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $count = 1; @endphp
                                @foreach($teams as $team)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $team->name }}</td>
                                    <td><img src="{{ asset('img/team/'.$team->image) }}" alt="" style="height: 33px; width: 50px;"></td>
                                    <td>{{ $team->designation }}</td>
                                    <td class="d-flex gap-1">
                                        <a href="{{ url('team/edit/'. $team->id) }}" type="submit" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                        <a href="{{ url('team/delete/'.$team->id) }}" type="submit" class="d-inline btn btn-danger btn-sm b-btn" onclick="return confirmDel()"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>    
                        </table>
                        <div class="d-flex">
                            {!! $teams->links() !!}
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection