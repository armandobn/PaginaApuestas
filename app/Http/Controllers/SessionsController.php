<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function index(){
        return view('usuario.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password'])) == false){
            return redirect()->to('apuesta.index');
            // return back()->withErrors([
            //     'message'=>'The email or password is incorrect, please try again'
            // ]);
        }
        return redirect()->to('/');
    }

    public function destroy (){
        auth()->logout();
        return redirect()->to('/');
    }
}
