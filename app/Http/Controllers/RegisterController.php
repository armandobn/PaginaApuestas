<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('usuario.registrar');
    }

    public function store(Request $request){

     

        $request->validate([
            'name' => 'required',
            'apePaterno' => 'required',
            'apeMaterno' => 'required',
            'email' => 'required|email|unique:users',
            'fechaNacimiento' => 'required',
            'celular' => 'required|numeric|digits:10',
            'numeroTarjeta' => 'required|numeric|digits:16',
            'password' => 'required'
        ]);

        $user = User::Create(request(['name','apePaterno','apeMaterno','email',
            'fechaNacimiento','celular','numeroTarjeta','password']));
        auth()->login($user);
        return redirect()->to('/');
        // return $request;
    }
}
