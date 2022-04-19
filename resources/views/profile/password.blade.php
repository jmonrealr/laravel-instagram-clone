@extends('templates.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 10px;">
        <div class="card">
            <div class="card-body">
                <div class="row">
{{--                    <div class="col-4" style="margin-top: 10px;">--}}
{{--                        <ul class="list-group list-group-flush">--}}
{{--                            <li class="list-group-item"><a href="{{route('profile.settings')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver" style="text-decoration: none; color:black;">Profile</a></li>--}}
{{--                            <li class="list-group-item"><a href="" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver" style="text-decoration: none; color:black;">Username and Email</a></li>--}}
{{--                            <li class="list-group-item"><a href="" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver" style="text-decoration: none; color:black;">Password</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="col-1" style="margin-top: 10px;">
                        <div class="d-flex" style="height: 200px;">
                            <div class="vr"></div>
                        </div>
                    </div>
                    <div class="col-6" style="margin-top: 10px;">
                            <form method="POST" action="{{ route('user-password.update') }}">
                                @csrf
                                @method('PUT')
                                @if(session('status') == "password-updated")
                                    <div class="alert alert-success" role="alert">
                                        Contraseña actualizada satisfactoriamente.
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-4">
                                        <div class="row" style="margin-top: 10px;">
                                            <label for="current_password" class="form-label ">{{ __('Current Password') }}</label>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <label for="password-confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                    <div class="row" style="margin-top: 10px;">
                                            <input id="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                                                name="current_password" placeholder="Ingresa tu contraseña actual" autofocus>
                                            @error('current_password', 'updatePassword')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <input id="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                                                name="password" required autocomplete="new-password"
                                                placeholder="Ingresa tu nueva contraseña">
                                            @error('password', 'updatePassword')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                                required autocomplete="new-password" placeholder="Confirma tu nueva contraseña">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Change Password') }}</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
