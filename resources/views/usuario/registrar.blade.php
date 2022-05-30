@extends('layout.plantilla')
@section('title','Registrar Usuario')
@section('container')

<div class="row text-center">
  <div class="col">
    <h1>Registrar</h1>
  </div>
</div>
<hr class="bg-primary p-1">

<form action="{{route('usuario.store')}}" method="POST">
  @csrf
  <div class="row">
    <div class="col">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="name">
        <label for="name">Nombre</label>
      </div>
    </div>
    <div class="col">
      <div class="form-floating">
        <input type="text" class="form-control" id="apePaterno" name="apePaterno" placeholder="apePaterno">
        <label for="apePaterno">Apellido Paterno</label>
      </div>
    </div>
    <div class="col">
      <div class="form-floating">
        <input type="text" class="form-control" id="apeMaterno" name="apeMaterno" placeholder="apeMaterno">
        <label for="apeMaterno">Apellido Materno</label>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        <label for="email">Correo</label>
      </div>
    </div>
    <div class="col">
      <div class="form-floating">
        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Password">
        <label for="fechaNacimiento">Fecha de Nacimiento</label>
      </div>
    </div>
    <div class="col">
      <div class="form-floating">
        <input type="number" class="form-control" id="celular" name="celular" placeholder="Password">
        <label for="celular">Celular</label>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <div class="form-floating">
        <input type="text" class="form-control" id="numeroTarjeta" name="numeroTarjeta" placeholder="Password">
        <label for="numeroTarjeta">Numero de Tarjeta</label>
      </div>
    </div>
    <div class="col">
      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Registrar</button>
</form>

@endsection
