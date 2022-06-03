@extends('layout.navbar')
@section('title', 'Crear Apesta')

@section('container')
<body style="background-image: url(' {{asset ('img/fondo_inicio.jpg') }} '); content:fullscreen;">
        <div class="container">

        <div class="row">
            <div class="col text-center">
                <h1>Crear Apuesta</h1>
            </div>
        </div>

        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                    type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Futbot</button>
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
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <form action="{{route('apuesta.store')}}" method="POST">
                        @csrf
                        <label for="categoria" class="form-label">Categoria</label>
                        <input type="text" id="categoria" name='categoria' class="form-control" value='futbol' >
                        <br>
                        <h3>Equipos que se enfrentaran</h3>
                        Equipo 1
                        <select class="form-select" name="equipoUno" required aria-label="Default select example">
                            <option selected disabled >Selecciona Equipo</option> 
                            @foreach ($equipos as $equipo)
                                @if ($equipo->categoria == 'futbol')
                                    <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        Equipo 2
                        <select class="form-select" name="equipoDos"  required aria-placeholder="selecciona Equipo" >
                            <option selected disabled >Selecciona Equipo</option>
                            @foreach ($equipos as $equipo)
                                @if ($equipo->categoria == 'futbol')
                                    <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        
                        <br>
                        <button type="submit" class="btn btn-primary">Crear Apuesta</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <form action="{{route('apuesta.store')}}" method="POST">
                        @csrf
                        <label for="categoria" class="form-label">Categoria</label>
                        <input type="text" id="categoria" name='categoria' class="form-control" value='basquetbol' >
                        <br>
                        <h3>Equipos que se enfrentaran</h3>
                        Equipo 1
                        <select class="form-select" name="equipoUno"  aria-label="Default select example">
                            <option selected disabled >Selecciona Equipo</option>
                            @foreach ($equipos as $equipo)
                                @if ($equipo->categoria == 'basquetbol')
                                    <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        Equipo 2
                        <select class="form-select" name="equipoDos"  aria-label="Default select example">
                            <option selected disabled>Selecciona Equipo</option>
                            @foreach ($equipos as $equipo)
                                @if ($equipo->categoria == 'basquetbol')
                                    <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br>
                        <button type="sumit" class="btn btn-primary">Crear Apuesta</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <form action="{{route('apuesta.store')}}" method="POST">
                        @csrf
                        <label for="categoria" class="form-label">Categoria</label>
                        <input type="text" id="categoria" name='categoria' class="form-control" value='box' >
                        <br>
                        <h3>Equipos que se enfrentaran</h3>
                        Equipo 1
                        <select class="form-select" name="equipoUno" aria-label="Default select example">
                            <option selected disabled>Selecciona Equipo</option>
                            @foreach ($equipos as $equipo)
                                @if ($equipo->categoria == 'box')
                                    <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        Equipo 2
                        <select class="form-select" name="equipoDos" aria-label="Default select example">
                            <option selected disabled>Selecciona Equipo</option>
                            @foreach ($equipos as $equipo)
                                @if ($equipo->categoria == 'box')
                                    <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br>
                        <button type="sumit" class="btn btn-primary">Crear Apuesta</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <form action="{{route('apuesta.store')}}" method="POST">
                        @csrf
                        <label for="categoria" class="form-label">Categoria</label>
                        <input type="text" id="categoria" name='categoria' class="form-control" value='futbol americano' >
                        <br>
                        <h3>Equipos que se enfrentaran</h3>
                        Equipo 1
                        <select class="form-select" name="equipoUno" aria-label="Default select example">
                            <option selected disabled>Selecciona Equipo</option>
                            @foreach ($equipos as $equipo)
                                @if ($equipo->categoria == 'futbol americano')
                                    <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        Equipo 2
                        <select class="form-select" name="equipoDos" aria-label="Default select example">
                            <option selected disabled>Selecciona Equipo</option>
                            @foreach ($equipos as $equipo)
                                @if ($equipo->categoria == 'futbol americano')
                                    <option value="{{ $equipo->nombre }}">{{ $equipo->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br>
                        <button type="sumit" class="btn btn-primary">Crear Apuesta</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</body>

@endsection
