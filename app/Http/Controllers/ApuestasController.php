<?php

namespace App\Http\Controllers;

use App\Models\Apuestas;
use App\Models\Equipos;
use App\Models\Participantes;
use App\Models\User;
use Illuminate\Http\Request;

class ApuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $apuestas=Apuestas::all();

        return view('apuestas.showListas',compact('apuestas'));
    }

    public function crear(){
        $equipos = new Equipos();
        $equipos->categoria = "fotbol";
        $equipos->nombre = "america";
        $equipos->save();
        return "s";
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $equipos=Equipos::all();
        // return $equipo;
        return view('apuestas.create',compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'equipoUno' => 'required',
            'equipoDos' => 'required',
        ]);

        $apuestas = new Apuestas();
        $apuestas->equipoUno = $request->equipoUno;
        $apuestas->equipoDos = $request->equipoDos;
        $apuestas->categoria = $request->categoria;
        $apuestas->save();
        // return $apuestas;
        return redirect()->intended('/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Apuestas $apuestas)
    {
        //
        
        $allParticipantes = Participantes::all();
        $participantes=array();
        foreach($allParticipantes as $participante){
            if($apuestas->id==$participante->idApuesta){
                $participantes[]=$participante;
            }
            
        }
        // return $participantes;
        return view('apuestas.detalles',compact('apuestas','participantes'));    
        // return view('apuestas.detalles',compact('apuestas','participantes'));
        
    }

    public function apostar(Request $request)
    {
        //
        
        //return $request;
        $usu = User::find($request->id);
        // return $usu->cartera;
        $saldo=(int)$usu->cartera;
        if($request->apostado>$usu->cartera){
            // return "insuficiente";
            return back()->withErrors([
                    'apostado'=>'El campo apostar no debe ser mayor Saldo Disponible'
                ]);
        }
        // $rules = [
        //     'cartera' => 'required|numeric|min:1|max:100000|max:$saldo',
        // ];
        // $messages = [
        //     'cartera' => 'Saldo Insuficiente',
        // ];
        // $this->validate($request, $rules, $messages);

        $request->validate([
            'apostado' => 'required|numeric|min:1',
        ]);

        $usu->cartera = ($request->cartera)-($request->apostado);
        $usu->save();

        
        $allParticipantes= Participantes::all();
        
        foreach($allParticipantes as $participante){
            if($request->nombre==$participante->nombre && $request->idApuesta==$participante->idApuesta ){

                $parti = Participantes::find($participante->id);
                $parti->apostado = ($request->apostado)+($participante->apostado);
                $parti->save();
                return  redirect()->intended('/show'.'/'.$request->idApuesta);        
            }
        }

        $participantes = new Participantes();
        $participantes->idApuesta = $request->idApuesta;
        $participantes->nombre = $request->nombre;
        $participantes->apostado = $request->apostado;
        $participantes->save();
        return  redirect()->intended('/show/'.$participantes->idApuesta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function cartera(User $user)
    {
        //
        $cartera=$user->cartera;

        return view('apuestas.cartera',compact('cartera'));
    }
     public function edit(User $user,Request $request)
    {
        //
        $request->validate([
            'cartera' => 'required|numeric|min:1|max:100000',
        ]);

        $usu = User::find($user->id);
        $usu->cartera = ($user->cartera)+($request->cartera);
        $usu->save();
        return  redirect()->intended('/cartera'.'/'.$user->id);
    }
    
    public function restar(User $user,Request $request)
    {
        //
        // return $request;
        $usu = User::find($user->id);
        $saldo = $user->cartera;

        $rules = [
            'cartera' => 'required|numeric|min:1|max:100000|max:$saldo',
        ];
        $messages = [
            'cartera' => 'Saldo Insuficiente',
        ];
        $this->validate($request, $rules, $messages);

        // $request->validate([
            
        // ]);
        
        
        $usu->cartera = ($user->cartera)-($request->cartera);
        $usu->save();
        return  redirect()->intended('/cartera'.'/'.$user->id);
    }
    

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
