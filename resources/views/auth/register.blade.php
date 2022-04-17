@extends('templates.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-3">
                <br>
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('images/logotitle.png') }}" alt="Logo" class="col-8 mx-auto d-block">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-muted" style="text-align:center;">
                                Sign up to see photos and videos from your friends.
                            </div>
                        </div>
                    
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <br>
                            <div class="form-group row">
                                
                                <div class="col-md-12">
                                    <input id="phone_or_email" type="text"
                                           class="form-control @error('email') is-invalid @enderror" name="phone_or_email"
                                           value="{{ old('email') }}" required autocomplete="phone_or_email"
                                           placeholder="Mobile Number or eamil" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <br>
                            <div class="form-group row">
                                
                                <div class="col-md-12">
                                    <input id="full_name" type="text"
                                           class="form-control @error('email') is-invalid @enderror" name="full_name"
                                           value="{{ old('email') }}" required autocomplete="full_name"
                                           placeholder="Full name" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <br>
                            <div class="form-group row">
                                
                                <div class="col-md-12">
                                    <input id="Username" type="text"
                                           class="form-control @error('email') is-invalid @enderror" name="Username"
                                           value="{{ old('email') }}" required autocomplete="Username"
                                           placeholder="Username" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <br>
                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <br>

                            <div class="form-group ">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary col-12">
                                        {{ __('Sign up') }}
                                    </button>

                                    
                                </div>
                            </div>
                        </form>
                                                           
                    </div>
                </div>

                <br>
                <div class="card">
                    <div class="card-body">
                    Tienes una cuenta?<a href="{{route('login')}}" class="col-md-4 col-form-label text-md-right" style="text-decoration: none;"> Log in </a>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
