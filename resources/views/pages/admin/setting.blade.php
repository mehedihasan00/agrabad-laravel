@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Company Contents</li>
    </ol>
    <div class="row">
        <div class="col-12 col-md-12">
            <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="">
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-category">WebSite's Overall Information</h5>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="companyName" class="form-label"><strong>Company Name</strong></label>
                                    <input type="text" name="company_name" class="form-control form-control-sm" id="companyName" aria-describedby="companyName" value="">
                                    <span class="text-danger">@error('company_name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="companyAddress" class="form-label"><strong>Company Address</strong></label>
                                    <input type="text" name="company_address" class="form-control form-control-sm" id="companyAddress" aria-describedby="companyAddress" value="">
                                    <span class="text-danger">@error('company_address') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="companyLogo" class="form-label"><strong>Company Logo</strong></label>
                                    <input type="file" name="company_logo" class="form-control form-control-sm" id="companyLogo" aria-describedby="companyLogo" accept="image/*" onchange="loadFile(event)">
                                    <span class="text-danger">@error('companyLogo') {{ $message }} @enderror</span>
                                    <img id="output" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                                    <!-- <img id="output1" src="{{ asset('img/web_contend/logo/') }}" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/> -->
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="aboutImage" class="form-label"><strong>About Image</strong></label>
                                    <input type="file" name="about_image" class="form-control form-control-sm" id="aboutImage" aria-describedby="aboutImage" accept="image/*" onchange="loadFile1(event)">
                                    <span class="text-danger">@error('about_image') {{ $message }} @enderror</span>
                                    <img id="output1" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                                    <!-- <img id="output2" src="{{ asset('img/web_contend/about_image/' ) }}" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/> -->
                                </div>
                            </div>                   
                            <div class="col-12 col-md-6">
                                <strong>Social Links</strong>
                                <div class="mb-1 row link-row">
                                    <label for="facebookLink" class="col-sm-3 col-form-label">Facebook Link</label>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <input type="url" name="facebook_link" class="form-control form-control-sm" id="facebookLink" value="">
                                        <span class="ps-1 text-danger">@error('facebook_link') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="mb-1 row link-row">
                                    <label for="linkedInLink" class="col-sm-3 col-form-label">LinkedIn Link</label>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <input type="url" name="linkedin_link" class="form-control form-control-sm" id="linkedInLink" value="">
                                        <span class="ps-1 text-danger">@error('linkedInLink') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="mb-1 row link-row">
                                    <label for="twitterLink" class="col-sm-3 col-form-label">Twitter Link</label>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <input type="url" name="twitter_link" class="form-control form-control-sm" id="twitterLink" value="">
                                        <span class="ps-1 text-danger">@error('twitter_link') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="mb-1 row link-row">
                                    <label for="instagramLink" class="col-sm-3 col-form-label">Instagram Link</label>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <input type="url" name="instagram_link" class="form-control form-control-sm" id="instagramLink" value="">
                                        <span class="ps-1 text-danger">@error('instagram_link') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="aboutCompany" class="form-label"><strong>About Our Company</strong></label>
                                    <textarea name="about_company" class="form-control" id="aboutCompany" rows="3">  </textarea>
                                </div>
                                <span class="text-danger">@error('about_company') {{ $message }} @enderror</span>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="companyEmail" class="form-label"><strong>Company Email</strong></label>
                                    <input type="email" name="email" class="form-control form-control-sm" id="companyEmail" aria-describedby="companyEmail" value="">
                                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                </div>
                                <div class="mb-3">
                                    <label for="telePhone" class="form-label"><strong>Tele Phone</strong></label>
                                    <input type="tel" name="tele_phone" class="form-control form-control-sm" id="telePhone" aria-describedby="telePhone" value="">
                                    <span class="text-danger">@error('tele_phone') {{ $message }} @enderror</span>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label"><strong>Phone</strong></label>
                                    <input type="tel" name="phone" class="form-control form-control-sm" id="phone" placeholder=""  value="">
                                    <span class="text-danger">@error('phone') {{ $message }} @enderror</span>
                                </div>
                                <div class="mb-3">
                                    <label for="hotline" class="form-label"><strong>Hotline</strong></label>
                                    <input type="tel" name="hotline" class="form-control form-control-sm" id="hotline" placeholder=""  value="">
                                    <span class="text-danger">@error('hotline') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                            <div class="col-12 d-flex justify-content-end">
                                <!-- <input type="submit" value="submit" /> -->
                                <button type="submit" class="btn btn-mod-content-submit btn-sm">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>      
        </div>
    </div>
</div>
@endsection