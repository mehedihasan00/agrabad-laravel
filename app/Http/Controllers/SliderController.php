<?php
namespace App\Http\Controllers;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\Slider;
use DB;
use Image;


class sliderController extends Controller
{
    public function slider() {
        $sliders = Slider::latest()->paginate(5);
        return view('pages.admin.slider', compact('sliders'));
    }
    public function sliderInsert(Request $request) {
        $validatedData = $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'title' => 'required|min:8',
            'caption' => 'required|min:8',
            'link_title' => 'required',
            'link_url' => 'required',
            'status' => 'required',
        ]);

        $image = $request->file('image');
        $nameGen = hexdec(uniqid());
        $imgExt = strtolower($image->getClientOriginalExtension());
        $imgName = $nameGen. '.' . $imgExt;
        $upLocation = 'img/slider/';
        // $image->move($upLocation, $imgName);
        Image::make($image)->resize(1920,1024)->save($upLocation . $imgName);


        try {
            DB::beginTransaction();
            $slider = new Slider;
            $slider->image = $imgName;
            $slider->title = $request->title;
            $slider->caption = $request->caption;
            $slider->link_title = $request->link_title;
            $slider->link_url = $request->link_url;
            $slider->status = $request->status;
            $slider->created_at = Carbon::now();
            $slider->save();
            DB::commit();
            return redirect()->back()->with('success', 'Slider inserted!');
        } catch (\Exception $e) {
            DB::rollback();           
		    // return ["error" => $e->getMessage()];
            return redirect()->back()->with('failed', 'Slider insert failded!');
        }
    }
    public function sliderEdit($id) {
        $slider = Slider::find($id);
        return view('pages.admin.edit_slider', compact('slider'));

    }
    public function sliderUpdate(Request $request, $id) {
        $validatedData = $request->validate([
            'title' => 'required|min:8',
            'caption' => 'required|min:8',
            'link_title' => 'required',
            'link_url' => 'required'
        ]);
        try {
            DB::beginTransaction();
            $slider = Slider::find($id);
            $slider->title = $request->title;
            $slider->caption = $request->caption;
            $slider->link_title = $request->link_title;
            $slider->link_url = $request->link_url;
            $slider->status = $request->status;

            $image = $request->file('image');
            if($image) {
                $nameGen = hexdec(uniqid());
                $imgExt = strtolower($image->getClientOriginalExtension());
                $imgName = $nameGen. '.' . $imgExt;
                $upLocation = 'img/slider/';
                Image::make($image)->resize(1920,1024)->save($upLocation . $imgName);
                if(file_exists('img/slider/'.$slider->image) AND !empty($slider->image)){
                    unlink('img/slider/'.$slider->image);
                }
                $slider['image'] = $imgName;
            }
            $slider->save();
            DB::commit();
            return redirect()->back()->with('success', 'Slider Updated!');
        } catch (\Exception $e) {
            DB::rollback();           
		    // return ["error" => $e->getMessage()];
            return redirect()->back()->with('error', 'Slider update failed!');
        }
    }
    public function sliderDelete($id) {
        $slider = Slider::find($id);
        if(file_exists('img/slider/'.$slider->image) AND !empty($slider->image)){
            unlink('img/slider/'.$slider->image);
        }
        $slider->delete();
        return Redirect()->back()->with("success", "Slider Deleted Successfully");
    }
}
