@extends('layout.navbar')
@section('title', 'Lista de Apuestas')

@section('container')

    
        <br>
        <div class="bg-warning rounded-pill">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">Futbol</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Basquetbol</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">BOX</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-americano-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-americano" type="button" role="tab" aria-controls="pills-americano"
                        aria-selected="false">Futbol americano</button>
                </li>
            </ul>
        </div>


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

              <table class="table table-hover ">
                <tbody class="text-center bg-success">
                    <tr>
                        <td class="rounded-pill">America VS Cruz Azul <button type="button"
                                class="btn btn-primary rounded-pill">Apostar</button></td>
                    </tr>
                    <tr>
                        <td class="rounded-pill">America VS Cruz Azul <button type="button"
                                class="btn btn-primary rounded-pill">Apostar</button></td>
                    </tr>
                    <tr>
                        <td class="rounded-pill">America VS Cruz Azul <button type="button"
                                class="btn btn-primary rounded-pill">Apostar</button></td>
                    </tr>

                </tbody>
            </table>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
            <div class="tab-pane fade" id="pills-americano" role="tabpanel" aria-labelledby="pills-americano-tab">...</div>
        </div>
    
@endsection
