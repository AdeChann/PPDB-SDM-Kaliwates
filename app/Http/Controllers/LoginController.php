<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function index(){
    //     return view('auth.login');
    // }

    // public function login_proses(Request $request){
    //     $request->validate([
    //         'email' =>'required',
    //         'password' =>'required',
    //     ]);
    //     $infologin = [
    //         'email' =>$request->email,
    //         'password' =>$request->password,
    //     ];
    //     if (Auth::attempt([$infologin])){
    //         return redirect()->route('home');
    //     }else{
    //         return redirect('login')->with('failed','Email atau Password Salah');
    //     }
    // }

    public function index(){
        return view('auth.login');
    }

    function login_proses(Request $request)
    {
        $request ->validate([
            'email' => 'required',
            'password' => 'required',

        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        $data=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($data)){
            return redirect()->route('home');

        }else{
            return redirect('/login')->withErrors('Email dan Password yang dimasukan tidak sesuai')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('Success', 'Anda Berhasil Logout');
    }

    public function reggister(){
        return view('auth.register');
    }
}
