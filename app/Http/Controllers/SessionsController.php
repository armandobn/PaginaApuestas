<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //
    public function index(){
        return view('usuario.login');
    }

    public function store(Request $request){
        // $credentials =  $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
            
        //    $request->session()->regenerate();
 
        //    return redirect()->intended('/index');
        //  }
 
        // return redirect('/');
        if(auth()->attempt(request(['email','password']))){
            return redirect()->to('/index');
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
