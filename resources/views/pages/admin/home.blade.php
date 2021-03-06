@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <!-- <h1 class="mt-4">Dashboard</h1> -->
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item active">Dashboard /</li>
        <!-- <span id='ct7'></span> -->
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Admin</h5>
                    <p class="card-text">{{ count($users) }}</p>
                    <!-- <a href="#" class="card-link text-white">Card link</a>
                    <a href="#" class="card-link text-white">Another link</a> -->
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{  url('admin/users') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Message</h5>
                    <p class="card-text">{{ count($message) }}</p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{  url('admin/contactus') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Service</h5>
                    <p class="card-text">{{ count($service) }}</p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{  url('admin/service') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Slider</h5>
                    <p class="card-text">{{ count($slider) }}</p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{  url('admin/slider') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection