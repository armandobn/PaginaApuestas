@extends('layout.navbar')
@section('Cartera')
@section('container')

    <div class="row">
        <div class="col text-center">
            <h1>Cartera</h1>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <h4>Saldo: {{$cartera}}</h4>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Depositar
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropRetirar">
              Retirar
          </button>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Depositar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Saldo: {{$cartera}}
                  <form action="{{route('apuesta.edit', auth()->user()->id)}}" method="POST">
                      @csrf
                      @method('put')
                      
                    <div class="mb-3">
                      <label for="cartera" class="form-label">Cantidad:</label>
                      <input type="number" class="form-control"  name="cartera" id="cartera" aria-describedby="emailHelp">
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Depositar</button>
                  </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdropRetirar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropRetirarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropRetirarLabel">Retirar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Saldo: {{$cartera}}
                  <form action="{{route('apuesta.restar', auth()->user()->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="cartera" class="form-label">Cantidad:</label>
                      <input type="number" class="form-control" name="cartera" id="cartera" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Retirar</button>
                  </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection