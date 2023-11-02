<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistroController extends Controller
{
    public function index(){
        return view('auth.Registro');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        if(!auth()->attempt($request->only('email','password'), $request->remenber)){
            return back()->with('mensaje','Error al crear usuario');
        }
        return view('welcome');
    }
}
