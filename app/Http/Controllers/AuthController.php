<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index()
    {

        return view("authentication.login");
    }

    public function login(Request $request)
    {


        $credentials = $request->validate([

            "name" => ["required"],
            "password" => ["required"],

        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended("/peminjaman");
        } else {

            return redirect("/login");
        }
    }
}
