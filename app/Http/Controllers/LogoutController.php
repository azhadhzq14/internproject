<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;
use Validator;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    //
    /**
     * Log out account user.
     *
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success','Berjaya log keluar daripada Panel Dashboard Admin');
      
    }
}
