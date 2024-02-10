<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller{

    //connect to page registration form
    public function registration(){
        return view("auth.registration");
    }

    //fungsi bagi pendaftaran pengguna baharu 
    public function registerAdmin(Request $request){
       $request -> validate([
        'admin_name'=> 'required',
        'emel_user' => 'required|email',
        'user_id'=> 'required|unique:admins',
        'password'=> 'required|min:5'
    ]);

   

    //akan dimasukkan ke dalam jadual Admins dalam DB

    
    $admin = new Admin();
    $admin->name_admin = $request->admin_name;
    $admin->emel_user = $request->emel_user;
    $admin->user_id = $request->user_id;
    $admin ->password =Hash::make($request->password);
    $admin ->remember_token=Str::random(40);
    $admin->save();

    Mail::to($admin->emel_user)->send(new RegisterMail($admin));
    
    if ($admin) {
        return back()->with('success','Akaun anda berjaya didaftarkan dan sila verifikasi e-mel yang telah anda daftarkan');
    }else{
        return back()->with('fail','Tidak berjaya didaftarkan');
    }
    }

    public function verify($token)
    {
        $admin = Admin::where('remember_token', '=', $token)->first();
        if(!empty($admin))
        {
            $admin->email_verified_at = date('Y-m-d H:i:s');
            $admin ->remember_token=Str::random(40);
            $admin->save();

            return redirect('login')->with('success','Akaun anda telah disahkan');
        }else{
            abort(404);
        }
    }

    //connect to page login.blade.php
    public function login(){
        return view("auth.login");
    
    }

    //kod bagi mengfungsi proses validasi untuk log masuk bagi fetch data dari table Admins untuk log masuk ke panel dashboard mms.Testpaper.com.my
    public function loginAdmin(Request $request){
        $request -> validate([ 
       'user_id'=> 'required',
       'password'=> 'required|min:5|max:12' 
    ]);
    //Fetch user_id dan password dari table Admins.

    $admin = Admin::where('user_id','=',$request->user_id)->first();
    if($admin){
        if(Hash::check($request->password,$admin->password)){
            //user_id yang dimasukkan betul
            $admin->user_id;
            $request->session()->put('user_id',$admin->user_id);
            return redirect('panel/dashboardmms');
        }else{
            //if kalau kata laluan yang di masukkan adalah salah atau tidak sepadan
            return back()->with('fail','Kata laluan tidak sepadan');
        }
    }else{
        //kalau user_id dan pengguna dimasukkan adalah salah atau tiada dalam rekod
        return back()->with('fail','Pengguna ID tiada di dalam rekod');
    }
    }
   
    
}
    