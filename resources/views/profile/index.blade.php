@extends('templates.app')

@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-4 justify-content-center">
                <img src="{{ asset('images/jordy.png') }}" alt="Logo" class="col-12 justify-content-center " style="position:absolute;">
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-4">USERNAME</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2"> publicaciones</div>
                    <div class="col-2"> seguidores</div>
                    <div class="col-2"> seguidos</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-8">Bio</div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 justify-content=center" style="text-align:center;">
                <p>
                    <div></div>
                    <a class="btn btn-primary col-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Publicaciones
                    </a>
                    <button class="btn btn-primary col-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Reels
                    </button>
                    <button class="btn btn-primary col-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Videos
                    </button>
                    <button class="btn btn-primary col-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Etiquetadas
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        prueba
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection