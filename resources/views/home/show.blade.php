@extends('templates.app')

@section('content')
<div class="col-9">
    <div class="row">
        <div class="col-8">
            <!-- START OF POST -->
            <div class="d-flex flex-column mt-4 mb-4">

                <div class="card" style="margin-top: 10px;">
                    <div class="card-header p-3">
                        <div class="d-flex flex-row align-items-center">
                            <div
                                class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger post-profile-photo mr-3">
                                <img src="{{asset($profile)}}" alt="..."
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

                        <div class="d-flex flex-row justify-content-between pl-3 pr-3 pt-3 pb-1 margin-element10" style="margin-top: 10px;">
                            <ul class="list-inline d-flex flex-row align-items-center m-0">
                                <li class="list-inline-item">
                                    <button class="btn p-0" for="{{$post->id}}">
                                        @php
                                            $flag = false;
                                        @endphp
                                        @foreach ($post->likes as $like)
                                            @if ($like->user_id == $post->user_id)
                                                @php
                                                    $flag = true;
                                                @endphp
                                                @break
                                            @endif
                                        @endforeach
                                        @if ($flag)
                                            <i class="fa-regular fa-heart fa-2x like" id="heart" for="2"></i>
                                        @else
                                            <i class="fa-regular fa-heart fa-2x like" id="heart" for="1"></i>
                                        @endif
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
                       
                        <strong class="d-block m-3" >{{$post->likes->count()}} likes</strong>
                    </div>
                   
                </div>
                <!-- END OF THE POST -->
            </div>
        </div>
    
        <div class="col-4 mt-5">
            <div class="mt-5 mb-4">
                
                <strong class="d-block">{{$post->user->name}}</strong>
                <p class="d-block mb-1">{{$post->body}}</p>
                
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
                <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
            </div>

            <div class="position-relative comment-box">
                <form>
                    <input class="w-100 border-0 p-3 input-post" id="comment-text" placeholder="Add a comment...">
                    <button class="btn btn-primary position-absolute btn-ig comment" for="{{$post->id}}">Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer-scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.like').click(function(){
            const post = $(this).attr('for');
            //const user = $('#user_id').val()
            const heart = $('#heart').attr('for');
            const user_id = $('#user_id').val()

            console.log(heart);
            $.ajax({
                url:'../like',
                data: {post,user_id,heart},
                type:'post',
                success: function(data){

                },
                statusCode: {
                    201: function(e){
                        console.log("creado" + e);
                        $('#heart').removeClass("fa-regular");
                        $('#heart').addClass("fa-solid");
                        //$('#like-test'.concat(post)).removeClass("fa-regular");
                    },
                    202: function(e){
                        console.log("borrado" + e);
                        $('#heart').removeClass("fa-solid");
                        $('#heart').addClass("fa-regular");
                    },
                    404: function(e){
                        console.log(e);
                    }
                },
                error:function(x,xs,xt){
                    //window.open(JSON.stringify(x));
                    alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
                }
            });
        });

        $('.comment').click(function(){
            const post = $(this).attr('for');
            const user = $('#user_id').val()
            const comment = $('#comment-text').val();
            console.log(comment);
            $.ajax({
                url:'../comment',
                data: {post,user,comment},
                type:'post',
                success: function(data){

                },
                statusCode: {
                    201: function(e){
                        console.log("creado" + e);
                        //$('#like-test'.concat(post)).removeClass("fa-regular");
                    },
                    404: function(e){
                        console.log(e);
                    }
                },
                error:function(x,xs,xt){
                    //window.open(JSON.stringify(x));
                    alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
                }
            });
        });

        $('.delete').click(function(){
            const post = $(this).attr('for');
            const user = $('#user_id').val()
            $.ajax({
                url:'delete',
                data: {post,user},
                type:'post',
                success: function(data){

                },
                statusCode: {
                    202: function(e){
                        console.log("eliminado " + e);
                        //$('#like-test'.concat(post)).removeClass("fa-regular");
                    },
                    404: function(e){
                        console.log(e);
                    }
                },
                error:function(x,xs,xt){
                    //window.open(JSON.stringify(x));
                    alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
                }
            });
        });
    </script>
@endsection