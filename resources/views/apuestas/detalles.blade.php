@extends('layout.navbar')
@section('title', 'Detalles Apuesta')

@section('container')
<body style="background-image: url(' {{asset ('img/fondo_.jpg') }} '); content:fullscreen;">
        <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>{{ $apuestas->equipoUno }} VS {{ $apuestas->equipoDos }}</h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Cartera: {{ auth()->user()->cartera }}</h3>
                <form action="route{{ 'apuesta.apostar' }}" method="POST">
                    @csrf

                    <input type="text" name="idApuesta" hidden value="{{ $apuestas->id }}"  class="form-control">
                    <input type="text" name="id" hidden value="{{ auth()->user()->id }}"  class="form-control">
                    <input type="text" name="nombre" hidden value="{{ auth()->user()->name }}"  class="form-control">
                    <input type="text" name="cartera" hidden value="{{ auth()->user()->cartera }}"  class="form-control">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="apostado" class="form-label">Ingresa cantidad a Apostar</label>
                                    <input type="number" class="form-control rounded-pill small" name="apostado" required id="apostado">
                                </div> 
                            </div>
                        </div>
                    </div>
                    @error('apostado')
                        <br>
                        <small>{{ $message }}</small>
                        <br>
                    @enderror
                    <button type="submit" class="btn btn-primary">Apostar</button>
                </form>
            </div>
        </div>

        <hr>

        <h3>Participantes</h3>
        <table class="table">
            <thead>
                <tr>
                   
                    <th scope="col">Nombre</th>
                    <th scope="col">Apostado</th>

                </tr>
            </thead>
            <tbody>
                {{-- <td>{{$participantes['nombre']}}</td> --}}
                {{-- <td>{{$participantes['apostado']}}</td> --}}
                
                
                @foreach ($participantes as $participante)
                    
                        <tr>
                        <td>{{$participante['nombre']}}</td>
                        <td>{{$participante['apostado']}}</td>    
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>



@endsection
