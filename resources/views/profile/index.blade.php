@extends('templates.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row" style="margin-top: 10px;">
            <div class="col-4 justify-content-center">
                @if(is_null($user->profile->url_image))
                    <img src="{{ asset('images/profiles/profile-1.jpg') }}" alt="Logo" class="rounded-circle" style="width: 300px;border: 1px solid #e4e3e1">
                @else
                    <img src="{{ asset($user->profile->url_image) }}" alt="Logo" class="rounded-circle" style="width: 300px;border: 1px solid #e4e3e1">
                @endif
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-4">{{ $user->name }}</div>
                    @if($user->name != auth()->user()->name)
                        @forelse($user->followers as $follower)
                            @if($follower->user_follower->name == auth()->user()->name)
                                <form enctype="multipart/form-data" method="post" action="{{ route('followers.delete', $follower->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input name="user_id" hidden value="{{$user->id}}">
                                    <button type="submit" class="btn btn-primary btn-sm p-0 btn-ig">Unfollow</button>
                                </form>
                            @endif
                        @empty
                            <form enctype="multipart/form-data" method="post" action="{{ route('followers.store') }}">
                                @csrf
                                <input name="user_id" hidden value="{{$user->id}}">
                                <button type="submit" class="btn btn-primary btn-sm p-0 btn-ig">Follow</button>
                            </form>
                        @endforelse
                    @endif
                </div>
                <br>
                <div class="row">
                    <div class="col-2">@isset($posts) {{ count($posts) }} @endisset publicaciones</div>
                    <div class="col-2">@isset($user->followers) {{ count($user->followers) }} @endisset seguidores</div>
                    <div class="col-2">@isset($user->following) {{ count($user->following) }} @endisset seguidos</div>
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
                            @foreach($user->posts as $post)
                                <div class="col-4">
                                    <a href="{{ route('post.show', $post->id) }}"><img class="img-fluid" src="{{asset($post->image->url_image)}}" style="margin-top: 10px;"/></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
