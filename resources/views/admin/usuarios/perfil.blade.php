@extends('layouts.app')

@section('title','Meu Perfil')
@section('titulo','Meu Perfil')


@section('content')
        <div class="row">
            <div class="col-md-10">
              <div class="card agent-box">
                <div class="card-body p-0">
                  <dl class="row-grid">

                   <dt>Nome:</dt>
                   <dd>{{Auth::User()->name}}</dd>

                   <dt>E-mail</dt>
                   <dd>{{Auth::User()->email}}</dd>
                   
                   <dt>Nivel</dt>
                   <dd>{{Auth::User()->category}}</dd>
                  </dl>


                  <a href="" data-toggle="modal" data-target="#editPerfil" class="link btn btn-secondary btn-sm"><i class="far fa-edit"></i> Editar
                  </a>
                                     
                </div>
             </div>
            </div>  
          </div>


          <div class="modal" id="editPerfil" data-backdrop="fade" >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Cabecalho Modal -->
                    <div class="modal-header">
                        <h1 class="modal-title">Editar Perfil</h1>
                        <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Corpo Modal-->
                    <div class="modal-body">
                      <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                       </div>

                        <form id="perfil_form" id="perfil_form" method="post" action="{{route('perfil.update',Auth::User()->id)}}"  enctype="multipart/form-data">
                                {!! method_field('PUT') !!}
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-single">
                                            <label> Nome</label>
                                            <input type="text" name="name" id="name" value="{{Auth::User()->name ?? old('name')}}" class="form-control" placeholder="Nome do usuário">
                                            <span class="error">{{ $errors->first('name') }}</span>
                                        </div>
                                    </div>
                        
                                    <div class="form-group">
                                        <div class="form-single">
                                            <label> Email</label>
                                            <input type="text" name="email" required value="{{Auth::User()->email ?? old('email')}}" class="form-control">
                                             <span class="error">{{ $errors->first('email') }}</span>
                                        </div>
                                    </div>


                                      <div class="collapse multi-collapse" id="alterarSenha" >
                                        
                                        <div class="form-group">
                                        <div class="form-single">
                                            <label> Antiga Senha</label>
                                            <input type="password" name="old_password" id="old_password" value="" class="form-control" placeholder="Senha">
                                       </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="form-single">
                                              <label>Nova senha</label>
                                              <input type="password" name="password" id="password" value="" class="form-control" placeholder="Senha">
                                         </div>
                                      </div>

                                      <div class="form-group">
                                          
                                        <label> Confirmar Senha</label>
                                        <div class="form-single">
                                          <input type="password" name="confirm_password" id="confirm_password" value="" class="form-control" placeholder="Confirmar senha">
                                        </div>
                                      </div>

                                    </div>
                      
                     
                              <div class="form-group">

                              <button type="reset" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar
                               </button>
                              <button type="submit" class="btn btn-secondary btn-sm" >Salvar</button>

                               <a data-toggle="collapse" href="#alterarSenha" role="button" aria-expanded="true" aria-controls="alterarSenha" class="a" style="float: right;" >Alterar senha
                                      </a>
                           
                             </div>
                   
                      </form>  
                    </div>
                </div>
            </div>     
        </div>
@endsection


@push('scripts')
<script src="{{asset('plugins/jquery/jquery.js')}}"></script>  
<script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>  
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation.js')}}"></script>
@endpush
