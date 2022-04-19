@extends('templates.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row" style="margin-top: 10px;">
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
                <div class="row" style="margin-top: 10px;">
                    <div class="col-8">Bio</div>
                </div>
            </div>
        </div>
        
        <div class="row" style="margin-top: 10px;">
            <div class="col-12 justify-content=center" style="text-align:center;">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="text-align:center;">
                    <li class="nav-item justify-content=center" role="presentation">
                        <button class="nav-link active" style="text-align:center;" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Publicaciones</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-4">
                                <a href="show/1"><img class="img-fluid" src="{{asset('images/posts/post-1.jpg')}}" style="margin-top: 10px;"/></a>
                            </div>
                            <div class="col-4">
                                <a href="show/1"><img class="img-fluid" src="{{asset('images/posts/post-1.jpg')}}" style="margin-top: 10px;"/></a>
                            </div>
                            <div class="col-4">
                                <a href="show/1"><img class="img-fluid" src="{{asset('images/posts/post-1.jpg')}}" style="margin-top: 10px;"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection