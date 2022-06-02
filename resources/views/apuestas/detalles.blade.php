@extends('layout.navbar')
@section('title', 'Detalles Apuesta')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>nombre apuesta</h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ingresa cantidad a Apostar</label>
                        <input type="number" class="form-control" id="exampleInputEmail1">
                    </div>
                    <button type="submit" class="btn btn-primary">Apostar</button>
                </form>
            </div>
        </div>

<hr>

        <h3>Participantes</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apostado</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection
