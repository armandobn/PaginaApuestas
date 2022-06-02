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
            'email' => 'required',
            'fechaNacimiento' => 'required',
            'celular' => 'required',
            'numeroTarjeta' => 'required',
            'password' => 'required'
        ]);

        $user = User::Create(request(['name','apePaterno','apeMaterno','email',
            'fechaNacimiento','celular','numeroTarjeta','password']));
        auth()->login($user);
        return redirect()->to('/');
        // return $request;
    }
}
