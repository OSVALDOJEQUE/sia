@extends('layouts.auth')

@section('title','Reset Password')

@section('content')
    
    <form id="resetPassword_form" action="{{route('passwordREset',$token)}}" onsubmit="return checkConfirmPassword(this)" method="post">
        @csrf
        <div class="form-group">
            <label>Nova senha</label>                                
            <div class="form-single">
                <input type="password" name="password" id="password" class="form-control" placeholder="Nova senha" />
                <span class="text-danger">{{ $errors->first('password') }}</span>
            </div>
        </div>

            <div class="form-group">
            <label>Confirmar senha</label>                                
            <div class="form-single">
                <input type="password" name="confirm_password" id="confirm_password" value=""  onchange="check()" class="form-control" placeholder="Confirmar senha">
                <span id='message' class="error"></span>
                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-secondary btn-lg btn-block" >Redefinir Senha</button>
        </div>
    </form>
    <a href="{{route('login')}}" class="link">Login</a>

@endsection
