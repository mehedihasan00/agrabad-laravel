<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\Request;

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
        $service = Service::latest()->get();
        return view('pages.website.service', compact('service'));
    }
    public function serviceDetail($id) {
        $serviceDetail = Service::findOrFail($id);
        return view('pages.website.service_detail', compact('serviceDetail'));
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
}
