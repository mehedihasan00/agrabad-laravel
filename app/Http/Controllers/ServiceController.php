<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Service;
use DB;

class ServiceController extends Controller
{
    public function service() {
        $services = Service::latest()->paginate(5);
        return view('pages.admin.service', compact('services'));
    }
    public function serviceInsert(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'description' => 'required|min:12',
        ]);

        $image = $request->file('image');
        $nameGen = hexdec(uniqid());
        $imgExt = strtolower($image->getClientOriginalExtension());
        $imgName = $nameGen. '.' . $imgExt;
        $upLocation = 'img/service/';
        $image->move($upLocation, $imgName);

        try {
            DB::beginTransaction();
            $service = new Service;
            $service->name = $request->name;
            $service->image = $imgName;
            $service->description = $request->description;
            $service->created_at = Carbon::now();
            $service->save();
            DB::commit();
            return redirect()->back()->with('success', 'Service inserted!');
        } catch (\Exception $e) {
            DB::rollback();           
		    // return ["error" => $e->getMessage()];
            return redirect()->back()->with('error', 'Service insert failed!');
        }
    }
    public function serviceEdit(Request $request, $id) {
        $service = Service::find($id);
        return view('pages.admin.edit_service', compact('service'));
    }
    public function serviceUpdate(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'description' => 'required|min:10'
        ]);

        try {
            DB::beginTransaction();
            $service = Service::find($id);
            $service->name = $request->name;
            $service->description = $request->description;

            $image = $request->file('image');
            if($image){
                $imageName = date('YmdHi').$image->getClientOriginalName();
                $image->move('img/service/', $imageName);
                if(file_exists('img/service/'.$service->image) AND !empty($service->image)){
                    unlink('img/service/'.$service->image);
                }
                $service['image'] = $imageName;
            }
            $service->save();
            DB::commit();
            return redirect()->back()->with('success', 'Service Updated!');
        } catch (\Exception $e) {
            DB::rollback();           
		    // return ["error" => $e->getMessage()];
            return redirect()->back()->with('error', 'Service update failed!');
        }
    }
    public function serviceDelete($id) {
        $service = service::find($id);
        if(file_exists('img/service/'.$service->image) AND !empty($service->image)){
            unlink('img/service/'.$service->image);
        }
        $service->delete();
        return Redirect()->back()->with("success", "Service Deleted Successfully");
    }
}