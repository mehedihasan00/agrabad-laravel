@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Message</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="slider-list">
                <div class="card mb-4">
                    <div class="card-header card-mod-msg">
                        <h5 class="add-slider">Our Message's list</h4>
                    </div>
                    <div class="card-body data-message">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>           
                                    <th id="action" class="datatable-sorter">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>             
                                    <th id="action" class="datatable-sorter">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php $count = 1; @endphp
                                @foreach($messages as $message)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>
                                        @if(countwords($message->description) > 10)
                                        {!! Str::words($message->description, 10, '...') !!}
                                        @else
                                        {{ $message->description }}
                                        @endif
                                    </td>
                                    <td>{{ $message->created_at->diffForHumans() }}</td>                                       
                                    <td class="d-flex gap-1">
                                        @if(countwords($message->description) > 10)
                                        <a href="#staticBackdrop{{ $message->id }}" class="d-inline btn btn-primary btn-sm b-btn"  data-bs-toggle="modal" style="text-decoration: none;">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <div class="modal fade" id="staticBackdrop{{ $message->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content modal-background">
                                                    <div class="modal-header message-modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Message</h5>
                                                        <p class="mb-0 ms-auto mt-1"><strong class="text-white">Date: </strong>{{ $message->created_at }}</p>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {!! $message->description !!}
                                                    </div>
                                                    <div class="modal-footer message-modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <a href="{{ url('message/delete/'.$message->id) }}" type="submit" class="d-inline btn btn-danger btn-sm b-btn" onclick="return confirmDel()"><i class="fas fa-trash"></i></button>
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