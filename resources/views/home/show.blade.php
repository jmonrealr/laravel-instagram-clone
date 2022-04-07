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

                        
                    </div>
                </div>
                <!-- END OF THE POST -->
            </div>
        </div>
    
        <div class="col-4">
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
</div>
@endsection