<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Client;
use DB;
use Image;

class ClientController extends Controller
{
    public function client() {
        $clients = Client::latest()->get();
        return view('pages.admin.client', compact('clients'));
    }
    public function clientInsert(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        $image = $request->file('image');
        $nameGen = hexdec(uniqid());
        $imgExt = strtolower($image->getClientOriginalExtension());
        $imgName = $nameGen. '.' . $imgExt;
        $upLocation = 'img/client/';
        // $image->move($upLocation, $imgName);
        Image::make($image)->resize(400,150)->save($upLocation . $imgName);

        try {
            DB::beginTransaction();
            $client = new Client;
            $client->image = $imgName;
            $client->name = $request->name;
            $client->created_at = Carbon::now();
            $client->save();
            DB::commit();
            return redirect()->back()->with('success', 'Client inserted!');
        } catch (\Exception $e) {
            DB::rollback();           
		    return ["error" => $e->getMessage()];
            // return redirect()->back()->with('failed', 'Slider insert failded!');
        }
    }
    public function clientEdit($id) {
        $client = Client::find($id);
        return view('pages.admin.edit_client', compact('client'));

    }
    public function clientUpdate(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'image' => 'image|mimes:jpeg,jpg,png,gif',
        ]);
        try {
            DB::beginTransaction();
            $client = Client::find($id);
            $client->title = $request->title;
            $client->caption = $request->caption;
            $client->link_title = $request->link_title;
            $client->link_url = $request->link_url;
            $client->status = $request->status;

            $image = $request->file('image');
            if($image) {
                // $imageName = date('YmdHi').$image->getClientOriginalName();
                // $image->move('img/client/', $imageName);
                $nameGen = hexdec(uniqid());
                $imgExt = strtolower($image->getClientOriginalExtension());
                $imgName = $nameGen. '.' . $imgExt;
                $upLocation = 'img/client/';
                Image::make($image)->resize(1920,1024)->save($upLocation . $imgName);
                if(file_exists('img/client/'.$client->image) AND !empty($client->image)){
                    unlink('img/client/'.$client->image);
                }
                $client['image'] = $imgName;
            }
            $client->save();
            DB::commit();
            return redirect()->back()->with('success', 'Client Updated!');
        } catch (\Exception $e) {
            DB::rollback();           
		    // return ["error" => $e->getMessage()];
            // return redirect()->back()->with('error', 'Slider update failed!');
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
