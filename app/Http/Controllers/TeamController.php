<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Carbon;
use DB;

class TeamController extends Controller
{
    public function team() {
        $teams = Team::latest()->paginate(5);
        // $teams = Team::orderBy('id', 'desc')->limit('5')->get();
        return view('pages.admin.team', compact('teams'));
    }
    public function teamInsert(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'designation' => 'required|min:4',
            'fb_link' => 'required',
            'twitter_link' => 'required',
            'instagram_link' => 'required',
            'image' => 'required|Image|mimes:jpeg,jpg,png,gif',
        ]);

        $image = $request->file('image');
        $nameGen = hexdec(uniqid());
        $imgExt = strtolower($image->getClientOriginalExtension());
        $imgName = $nameGen. '.' . $imgExt;
        $upLocation = 'img/team/';
        $image->move($upLocation, $imgName);

        try {
            DB::beginTransaction();
            $team = new Team;
            $team->name = $request->name;
            $team->designation = $request->designation;
            $team->fb_link = $request->fb_link;
            $team->twitter_link = $request->twitter_link;
            $team->instagram_link = $request->instagram_link;
            $team->image = $imgName;
            $team->created_at = Carbon::now();
            $team->save();
            DB::commit();
            return redirect()->back()->with('success', 'Team inserted!');
        } catch (\Exception $e) {
            DB::rollback();           
		    return ["error" => $e->getMessage()];
            // return redirect()->back()->with('error', 'Team insert failed!');
        }
    }
    public function teamEdit($id) {
        $team = Team::find($id);
        return view('pages.admin.edit_team', compact("team"));
    }
    public function teamUpdate(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'designation' => 'required|min:4',
            'fb_link' => 'required',
            'twitter_link' => 'required',
            'instagram_link' => 'required',
        ]);

        try {
            // DB::beginTransaction();
            // $team = Team::find($id);
            // $team->name = $request->name;
            // $team->designation = $request->designation;
            // $team->fb_link = $request->fb_link;
            // $team->twitter_link = $request->twitter_link;
            // $team->instagram_link = $request->instagram_link;

            // $image = $request->file('image');
            // if($image) {
            //     $imageName = date('YmdHi').$image->getClientOriginalName();
            //     $image->move('img/team', $imageName);
            //     if(file_exists('img/team/'. $team->image) && !empty($team->image)) {
            //         unlink('img/team/' . $team->image);
            //     }
            //     $team['image'] = $imageName;
            // }
            // $team->save();
            // DB::commit();
            // return redirect()->back()->with('success', 'Team Updated!');
            return $request;
        } catch (\Exception $e) {
            DB::rollback();           
		    return ["error" => $e->getMessage()];
            // return redirect()->back()->with('error', 'Team insert failed!');
        }
    }
    public function teamDelete($id) {
        $team = Team::find($id);
        if(file_exists('img/team/'.$team->image) AND !empty($team->image)) {
            unlink('img/team/'.$team->image);
        }
        $team->delete();
        return Redirect()->back()->with("success", "Team Deleted Successfully");
    }
}
