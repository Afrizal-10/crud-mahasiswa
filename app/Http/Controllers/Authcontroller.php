<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    function tampilRegistrasi(){
        return view('registrasi');
    }

    //    function submit
    function submitRegistrasi(Request $request){
        $user = new User();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd($user);
        return redirect()->route('login');
    }

    function tampilLogin(){
        return view('login');
    }

    //   function login
    function submitLogin(Request $request){
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('mahasiswa.tampil');
        } else {
            return redirect()->back()->with('gagal', 'Email atau Password Salah');
        }
    }

    //    function logout
    function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
