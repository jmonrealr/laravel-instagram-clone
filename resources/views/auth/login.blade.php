@extends('templates.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <img src="{{ asset('images/cel.png') }}" alt="Logo" class="col-12">
            </div>
            <div class="col-md-3">

                <div class="card" style="margin-top: 50px">

                    <div class="card-body">
                    <img src="{{ asset('images/logotitle.png') }}" alt="Logo" class="col-8 mx-auto d-block" style="margin-top: 20px">
                        <form method="POST" action="{{ route('login') }}" style="margin-top: 20px">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email"
                                           placeholder="Phone number,username, or eamil" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 10px">
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

                            <div class="form-group row" style="margin-top: 10px">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="margin-top: 10px">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary col-12">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="row" style="margin-top: 20px">
                            <hr class="col-4 justify-content-center"><h class="text-muted col-4 justify-content-center" style="text-align: center; position: relative; font-size: 12px">OR</h><hr class="col-4">
                        </div>

                        @if (Route::has('password.request'))
                            <a class="col-12 btn btn-link justify-content-center" href="{{ route('password.request') }}" style="text-decoration: none;">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                    No tienes cuenta?<a href="{{route('register')}}" class="col-md-4 col-form-label text-md-right" style="text-decoration: none;"> {{ __('Register') }} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
