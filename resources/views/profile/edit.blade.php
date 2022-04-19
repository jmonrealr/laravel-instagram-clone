@extends('templates.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 10px;">
        <div class="card">
            <div class="card-body">
                <div class="row">
{{--                    <div class="col-4" styel="" style="margin-top: 10px;">--}}
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
                            <form method="POST" action="{{ route('user-profile-information.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-4">
                                        <div class="row" style="margin-top: 10px;">
                                            <label for="name" class="form-label ">{{ __('Username') }}</label>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="row" style="margin-top: 10px;">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                                   name="name" placeholder="Ingresa un nombre de usuario" autofocus
                                                   value="{{ old('name') ?? auth()->user()->name }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                                   name="email" placeholder="Ingresa un correo electronico"
                                                   value="{{ old('email') ?? auth()->user()->email }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Update Profile') }}</button>
                            </form>



                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
