<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Video;

class WebController extends Controller
{
    public function contents() {
        $sliders = Slider::latest()->get();
        $videos = Video::latest()->get();
        $galleries = Gallery::latest()->take(8)->get();
        return view('pages.website.home', compact('sliders', 'videos', 'galleries'));
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
        $videos = Video::latest()->get();
        return view('pages.website.video_gallery', compact('videos'));
    }
    public function contact() {
        return view('pages.website.contact_us');
    }
}
