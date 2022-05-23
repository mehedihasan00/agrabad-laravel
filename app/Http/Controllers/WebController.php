<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function contents() {
        return view('pages.website.home');
    }
    public function aboutUs() {
        return view('pages.website.about_us');
    }
    public function service() {
        return view('pages.website.service');
    }
    public function serviceDetail() {
        return view('pages.website.service_detail');
    }
    public function team() {
        return view('pages.website.team');
    }
    public function gallery() {
        return view('pages.website.gallery');
    }
    public function videoGallery() {
        return view('pages.website.video_gallery');
    }
}
