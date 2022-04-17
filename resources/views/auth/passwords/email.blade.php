@extends('templates.app')

@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card"> 
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <h4 class="col-md-12  justify-content-center" style="text-align:center;">Trouble Logging In?</h4>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 text-muted justify-content-center" style="text-align:Center;">
                            Enter your email, phone, or username and we'll send you a link to get back into your account.
                        </div>
                    </div>
                    <br>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                                placeholder="Email,Phone or Username">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row ">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <hr class="col-4 justify-content-center"><h4 class="text-muted col-4 justify-content-center" style="text-align: center; position: relative; ">OR</h4><hr class="col-4">
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 justify-content-center" style="text-align: center;">
                                <a href="{{route('register')}}" class="col-md-12 col-form-label justify-content-center" style="text-decoration: none; color:black; position: relative; text-align:center;">Create New Account</a>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <div class="card-footer justify-content-center">
                    <div class="row">
                        <div class="col-md-12" style="text-align:center;">
                            <a href="{{route('login')}}" class="col-md-12 col-form-label justify-content-center" style="text-decoration: none; color:black; position: relative; text-align:center;">Back To Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
