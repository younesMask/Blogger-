<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Setting;
Use Session;

class SettingsController extends Controller
{    
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index ()
    {
        return view ('admin.settings.settings')->with('settings', Setting::first());
    }
    public function update(){
        
       $this->validate(request(), [
            'site_name' => 'required',
            'contact_number' => 'required',
            'contact_email' => 'required',
            'addres' => 'required'
       ]);

        $settings = Setting::first();
        $settings->site_name = request()->site_name;
        $settings->addres = request()->addres;
        $settings->contact_email = request()->contact_email;
        $settings->contact_number = request()->contact_number;

        $settings->save();
        Session::flash('success','Settings updated!!');
        return redirect()->back();

    }
}
