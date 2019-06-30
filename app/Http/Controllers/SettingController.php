<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Auth;

class SettingController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
       // $data = [];
        //$data['aalloo'] = 'aalloo';
        //View::share('data', $data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $setting = Setting::first();
        return view('admin.setting.setting', compact('user', 'setting'));
    }

    public function updateSetting(Request $request, Setting $setting)
    {
        $updateSetting = Setting::where('id', 1)
                                ->update([
                                        'shop_name'=> $request->input('shop-name'),
                                        'shop_description'=> $request->input('shop-description'),
                                        'shop_address'=> $request->input('shop-address'),
                                        'shop_email'=> $request->input('shop-email'),
                                        'shop_contact'=> $request->input('shop-contact'),
                                        'shop_registration'=> $request->input('shop-registration'),
                                        //'shop_logo'=> $request->input('shop-logo'),
                                        //'shop_logo-mini'=> $request->input('shop-logo-mini'),
                                    ]);

        if($updateSetting) {
            return back()->with('success', 'Setting saved successfully!');
        } else {
            return back()->with('error', 'Something terrible happened!');
        }
    }
}
