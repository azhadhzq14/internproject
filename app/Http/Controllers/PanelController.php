<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\author;

class PanelController extends Controller
{
    //
    //fungsi dashboard mms.Testpaper.com.my
    public function dashboardmms()
    {
        //papar nama pengguna yang telah log masuk ke dalam panel dashboard mms.Testpaper.com.my
        $showuser = array();
        if(Session::has('user_id')){
            $showuser = Admin::where('user_id','=', Session::get('user_id'))->first();

            return view('panel.dashboardmms', compact('showuser'));
        }
    }

    
    
}
    

