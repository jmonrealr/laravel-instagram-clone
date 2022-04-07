@extends('templates.app')

@section('content')
<div class="mt-4">
    <div class="container d-flex justify-content-center">
        @auth
            @include('home.index')    
        @else
            <script>window.location = "{{route('login')}}";</script> 
        @endauth
        
    </div>
</div>
@endsection
