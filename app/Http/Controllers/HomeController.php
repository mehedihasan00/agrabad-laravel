<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Slider;
use App\Models\Service;
use DB;
class HomeController extends Controller
{
    public function dashboard() {
        $users = DB::table('users')->get();
        $message = Message::latest()->get();
        $slider = Slider::latest()->get();
        $service = Service::latest()->get();
        return view('pages.admin.home', compact('users', 'message', 'slider', 'service'));
    }
}
