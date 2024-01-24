<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
class AnakController extends Controller
{

    public function home() {
        return view('home');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function index() {
        $datas =Anak::get();
        return view('index',compact('datas'));
    }

    public function create(){
        return view('pendaftaran.pendaftaran');
    }
    public function store(Request $request){
        Anak::create($request->all());
    }
}