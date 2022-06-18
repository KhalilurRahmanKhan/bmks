<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{


    public function adminView(){
        return view("pages/dashboard/admins/index",[
            'admins'=>User::where('role',1)->get(),
        ]);
    }
    public function registration(){
        return view("pages.registration");
    }

    public function login(){
        return view("pages.dashboard.login");
    }
    public function userlogin(){
        return view("pages.login");
    }
    public function store(Request $request){
        $request->validate([
            "mobile" => "required|min:11",
            "password" => "required|confirmed|min:8",
        ]);
        
        User::create([
            "mobile" => "$request->mobile",
            "password" => Hash::make($request->password),
        ]);
       
        return back()->with('msg','Wait for your role confirmation!');

    }
    public function adminCreate(Request $request){
        echo("hello");
        // $request->validate([
        //     "mobile" => "required|min:11",
        //     "password" => "required|confirmed|min:8",
        // ]);
        
        // User::create([
        //     "mobile" => "$request->mobile",
        //     "password" => Hash::make($request->password),
        // ]);
       
        // return back()->with('msg','Wait for your role confirmation!');

    }

    public function check(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('username', 'password');
 
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        else{
            return back();
        }
    }


    public function authenticate(Request $request)
    {
        $request->validate([
            'mobile' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('mobile', 'password');
 
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return back();
        }
        else{
            return back();
        }
    }


    public function logout(){
        auth()->logout();
        return redirect("dashboard/login");
    }
    public function userlogout(){
        auth()->logout();
        return redirect("/login");
    }
    
}

