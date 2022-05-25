<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Video;
use DB;


class VideoController extends Controller
{
    public function video () {
        $videos = Video::latest()->get();
        return view('pages.admin.video', compact('videos'));
    }
    public function videoInsert(Request $request) {
        $validatedData = $request->validate([
            'link' => 'required'
        ]);
        try {
            DB::beginTransaction();
            $video = new Video;
            $video->link = $request->link;
            $video->created_at = Carbon::now();
            $video->save();
            DB::commit();
            return redirect()->back()->with('success', 'Video Link inserted!');
        } catch (\Exception $e) {
            DB::rollback();           
		    // return ["error" => $e->getMessage()];
            return redirect()->back()->with('failed', 'Video insert failded!');
        }
    }
    public function videoEdit($id) {
        $video = Video::find($id);
        return view('pages.admin.edit_video', compact('video'));
    }
    public function videoUpdate(Request $request, $id) {
        $validatedData = $request->validate([
            'link' => 'required'
        ]);
        try {
            DB::beginTransaction();
            $video = Video::find($id);
            $video->link = $request->link;
            $video->save();
            DB::commit();
            return redirect()->back()->with('success', 'Video Updated!');
        } catch (\Exception $e) {
            DB::rollback();           
		    // return ["error" => $e->getMessage()];
            return redirect()->back()->with('error', 'Video update failed!');
        }
    }
    public function videoDelete($id) {
        $video = Video::find($id);
        $video->delete();
        return Redirect()->back()->with("success", "Video Deleted Successfully");
    }
}
