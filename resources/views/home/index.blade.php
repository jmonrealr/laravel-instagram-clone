
<div class="col-9">
    <div class="row">
        <div class="col-8">
            <!-- START OF STORIES -->
            <div class="card">
                <div class="card-body d-flex justify-content-start">
                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item">
                            <button class="btn p-0 m-0">
                                <div class="d-flex flex-column align-items-center">
                                    <div
                                        class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger story-profile-photo">
                                        <img src="{{asset('images/profiles/profile-1.jpg')}}" alt="..."
                                            style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                    </div>
                                    <small>samkolder</small>
                                </div>
                            </button>
                        </li>
                        <li class="list-inline-item">
                            <button class="btn p-0 m-0">
                                <div class="d-flex flex-column align-items-center">
                                    <div
                                        class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger story-profile-photo">
                                        <img src="{{asset('images/profiles/profile-2.jpg')}}" alt="..."
                                            style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                    </div>
                                    <small>petermckinnon</small>
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END OF STORIES -->

            <!-- START OF POSTS -->
            <div class="d-flex flex-column mt-4 mb-4">

                <div class="card">

                    <div class="card-header p-3">
                        <div class="d-flex flex-row align-items-center">
                            <div
                                class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger post-profile-photo mr-3">
                                <img src="{{asset('images/profiles/profile-1.jpg')}}" alt="..."
                                    style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                            </div>
                            <span class="font-weight-bold margin-element10">samkolder</span>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="">
                            <img class="img-fluid" src="{{asset('images/posts/post-1.jpg')}}" />
                        </div>

                        <div class="d-flex flex-row justify-content-between pl-3 pr-3 pt-3 pb-1 margin-element10">
                            <ul class="list-inline d-flex flex-row align-items-center m-0">
                                <li class="list-inline-item">
                                    <button class="btn p-0">
                                        <i class="fa-regular fa-heart fa-2x"></i>
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

                        <div class="pl-3 pr-3 pb-2 margin-element20">
                            <strong class="d-block" >365.354 likes</strong>
                            <strong class="d-block">samkolder</strong>
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

                        <div class="position-relative comment-box">
                            <form>
                                <input class="w-100 border-0 p-3 input-post" placeholder="Add a comment...">
                                <button class="btn btn-primary position-absolute btn-ig">Post</button>
                            </form>
                        </div>
                    </div>
                </div>
                @php
                    $j = 1;
                @endphp
                @foreach ($posts as $post)
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
                        @if ($post->images->count() == 1)
                        <img class="img-fluid" src="{{$post->images->first()->url_image}}" />
                        @else
                        <div id="carouselPostIndicators{{$j}}" class="carousel slide" data-bs-ride="carousel">
                            @php
                                $i = 1;
                            @endphp
                            <div class="carousel-indicators">
                                @foreach ($post->images as $image)
                                <button type="button" data-bs-target="#carouselPostIndicators{{$j}}" data-bs-slide-to="{{$i-1}}" class="active" 
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
                                    <img class="img-fluid" src="{{$image->url_image}}" />
                                </div>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPostIndicators{{$j}}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselPostIndicators{{$j}}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                        @endif

                        <div class="d-flex flex-row justify-content-between pl-3 pr-3 pt-3 pb-1 margin-element10">
                            <ul class="list-inline d-flex flex-row align-items-center m-0">
                                <li class="list-inline-item">
                                    <button class="btn p-0 like" for="{{$post->id}}">
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
                                        <i class="fa-solid fa-heart fa-2x" id="heart{{$post->id}}" for="2"></i>
                                        @else
                                        <i class="fa-regular fa-heart fa-2x " id="heart{{$post->id}}" for="1"></i>
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

                        <div class="pl-3 pr-3 pb-2 margin-element20">
                            <strong class="d-block" >{{$post->likes->count()}} 
                                @if($post->likes->count()==1)
                                like
                                @else
                                likes
                                @endif</strong>
                            <strong class="d-block">{{$post->user->name}}</strong>
                            <p class="d-block mb-1">{{$post->body}}</p>
                            @if($post->comments->count()>0)
                            <a href="{{route('post.show',$post->id)}}"><span class="text-muted">View all {{$post->comments->count()}} comments</span></a>
                            <div>
                                <div>
                                    <strong class="d-block">{{$users->keyBy($post->comments->first()->user_id)->first()->name}}</strong>
                                    <span>{{$post->comments->first()->body}}</span>
                                </div>
                                <div>
                                    <strong class="d-block">{{$users->keyBy($post->comments[1]->user_id)->first()->name}}</strong>
                                    <span>{{$post->comments[1]->body}}</span>
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
                @php
                    $j++;
                @endphp
                @endforeach
                
                <!-- END OF POSTS -->
            </div>
        </div>
    
    
        <div class="col-4">
            <div class="d-flex flex-row align-items-center">
                <div
                    class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sidenav-profile-photo">
                    <img src="{{asset('images/profiles/profile-6.jpg')}}" alt="..."
                        style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                </div>
                <div class="profile-info ml-3">
                    <span class="profile-info-username margin-element10">codingvenue</span>
                    <span class="profile-info-name margin-element10">Coding Venue</span>
                </div>
            </div>

            <div class="mt-4">
                <div class="d-flex flex-row justify-content-between">
                    <small class="text-muted font-weight-normal">Suggestions For You</small>
                    <small>See All</small>
                </div>
                <div>
                    <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                        <div class="d-flex flex-row align-items-center">
                            <div
                                class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                                <img src="{{asset('images/profiles/profile-3.jpg')}}" alt="..."
                                    style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                            </div>
                            <strong class="ml-3 sugest-username margin-element10">instagram</strong>
                        </div>
                        <button class="btn btn-primary btn-sm p-0 btn-ig ">Follow</button>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                        <div class="d-flex flex-row align-items-center">
                            <div
                                class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                                <img src="{{asset('images/profiles/profile-4.png')}}" alt="..."
                                    style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                            </div>
                            <strong class="ml-3 sugest-username margin-element10">dccomics</strong>
                        </div>
                        <button class="btn btn-primary btn-sm p-0 btn-ig ">Follow</button>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                        <div class="d-flex flex-row align-items-center">
                            <div
                                class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                                <img src="{{asset('images/profiles/profile-5.jpg')}}" alt="..."
                                    style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                            </div>
                            <strong class="ml-3 sugest-username margin-element10">thecw</strong>
                        </div>
                        <button class="btn btn-primary btn-sm p-0 btn-ig">Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">

@section('footer-scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
            }
        }); 
        $('.like').click(function(){
            const post = $(this).attr('for');
            const user = $('#user_id').val()
            const heart = $('#heart'.concat(post)).attr('for');

            console.log(heart);
            $.ajax({
                url:'like',
                data: {post,user,heart},
                type:'post',
                success: function(data){
                    
                },
                statusCode: {
                    201: function(e){
                        console.log("creado" + e);
                        $('#heart'.concat(post)).removeClass("fa-regular");
                        $('#heart'.concat(post)).addClass("fa-solid");
                    },
                    202: function(e){
                        console.log("borrado" + e);
                        $('#heart'.concat(post)).removeClass("fa-solid");
                        $('#heart'.concat(post)).addClass("fa-regular");
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