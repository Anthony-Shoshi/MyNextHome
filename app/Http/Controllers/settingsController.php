<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;

class settingsController extends Controller
{
    public function settings()
    {
    	$setting = Settings::where('id',1)->first();
    	return view('admin.settings.settings')->with('setting',$setting);
    }

    public function updateSettings(Request $request)
    {
    	$settings = Settings::findOrFail($request->id);
    	$settings->footerText = $request->footerText;
    	$settings->save();

    	return redirect()->back()->with('success','Settings updated successfully!');
    }
}
