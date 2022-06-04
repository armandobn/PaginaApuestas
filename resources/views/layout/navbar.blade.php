@extends('layout.plantilla')
@section('title', 'navbar')

@section('navbar') 
<nav class="navbar navbar-expand-lg " style="background-color: rgba(255, 0, 0, 0.372)">
  <div class="container-fluid" >
      <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">---</span>
          </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <div class="ocntainer">
          <div class="row">
              <div class="col" style="background-image: url(' {{asset ('img/fondologin.jpg') }} ');">

              </div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
          </div>
      </div>
      <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('apuesta.index')}}">
            <span class="fas fa-chess-rook fa-2x"></span>  INICIO </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('apuesta.create')}}">
            <span class="fas fa-plus-circle fa-2x"></span> Crear Apuesta</a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="{{route('apuesta.cartera',auth()->user()->id )}}">
              <span class="fas fa-wallet fa-2x"></span> Cartera</a><i class=""></i>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">
            <span class="fas fa-user-circle fa-2x"></span>
            <b>{{ auth()->user()->name }}</b>
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('usuario.destroy')}}">
              <span class="fas fa-wallet fa-2x"></span> Cerrar</a><i class=""></i>
      </li>
      
      </ul>
  </div>
  </div>
</nav>
@endsection
