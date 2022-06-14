@extends('layout.navbar')
@section('title', 'Crear Apesta')

@section('container')
<head>
    <link rel="stylesheet" href="{{asset('css/crear_apuesta.css')}}">
</head>
    <body class="create-apuesta" style="background-image: url(' {{ asset('img/fondo_inicio.jpg') }} '); content:fullscreen;">
        <div class="container">
            <div class="row justify-content-md-center mt-5">
                <div class="col-md-5">
                    <div class="card-wrape text-center">
                        <div class="brand" style="background-color: rgba(240, 255, 255, 0.515); aling-item:center">
                            <img src= "{{asset ('img/logo.png')}}">
                        </div>
                        <div class="card fat">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                            aria-selected="true">Futbot</button>
                                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false">Basquetbol</button>
                                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                                            aria-selected="false">BOX</button>
                                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                                            aria-selected="false">Futbol americano</button>
                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <form action="{{ route('apuesta.store') }}" method="POST">
                                                @csrf
                                                <input type="text" name="user" hidden value="{{ auth()->user()->name }}"  class="form-control">
                                                <input type="text" id="categoria" name='categoria' class="form-control" value='futbol' hidden>
                                                <br>
                                                <h3>Equipos que se enfrentaran</h3>
                                                <div class="col-md-8">
                                                    <label for="equipoUno" class="form-label">Equipo 1: Selecciona un Equipo</label>
                                                    <select class="form-select" name="equipoUno" required
                                                        aria-label="Default select example">
                                                        @foreach ($equipos as $equipo)
                                                            @if ($equipo->categoria == 'futbol')
                                                                <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="equipoDos" class="form-label">Equipo 2: Selecciona un Equipo</label>
                                                    <select class="form-select" name="equipoDos" required
                                                        aria-placeholder="selecciona Equipo" required>
                                                        @foreach ($equipos as $equipo)
                                                            @if ($equipo->categoria == 'futbol')
                                                                <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Crear Apuesta</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <form action="{{ route('apuesta.store') }}" method="POST">
                                                @csrf
                                                <input type="text" name="user" hidden value="{{ auth()->user()->name }}"  class="form-control">
                                                <input type="text" id="categoria" name='categoria' class="form-control" value='basquetbol'
                                                    hidden>
                                                <br>
                                                <h3>Equipos que se enfrentaran</h3>
                    
                                                <div class="col-md-8">
                                                    <label for="equipoUno" class="form-label">Equipo 1: Selecciona un Equipo</label>
                                                    <select class="form-select" name="equipoUno" aria-label="Default select example">
                                                        @foreach ($equipos as $equipo)
                                                            @if ($equipo->categoria == 'basquetbol')
                                                                <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                    
                                                <div class="col-md-8">
                                                    <label for="equipoDos" class="form-label">Equipo 2: Selecciona un Equipo</label>
                                                    <select class="form-select" name="equipoDos" aria-label="Default select example">
                                                        @foreach ($equipos as $equipo)
                                                            @if ($equipo->categoria == 'basquetbol')
                                                                <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <br>
                                                <button type="sumit" class="btn btn-primary">Crear Apuesta</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab">
                                            <form action="{{ route('apuesta.store') }}" method="POST">
                                                @csrf
                                                <input type="text" name="user" hidden value="{{ auth()->user()->name }}"  class="form-control">
                                                <input type="text" id="categoria" name='categoria' class="form-control" value='box' hidden>
                                                <br>
                                                <h3>Equipos que se enfrentaran</h3>
                                                <div class="col-md-8">
                                                    <label for="equipoDos" class="form-label">Equipo 1: Selecciona un Equipo</label>
                                                    <select class="form-select" name="equipoUno" aria-label="Default select example">
                                                        @foreach ($equipos as $equipo)
                                                            @if ($equipo->categoria == 'box')
                                                                <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                    
                                                <div class="col-md-8">
                                                    <label for="equipoDos" class="form-label">Equipo 2: Selecciona un Equipo</label>
                                                    <select class="form-select" name="equipoDos" aria-label="Default select example">
                                                        @foreach ($equipos as $equipo)
                                                            @if ($equipo->categoria == 'box')
                                                                <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <br>
                                                <button type="sumit" class="btn btn-primary">Crear Apuesta</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                            aria-labelledby="v-pills-settings-tab">
                                            <form action="{{ route('apuesta.store') }}" method="POST">
                                                @csrf
                                                <input type="text" name="user" hidden value="{{ auth()->user()->name }}"  class="form-control">
                                                <input type="text" id="categoria" name='categoria' class="form-control"
                                                    value='futbol americano' hidden>
                                                <br>
                                                <h3>Equipos que se enfrentaran</h3>
                    
                                                <div class="col-md-8">
                                                    <label for="equipoDos" class="form-label">Equipo 1: Selecciona un Equipo</label>
                                                    <select class="form-select" name="equipoUno" aria-label="Default select example">
                                                        @foreach ($equipos as $equipo)
                                                            @if ($equipo->categoria == 'futbol americano')
                                                                <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                    
                                                <div class="col-md-8">
                                                    <label for="equipoDos" class="form-label">Equipo 2: Selecciona un Equipo</label>
                                                    <select class="form-select" name="equipoDos" aria-label="Default select example">
                                                        @foreach ($equipos as $equipo)
                                                            @if ($equipo->categoria == 'futbol americano')
                                                                <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <br>
                                                <button type="sumit" class="btn btn-primary">Crear Apuesta</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
        
                        
                    </div>
        </div>
    </body>

@endsection
