<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagementController extends Controller
{
    
    public function index()
    {
        $management = Management::latest()->get();
        return view('pages.admin.management', compact('management'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'designation' => 'required|max:100',
            'facebook' => 'max:100',
            'twitter' => 'max:100',
            'instagram' => 'max:100',
            'image' => 'required|Image|mimes:jpeg,jpg,png,gif',
        ]);
        
        $image = $request->file('image');
        $nameGen = hexdec(uniqid());
        $imgExt = strtolower($image->getClientOriginalExtension());
        $imgName = $nameGen. '.' . $imgExt;
        $upLocation = 'img/management/';
        $image->move($upLocation, $imgName);

        try {
            DB::beginTransaction();
            $management = new Management;
            $management->name = $request->name;
            $management->designation = $request->designation;
            $management->image = $imgName;
            $management->facebook = $request->facebook;
            $management->twitter = $request->twitter;
            $management->instagram = $request->instagram;
            $management->created_at = Carbon::now();
            $management->save();
            DB::commit();
            return redirect()->back()->with('success', 'photo Inserted!');
        } catch (\Exception $e) {
            DB::rollback();           
		    return ["error" => $e->getMessage()];
            // return Redirect()->back()->with('Failed', 'Photo insertion failed!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $managementData = Management::findOrFail($id);
        $management = Management::latest()->get();
        return view('pages.admin.management', compact('management', 'managementData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'designation' => 'required|max:100',
            'facebook' => 'max:100',
            'twitter' => 'max:100',
            'instagram' => 'max:100',
            'image' => 'Image|mimes:jpeg,jpg,png,gif',
        ]);

        try {
            DB::beginTransaction();
            $management = Management::findOrFail($id);
            $management->name = $request->name;
            $management->designation = $request->designation;
            $image = $request->file('image');
            if($image) {
                $imageName = date('YmdHi').$image->getClientOriginalName();
                $image->move('img/management/', $imageName);
                if(file_exists('img/management/'. $management->image) && !empty($management->image)) {
                    unlink('img/management/' . $management->image);
                }
                $management['image'] = $imageName;
            }
            $management->facebook = $request->facebook;
            $management->twitter = $request->twitter;
            $management->instagram = $request->instagram;
            $management->save();
            DB::commit();
            return Redirect()->route('management.index')->with("success", "Update Successfull");
        } catch(\Exception $e) {
            DB::rollback();         
		    return ["error" => $e->getMessage()];
            // return redirect()->back()->with('error', 'Team insert failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $management = Management::find($id);
        if(file_exists('img/management/'.$management->image) AND !empty($management->image)){
            unlink('img/management/'.$management->image);
        }
        $management->delete();
        return Redirect()->back()->with("success", "management Deleted Successfully");
    }
}
