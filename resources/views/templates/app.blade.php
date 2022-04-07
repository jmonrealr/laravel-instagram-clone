<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Instagram clone') }}</title>


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- JS -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- FONTAWESOME -->
        <script src="https://kit.fontawesome.com/a36cdd0297.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container justify-content-center">
                <div class="d-flex flex-row justify-content-between align-items-center col-9">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('images/ig-logo.png')}}" alt="" loading="lazy">
                    </a>
                    <div>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <div class="d-flex flex-row">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <a href="{{route('home')}}" class="link-menu">
                                    <i class="fa-solid fa-house fa-lg"></i>
                                </a>
                            </li>
                            <li class="list-inline-item ml-2">
                                <button type="button" class="btn link-menu" data-bs-toggle="modal" data-bs-target="#ModalCreatePost">
                                    <i class="fa-regular fa-square-plus fa-lg"></i>
                                </button>
                            </li>
                            <li class="list-inline-item ml-2">
                                <a href="#" class="link-menu">
                                    <i class="fa-regular fa-heart fa-lg"></i>
                                </a>
                            </li>
                            <li class="list-inline-item ml-2 align-middle">
                                <a href="#" class="link-menu">
                                    <div
                                        class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border topbar-profile-photo">
                                        <img src="{{asset('images/profiles/profile-6.jpg')}}" alt="..."
                                            style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Create Post Modal -->
        @include('home.create')

        <main class="container">
            @yield('content')
        </main>
    </body>
</html>
