@extends('layouts.auth')

@section('title','Login')

@section('content')
    
    <form id="login_form" action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <div class="form-single">
                <input type="text" name="email" id="email" class="form-control" placeholder="Endereço electrónico" />
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
        </div>

        <div class="form-group">
            <label>Senha</label>                                
            <div class="form-single">
                <input type="password" name="password" id="password" class="form-control" placeholder="Senha" />
                <span class="text-danger">{{ $errors->first('password') }}</span>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-secondary btn-lg btn-block" >Entrar</button>
        </div>
    </form>
    <a href="{{route('password.email')}}" class="link">Esqueceu se da senha?</a>

@endsection
