@extends('layout.navbar')
@section('Juego TragaPerras')
@section('container')
    <div class="row">
        <div class="col text-center">
            <h2>Juego TragaPerras</h2>
        </div>
    </div>

    <div class="row">
        <div class="col">Ganancia:00
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-primary">Retirar</button>
                </div>
            </div>

        </div>
        <div class="col">
            Costo X Ticked:10 <br>
            Tiros Disponibles: 2
            <div class="row">
                <div class="col"><button type="button" class="btn btn-primary">Comprar Ticked</button></div>
            </div>
        </div>
    </div>


    <div class="row d-flex justify-content-center mt-3">
        <div class="col-2 p-0 border border-5 border-info"><img src="img/1.jpg" class="img-fluid"  alt="..."></div>
        <div class="col-2 p-0 border border-5 border-info"><img src="img/2.jpg" class="img-fluid"  alt="..."></div>
        <div class="col-2 p-0 border border-5 border-info"><img src="img/3.jpg" class="img-fluid"  alt="..."></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-2 p-0 border border-5 border-info"><img src="img/1.jpg" class="img-fluid"  alt="..."></div>
        <div class="col-2 p-0 border border-5 border-info"><img src="img/2.jpg" class="img-fluid"  alt="..."></div>
        <div class="col-2 p-0 border border-5 border-info"><img src="img/3.jpg" class="img-fluid"  alt="..."></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-2 p-0 border border-5 border-info"><img src="img/1.jpg" class="img-fluid"  alt="..."></div>
        <div class="col-2 p-0 border border-5 border-info"><img src="img/2.jpg" class="img-fluid"  alt="..."></div>
        <div class="col-2 p-0 border border-5 border-info"><img src="img/3.jpg" class="img-fluid"  alt="..."></div>
    </div>


    <div class="row d-flex justify-content-center">
      <button type="button" class="btn btn-primary">Jugar</button>
    </div>
@endsection
