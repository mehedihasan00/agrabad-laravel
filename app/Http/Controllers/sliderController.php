<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\Slider;

class sliderController extends Controller
{
    public function slider() {
        $sliders = Slider::latest()->paginate(5);
        return view('pages.admin.slider', compact('sliders'));
    }
    public function sliderInsert(Request $request) {
        $validatedData = $request->validate([
            'sliderTitle' => 'required|min:4',
            'sliderImage' => 'required|mimes:jpeg,jpg,png,gif',
            'sliderStatus' => 'required',
        ]);

        $sliderImage = $request->file('sliderImage');
        $sliderImage_nameGen = hexdec(uniqid());
        $sliderImage_imgExt = strtolower($sliderImage->getClientOriginalExtension());
        $sliderImage_imgName = $sliderImage_nameGen. '.' . $sliderImage_imgExt;
        $sliderImage_upLocation = 'img/slider/';
        //$sliderImage_lastImg = $sliderImage_upLocation.$sliderImage_imgName;
        $sliderImage->move($sliderImage_upLocation, $sliderImage_imgName);

        Slider::insert([
            'sliderTitle' => $request->sliderTitle,
            'sliderImage' => $sliderImage_imgName,
            'sliderStatus' => $request->sliderStatus,
            'created_at' => Carbon::now()
        ]);
        
        return Redirect()->back()->with('success', 'Slider inserted!');
    }
    public function sliderEdit($id) {
        $slider = Slider::find($id);
        return view('pages.admin.edit_slider', compact('slider'));

    }
    public function sliderUpdate(Request $request, $id) {
        $validatedData = $request->validate([
            'sliderTitle' => 'required|min:4',
        ]);
        
        $slider = Slider::find($id);
        $slider->sliderTitle = $request->sliderTitle;
        $slider->sliderStatus = $request->sliderStatus;

        $image = $request->file('sliderImage');
        if($image){
            $imageName = date('YmdHi').$image->getClientOriginalName();
            $image->move('img/slider/', $imageName);
            if(file_exists('img/slider/'.$slider->sliderImage) AND !empty($slider->sliderImage)){
                unlink('img/slider/'.$slider->sliderImage);
            }
            //$companyLogo = 'frontend/assets/img/upload/' . $companyLogoName;
            $slider['sliderImage'] = $imageName;
        }
        $slider->save();

        return Redirect()->back()->with("success", "Update successfull!");
    }
    public function sliderDelete($id) {
        $slider = Slider::find($id);
        if(file_exists('img/slider/'.$slider->sliderImage) AND !empty($slider->sliderImage)){
            unlink('img/slider/'.$slider->sliderImage);
        }
        $slider->delete();
        return Redirect()->back()->with("success", "Slider Deleted Successfully");
    }
}
