<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Management;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function contents() {
        $sliders = Slider::latest()->get();
        $service = Service::latest()->limit(6)->get();
        $videos = Video::latest()->get();
        $galleries = Gallery::latest()->take(8)->get();
        return view('pages.website.home', compact('sliders', 'videos', 'galleries', 'service'));
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
        $management = Management::latest()->get();
        return view('pages.website.team', compact('management'));
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
