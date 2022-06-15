@extends('layout.navbar')
@section('title', 'Creaciones')

@section('container')

    <h1>Creacion</h1>
   
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($apuestas as $apuesta)
                @if ($apuesta->user == auth()->user()->name)
                  @if($apuesta->estado==1)
                    <tr>
                      <form action="{{route('apuesta.cerrarApuesta')}}" method="POST">
                        @csrf
                          <td class="rounded-pill">
                            <input type="text" name="idApuesta" hidden value="{{ $apuesta->id }}"  class="form-control">
                            {{ $apuesta->equipoUno }} VS {{ $apuesta->equipoDos }}
                              <button type="sumit" class="btn btn-primary rounded-pill">Cerrar</button>
                          </td>
                      </form>
                  </tr>
                  @endif
                   
                @endif
            @endforeach


        </tbody>
    </table>

@endsection
