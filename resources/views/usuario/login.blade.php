@extends('layout.plantilla')
@section('title', 'Iniciar Sesion')
@section('container')
<head>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body class="my-login-page" style="background-image: url(' {{asset ('img/logo.png') }} '); content:fullscreen;">>
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-5">
            <div class="card-wrape text-center">
                <div class="brand" style="background-color: rgba(240, 255, 255, 0.515); aling-item:center">
                    <img src= "{{asset ('img/logo.png')}}">
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h5 class="card-title" style="color: aliceblue">Entra a tu Suerte</h5>
                        <form action="{{route('session.store')}}" method="post">
                        @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-pill" id="email" name="email"
                                required placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating" style="bord">
                                <input type="password" class="form-control rounded-pill" id="password" name="password"
                                    required placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary mt-3">Iniciar Sesion</button>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col mt-4" style="color: aliceblue">
                                        No tienes cuenta? <a href="{{ route('usuario.create') }}"> Crear una</a>
                                    
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </form>

                    </div>   
                </div>

                
            </div>
            <div class="footer">
                    Copyright &copy; 2022 &mdash; Apuestas "El Chiquito"
            </div>
        </div>
    </div> 
    
</body>



@endsection
