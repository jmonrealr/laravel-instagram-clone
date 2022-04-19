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

        <!-- JQuery-Ajax-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- FONTAWESOME -->
        <script src="https://kit.fontawesome.com/a36cdd0297.js" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        @yield('extra-css')
    </head>
    <body>
        @auth
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container justify-content-center">
                    <div class="d-flex flex-row justify-content-between align-items-center col-9">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('images/ig-logo.png')}}" alt="" loading="lazy">
                        </a>
                        <div class="d-flex">
                            <form method="POST" class="form-inline my-2 my-lg-0" action="{{ route('profile.show')}}">
                                @csrf
                                <select name="users" class="form-control me-2 select2">
                                    <option></option>
                                    @foreach($data as $user)
                                        <option value="{{$user->name}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toogle" type="button" id="profile-dropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="background-color: white; border: none;background: none;">
                                            <div
                                                class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border topbar-profile-photo">
                                                    <img src="{{asset('images/profiles/profile-6.jpg')}}" alt="..."
                                                        style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                            </div>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="profile-dropdown" >
                                            <li><a href="{{route('profile.index', Auth::user()->name)}}" class="dropdown-item">Profile</a></li>
                                            <li><a href="{{route('profile.settings')}}" class="dropdown-item">Settings</a></li>
                                            <li><a href="{{route('profile.edit')}}" class="dropdown-item">User Settings</a></li>
                                            <li><a href="{{route('profile.change-password')}}" class="dropdown-item">Change Password</a></li>
                                            <li>
                                                <a href="{{route('logout')}}" class="dropdown-item"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Log Out</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Create Post Modal -->
            @include('home.create')

        @endauth

        <main class="container">
            @yield('content')
        </main>

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script type="text/javascript" defer>
            $(document).ready(function() {
                $('.select2').select2({
                    placeholder: 'Search a user'
                });
            });
        </script>
        @yield('footer-scripts')
    </body>
</html>
