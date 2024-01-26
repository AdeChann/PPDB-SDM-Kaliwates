<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return redirect('/admin');
        echo "Selamat Datang";
        echo "<h1>". Auth::user()->name  ."</h1>";
        echo "<a href='/logout'> Logout>> </a>";
    }
    public function pengguna(){
        // return redirect('/admin');
        echo "Selamat Datang di halaman user";
        echo "<h1>". Auth::user()->name  ."</h1>";
        echo "<a href='/logout'> Logout>> </a>";
    }
    public function admin(){
        // return redirect('/admin');
        echo "Selamat Datang di halaman admin";
        echo "<h1>". Auth::user()->name  ."</h1>";
        echo "<a href='/logout'> Logout>> </a>";
    }
}