
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
                        <div class="">
                            @foreach ($post->images as $image)
                            <img class="img-fluid" src="{{$image->url_image}}" />
                            @endforeach
                            
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
