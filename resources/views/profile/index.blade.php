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
                                <!-- Button trigger modal -->
                                <img class="img-fluid" src="{{asset('images/posts/post-1.jpg')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top: 10px;"/>
                            </div>
                            <div class="col-4">
                                <!-- Button trigger modal -->
                                <img class="img-fluid" src="{{asset('images/posts/post-1.jpg')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top: 10px;"/>
                            </div>
                            <div class="col-4">
                                <!-- Button trigger modal -->
                                <img class="img-fluid" src="{{asset('images/posts/post-1.jpg')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top: 10px;"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade col-12" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="he:100%;" >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="img-fluid" src="{{asset('images/posts/post-1.jpg')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top: 10px;"/>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="card col-12">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="d-flex flex-row align-items-center">
                                                                        <div
                                                                            class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger post-profile-photo mr-3">
                                                                            <img src="{{asset('images/posts/post-1.jpg')}}" alt="..."
                                                                                style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                                                        </div>
                                                                        <span class="font-weight-bold margin-element10">username</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    
                                                                    <p class="d-block mb-1">Lil drone shot I got a while back but never posted.</p>
                                                                    <button class="btn p-0">
                                                                        <span class="text-muted">View all 2,247 comments</span>
                                                                    </button>

                                                                    <div>
                                                                        <div>
                                                                            <strong class="d-block">a.7.m3ff</strong>
                                                                            <span>❤️💓💓💓💓💓</span>
                                                                        </div>
                                                                        <div>
                                                                            <strong class="d-block">adri_rez77</strong>
                                                                            <span>Hi</span>
                                                                        </div>
                                                                    </div>

                                                                    <small class="text-muted">4 HOURS AGO</small>
                                                                </div>
                                                                <div class="row">
                                                                    <strong class="d-block" >365.354 likes</strong>
                                                                    <strong class="d-block">samkolder</strong>
                                                                    <div class="d-flex flex-row justify-content-between pl-3 pr-3 pt-3 pb-1 margin-element10">
                                                                        <ul class="list-inline d-flex flex-row align-items-center m-0">
                                                                            <li class="list-inline-item">
                                                                                <button class="btn p-0">
                                                                                    <i class="fa-regular fa-heart fa-2x" id="heart" for=""></i>
                                                                                </button>
                                                                            </li>
                                                                            <li class="list-inline-item ml-2">
                                                                                <button class="btn p-0">
                                                                                    <i class="fa-regular fa-comment fa-2x"></i>
                                                                                </button>
                                                                            </li>
                                                                            <li class="list-inline-item ml-2">
                                                                                <button class="btn p-0">
                                                                                    <i class="fa-regular fa-share-from-square fa-2x"></i>
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="position-relative comment-box">
                                                                        <form>
                                                                            <input class="w-100 border-0 p-3 input-post" placeholder="Add a comment...">
                                                                            <button class="btn btn-primary position-absolute btn-ig">Post</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

    </div>
</div>
@endsection