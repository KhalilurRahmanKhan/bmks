<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function registration(){
        return view("pages.dashboard.registration");
    }

    public function login(){
        return view("pages.dashboard.login");
    }
    public function store(Request $request){
  
        $request->validate([
            "email" => "required",
            "password" => "required|confirmed",
        ]);
        User::create([
            "email" => "$request->email",
            "password" => Hash::make($request->password),
        ]);
       
        
        return back()->with('msg','Wait for your role confirmation!');

    }
    
}

