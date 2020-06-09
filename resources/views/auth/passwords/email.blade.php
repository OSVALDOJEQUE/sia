@extends('layouts.auth')

@section('title','Fogot Password')

@section('content')
    
    <form id="login_form" action="{{route('sendEmailToken')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <div class="form-single">
                <input type="text" name="email" id="email" class="form-control" placeholder="Introduza o email do usuário" />
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-secondary btn-lg btn-block" >Enviar Email de redifinição</button>
        </div>
    </form>
    <a href="{{route('login')}}" class="link">Login</a>

@endsection
