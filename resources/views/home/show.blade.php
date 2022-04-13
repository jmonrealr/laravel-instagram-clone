@extends('templates.app')

@section('content')
<div class="col-9">
    <div class="row">
        <div class="col-8">
            <!-- START OF POST -->
            <div class="d-flex flex-column mt-4 mb-4">

                <div class="card">
                    <div class="card-header p-3">
                        <div class="d-flex flex-row align-items-center">
                            <div
                                class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger post-profile-photo mr-3">
                                <img src="{{asset('images/profiles/profile-1.jpg')}}" alt="..."
                                    style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                            </div>
                            <span class="font-weight-bold margin-element10">{{$post->user->name}}</span>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="">
                            @if ($post->images->count() == 1)
                            <img class="img-fluid" src="{{asset($post->images->first()->url_image)}}" />
                            @else
                            <div id="carouselPostIndicators" class="carousel slide" data-bs-ride="carousel">
                                @php
                                    $i = 1;
                                @endphp
                                <div class="carousel-indicators">
                                    @foreach ($post->images as $image)
                                    <button type="button" data-bs-target="#carouselPostIndicators" data-bs-slide-to="{{$i-1}}" class="active" 
                                    @if($i==1)
                                    aria-current="true"
                                    @endif     
                                    aria-label="Slide {{$i}}"></button>
                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach
                                </div>
                                @php
                                    $i = 1;
                                @endphp
                                <div class="carousel-inner">
                                    @foreach ($post->images as $image)
                                    <div class="carousel-item 
                                    @if($i == 1)
                                    active
                                    @endif
                                    ">
                                        <img class="img-fluid" src="{{asset($image->url_image)}}" />
                                    </div>
                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPostIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselPostIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            @endif
                        </div>

                        <div class="d-flex flex-row justify-content-between pl-3 pr-3 pt-3 pb-1 margin-element10">
                            <ul class="list-inline d-flex flex-row align-items-center m-0">
                                <li class="list-inline-item">
                                    <button class="btn p-0">
                                        <i class="fa-regular fa-heart fa-2x" id="heart" for="{{$post->id}}"></i>
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

                        
                    </div>
                </div>
                <!-- END OF THE POST -->
            </div>
        </div>
    
        <div class="col-4">
            <div class="pl-3 pr-3 pb-2 margin-element20">
                <strong class="d-block" >{{$post->likes->count()}} likes</strong>
                <strong class="d-block">{{$post->user->name}}</strong>
                <p class="d-block mb-1">{{$post->body}}</p>
                <button class="btn p-0">
                    <span class="text-muted">View all {{$post->comments->count()}} comments</span>
                </button>
                @if($post->comments->count()>0)
                    <div>
                        @php
                            $j=1;
                        @endphp
                        @foreach ($post->comments as $comment)
                        <strong class="d-block">{{$users->keyBy($comment->user_id)->first()->name}}</strong>
                        <span>{{$comment->body}}</span>
                        @php
                            $j++;
                        @endphp
                        @if ($j>3)
                            @break
                        @endif
                        @endforeach
                        <div>
                            
                        </div>
                    </div>    
                    @endif
                <small class="text-muted">4 HOURS AGO</small>
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
@endsection