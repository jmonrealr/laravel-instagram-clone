@extends('templates.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 10px;">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4" style="margin-top: 10px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{route('profile.settings')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver" style="text-decoration: none; color:black;">Profile</a></li>
                            <li class="list-group-item"><a href="" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver" style="text-decoration: none; color:black;">Username and Email</a></li>
                            <li class="list-group-item"><a href="" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver" style="text-decoration: none; color:black;">Password</a></li>
                        </ul>
                    </div>
                    <div class="col-1" style="margin-top: 10px;">
                        <div class="d-flex" style="height: 200px;">
                            <div class="vr"></div>
                        </div>
                    </div>
                    <div class="col-6" style="margin-top: 10px;">


                            <form>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="row" style="margin-top: 10px;">
                                            <label for="exampleInputEmail1" class="form-label ">Old password</label>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <label for="exampleInputEmail1" class="form-label">New password</label>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <label for="exampleInputEmail1" class="form-label">New password</label>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                    <div class="row" style="margin-top: 10px;">
                                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>



                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection