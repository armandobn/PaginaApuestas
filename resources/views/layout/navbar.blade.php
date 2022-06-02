@extends('layout.plantilla')
@section('title', 'navbar')

@section('navbar') 
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">---</span>
          </button>
  <div class="collapse navbar-collapse" id="navbarNav">
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
          <a class="nav-link" href="{{route('apuesta.tragaperras')}}">
              <span class="fas fa-dice-d20 fa-2x"></span> TRAGA PERRAS</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{route('apuesta.cartera')}}">
              <span class="fas fa-wallet fa-2x"></span> Cartera</a><i class=""></i>
      </li>
      <li class="nav-item">
        {{-- Welcome <b>{{ auth()->user()->name }}</b> --}}
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
