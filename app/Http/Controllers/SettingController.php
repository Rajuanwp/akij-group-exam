<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use RealRashid\SweetAlert\Facades\Alert;



class SettingController extends Controller
{
    public function systemInfo()
    {
        $laravelVersion = app()->version();
        $serverDetails = $_SERVER;
        $currentPHP = phpversion();
        $timeZone = config('app.timezone');
        return view('admin.systeminfo',compact('currentPHP', 'laravelVersion', 'serverDetails','timeZone'));    
    }

    public function optimize(){
        
         Artisan::call('optimize:clear');
         Alert::success('Success Title', 'Success Message');
    
        return redirect()->back();
    }
}
