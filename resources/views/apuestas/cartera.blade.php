@extends('layout.navbar')
@section('Cartera')
@section('container')
<head>
    <link rel="stylesheet" href="{{asset('css/cartera.css')}}">
</head>
    <body class="my-login-page" style="background-image: url(' {{ asset('img/fondo_cartera.jpg') }} '); content:fullscreen;">
        <div class="card-wrape text-center">
            <div class="brand" style="background-color: rgba(240, 255, 255, 0.515); aling-item:center">
                <img src= "{{asset ('img/logo2.png')}}">
            </div>
            <div class="card fat">
                <div class="card-body">
                    <h2 class="card-title" style="color: aliceblue">Cartera</h2>
                    
                        {{--//? nombre del usuario--}}
                        <div class="form-floating mb-3">
                            <h3>Usuario: {{ auth()->user()->name }}</h3>    
                        </div>
                        {{--//? numero de tarjeta--}}
                        <div class="form-floating" style="bord">
                            <h3>Num. Tarjeta: {{ auth()->user()->numeroTarjeta }}</h3>
                        </div>
                        {{--//? saldo--}}
                        <div class="form-floating" style="bord">
                            <h3>Cartera/Saldo: {{ $cartera }}</h3>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Depositar
                                    </button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropRetirar">
                                        Retirar
                                    </button>
                                </div>

                            </div>
                        </div>
                        
                    </form>

                </div>   
            </div>

            
        </div>
    </body>



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
                    Saldo: {{ $cartera }}
                    
                    <form action="{{ route('apuesta.edit', auth()->user()->id) }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="cartera" class="form-label">Cantidad:</label>
                            <input type="number" class="form-control rounded-pill" name="cartera" id="cartera" required
                                aria-describedby="emailHelp">

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
                    Saldo: {{ $cartera }}
                    <form action="{{ route('apuesta.restar', auth()->user()->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="cartera" class="form-label">Cantidad:</label>
                            <input type="number" class="form-control rounded-pill" name="cartera" id="cartera" required
                                aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill">Retirar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
