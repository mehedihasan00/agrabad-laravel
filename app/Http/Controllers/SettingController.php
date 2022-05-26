<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\Setting;
use DB;

class SettingController extends Controller
{
    public function setting() {
        return view('pages.admin.setting');
    }
    public function settingUpdate(Request $request) {
        $validatedData = $request->validate([
            'company_name' => 'min:4',
            'company_address' => 'min:6',
            'facebook_link' => 'required',
            'linkedin_link' => 'required',
            'twitter_link' => 'required',
            'instagram_link' => 'required',
            'about_company' => 'min:6',
            'email' => 'required',
            'tele_phone' => 'required',
            'phone' => 'required',
            'hotline' => 'required',
            'company_logo' => 'mimes:jpeg,jpg,png,gif',
            'about_image' => 'mimes:jpeg,jpg,png,gif',
        ]);
        try {
            DB::beginTransaction();
            $setting = new Setting();

            $companyLogo = $request->file('company_logo');
            if($companyLogo) {
                $companyLogoName = date('YmdHi')."_".$companyLogo->getClientOriginalName();
                $companyLogo->move('img/logo/', $companyLogoName);
                if(file_exists('img/logo/'.$setting->company_logo) AND !empty($setting->company_logo)) {
                    unlink('img/logo/'.$setting->company_logo);
                }
                $setting['company_logo'] = $companyLogoName;
            }

            $aboutImage = $request->file('about_image');
            if($aboutImage) {
                $aboutImageName = date('YmdHi').$aboutImage->getClientOriginalName();
                $aboutImage->move('img/about/', $aboutImageName);
                if(file_exists('img/about/'.$setting->about_image) AND !empty($setting->about_image)) {
                    unlink('img/about/'.$setting->about_image);
                }
                $setting['about_image'] = $aboutImageName;
            }

            $setting->company_name = $request->company_name;
            $setting->company_address = $request->company_address;
            $setting->facebook_link = $request->facebook_link;
            $setting->linkedin_link = $request->linkedin_link;
            $setting->twitter_link = $request->twitter_link;
            $setting->instagram_link = $request->instagram_link;
            $setting->about_company = $request->about_company;
            $setting->email = $request->email;
            $setting->tele_phone = $request->tele_phone;
            $setting->phone = $request->phone;
            $setting->hotline = $request->hotline;

            $setting->save();
            DB::commit();
            return redirect()->back()->with('success', 'Setting Inserted!');
        } catch (\Exception $e) {
            DB::rollback();           
		    return ["error" => $e->getMessage()];
            // return redirect()->back()->with('error', 'Slider update failed!');
        }
        // $CompanyInfo = CompanyInfo::FindOrFail($id);
        // $CompanyInfo->companyAddress = $request->companyAddress;
        // $CompanyInfo->facebookLink = $request->facebookLink;
        // $CompanyInfo->linkedInLink = $request->linkedInLink;
        // $CompanyInfo->twitterLink = $request->twitterLink;
        // $CompanyInfo->instagramLink = $request->instagramLink;
        // $CompanyInfo->companyName = $request->companyName;
        // $CompanyInfo->chairmanName = $request->chairmanName;
        // $CompanyInfo->chairmanMessage = $request->chairmanMessage;
        // $CompanyInfo->aboutCompany = $request->aboutCompany;
        // $CompanyInfo->updated_at = $request->updated_at;
        // CompanyLogo
        // $companyLogo = $request->file('companyLogo');
        // if($companyLogo){
        //     $companyLogoName = date('YmdHi').$companyLogo->getClientOriginalName();
        //     $companyLogo->move('img/web_contend/logo/', $companyLogoName);
        //     if(file_exists('img/web_contend/logo/'.$CompanyInfo->companyLogo) AND !empty($CompanyInfo->companyLogo)){
        //         unlink('img/web_contend/logo/'.$CompanyInfo->companyLogo);
        //     }
        //     //$companyLogo = 'frontend/assets/img/upload/' . $companyLogoName;
        //     $CompanyInfo['companyLogo'] = $companyLogoName;
        // }

        // aboutImage
        // $aboutImage = $request->file('aboutImage');
        // if($aboutImage){
        //     $aboutImageName = date('YmdHi').$aboutImage->getClientOriginalName();
        //     $aboutImage->move('img/web_contend/about_image/', $aboutImageName);
        //     if(file_exists('img/web_contend/about_image/'.$CompanyInfo->aboutImage) AND !empty($CompanyInfo->aboutImage)){
        //         unlink('img/web_contend/about_image/'.$CompanyInfo->aboutImage);
        //     }
        //     $CompanyInfo['aboutImage'] = $aboutImageName;
        // }

        //chairmanImage
        // $chairmanImage = $request->file('chairmanImage');
        // if($chairmanImage){
        //     $chairmanImageName = date('YmdHi').$chairmanImage->getClientOriginalName();
        //     $chairmanImage->move('img/web_contend/chairman_image/', $chairmanImageName);
        //     if(file_exists('img/web_contend/chairman_image/'.$CompanyInfo->chairmanImage) AND !empty($CompanyInfo->chairmanImage)){
        //         unlink('img/web_contend/chairman_image/'.$CompanyInfo->chairmanImage);
        //     }
        //     $CompanyInfo['chairmanImage'] = $chairmanImageName;
        // }


        // $CompanyInfo->save();
        // return Redirect()->back()->with("success", "Update successfull");
        return $request;
   }
}
