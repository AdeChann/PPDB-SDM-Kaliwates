<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function home() {
        return view('home');
    }

    public function index() {
        $datas =Pendaftaran::get();
        return view('index',compact('datas'));
    }

    public function create(){
        return view('pendaftaran.pendaftaran');
    }
    public function store(Request $request){
        // dd($request->except('_token','submit'));
        Pendaftaran::create($request->except('_token','submit'));
        return redirect('/user');

    }
   public function edit($id){
    $user = Pendaftaran::find($id);
    return view ('admin.edit',compact(['user']));
   }

   public function update($id, Request $request){
    $user = Pendaftaran::find($id);
    $user->update($request->except('_token','submit'));
    return redirect('/user');
   }

    public function destroy($id, Request $request){
        $user = Pendaftaran::find($id);
        $user->delete();
        return redirect('/user');

}
}