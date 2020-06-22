@extends('layouts.app')
@section('title')
  @if(isset($user))
     Editar Usuário
  @else
   Criar Usuário
  @endif
@endsection

@section('titulo')
  @if(isset($user))
     Editar Usuário
  @else
   Criar Usuário
  @endif

@endsection


@section('content')


      <div class="card border col-12">
      @if(isset($user))
         <form id="user_form" action="{{route('user.update',$user->id)}}" onsubmit="return checkConfirmPassword(this)" method="post" enctype="multipart/form-data">
          {!! method_field('PUT') !!}
      @else

        <form id="user_form" action="{{route('user.store')}}" method="post" onsubmit="return checkConfirmPassword(this)" enctype="multipart/form-data">
      @endif
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label> Primeiro Nome</label>
                  <input type="text" name="first_name" id="first_name" value="{{$user->first_name ?? old('first_name')}}" class="form-control" placeholder="Primeiro Nome">
                  <span class="error">{{ $errors->first('first_name') }}</span> 
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label> Apelido</label>
                  <input type="text" name="surname" id="surname" value="{{$user->surname ?? old('surname')}}" class="form-control" placeholder="Apelido">
                  <span class="error">{{ $errors->first('surname') }}</span> 
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                <label> Comando Províncial</label>
                <select class="form-control" name="provincial_comand_id" id="provincial_comand_id">
                  <option value="{{$user->provincial_comand->id ?? old('provincial_comand_id') }}" >{{$user->provincial_comand->province ?? 'Selecionar Comando Províncial'}}</option>

                  @forelse($comands as $comand)
                    <option value="{{$comand->id}}">{{$comand->province}}</option>
                  @empty

                  @endforelse
                   
                </select>
                 <span class="error">{{ $errors->first('provincial_comand_id') }}</span> 
              </div>
              </div>
          </div>


        <div class="row">

          
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                <label> Nível</label>
                  <select class="form-control" name="permission" id="permission">
                    <option value="{{ $user->permission ?? old('permission') }}" >
                      @if(isset($user))
                        {{$user->getPermission($user->permission)}}
                      @else
                       Seleccionar Nível
                      @endif

                    </option>
                    <option value="2">Nivel 2</option>
                    <option value="3">Nivel 3</option>
                    <option value="4">Nivel 4</option>
                    <option value="4">Nivel 5</option>
                    <option value="6">Comandante províncial</option>
                    <option value="7">Administrador</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label> Email</label>
                  <input type="text" name="email" id="email" value="{{$user->email ?? old('email')}}" class="form-control" placeholder="Endereo electronico">
                      <span class="error">{{ $errors->first('email') }}</span> 
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label> Celular</label>
                  <input type="text" name="contact" id="contact" maxlength="9" value="{{$user->contact ?? old('contact')}}" class="form-control" placeholder="Número de telefone">
                    <span class="error">{{ $errors->first('contact') }}</span> 
                </div>
              </div>       
          </div>
           <div class="row">

             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label> Senha</label>
                    <input type="password" name="password" id="password" value="" class="form-control" placeholder="Senha">
                   </div>
              </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label> Confirmar Senha</label>
                    <input type="password" name="confirm_password" id="confirm_password" value=""  onchange="check()" class="form-control" placeholder="Confirmar senha">
                    <span id='message' class="error"></span>
                   </div>
              </div>

               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                <label> Fotografia</label>
                  <input type="file" name=image value="" class="form-control" placeholder="Carregar foto">
              </div>
              </div>
          </div>
  
  

          <div class="row" style="float:right;">
          
             <div class="form-group" style="padding-right: 15px;">
               <button  type="reset" class="btn btn-secondary btn-sm "><i class="fas fa-times"></i>
                            Limpar formulário
                          </button> 
              
                <button  type="submit" class="btn btn-secondary btn-sm" id="submit"><i class="fas fa-save"></i>
                  Salvar
                </button> 
            </div>
          </div>
        </div>
      </form>
    </div> 
        
                     
@endsection

@push('scripts')
  <script src="{{asset('plugins/jquery/jquery.js')}}"></script>  
  <script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>  
  <script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation.js')}}"></script>

@endpush

