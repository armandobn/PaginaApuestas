@extends('layout.plantilla')
@section('title', 'Iniciar Sesion')
@section('container')

    <div class="row justify-content-md-center mt-5">
        <div class="col-md-5">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Entra a tu Suerte</h5>
                    <form action="{{route('usuario.store')}}" method="post">
                      @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="name@example.com">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-3">Iniciar Sesion</button>
                    </form>

                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('usuario.create') }}" class="btn btn-primary">Registrarse</a>
                </div>
            </div>

        </div>
    </div>


@endsection
