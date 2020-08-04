


@if(Auth::User()->category==0)
        <div class="card tab-content" id="tabContent">
          
            <div class="tab-pane show active" id="nav-ocorrencias" role="tabpainel" area-labelledy="nav-ocorrencias-tab">
                <div style="float: left; padding-bottom:10px;">
                    <a href=""  data-target="#newOcorrencia" data-toggle="modal" class="btn btn-secondary btn-sm" title="Adicionar nova ocorrência"><i class="fas fa-plus"></i>Nova</a>
                 </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="ocorrencias">
                            <thead>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Tipo de Violação</th>
                                <th>Estado</th>
                                <th>Jurista</th>
                                <th>Data</th>
                                <th width="2%"></th>
                                 @if(Auth::User()->category!=12)
                                <th width="2%"></th>
                                <th width="2%"></th>
                                @endif
                            </thead>

                            <tbody>
                                @forelse($ocorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>{{$ocorrencia->estado}}</td>
                                    <td>
                                      @forelse($ocorrencia->juristas as $jurista)
                                        {{$jurista->name}}

                                      @empty
                                       Por Alocar
                                      @endforelse

                                    </td>
                                    <td>{{$ocorrencia->created_at}}</td>
                                    <td>
                                        <a href="{{route('ocorrencia.mostrar',$ocorrencia->id)}}">
                                            <i class="far fa-eye"> </i>
                                        </a>

                                    </td>
                                   @if(Auth::User()->category!=12)
                                    <td>
                                        <a class="nav-item nav-link" data-toggle="dropdown" title="Operações"><i class="fas fa-tools"></i></a>
                                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                                          
                                            <a href="{{route('ocorrencia.estado',['id'=>$ocorrencia->id,'estado'=>'Resolvida' ])}}" class="dropdown-item link" >Marcar como Resolvida</a>
                                           
                                            <a href="{{ route('chat', $ocorrencia->id) }}" class="dropdown-item link">Mensagens</a>
                                          </div>
                                    </td>
                                     <td>
                                       <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt" title="Remover"></i>
                                                </a>
                                    </td>
                                    @endif
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                            
                        </table>
                        
                    </div> 
                </div>
                
            </div>


            <div class="tab-pane show" id="nav-novas" role="tabpainel" area-labelledy="nav-novas-tab">
                <div style="float: left; padding-bottom:10px;">
                    <a  href=""  data-target="#newOcorrencia" data-toggle="modal" class="btn btn-secondary btn-sm" title="Adicionar nova ocorrência"><i class="fas fa-plus"></i>Nova</a>
                 </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="novas">
                            <thead>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Tipo de Violação</th>
                                <th>Jurista</th>
                                <th>Data</th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                            </thead>

                            <tbody>
                                @forelse($novasOcorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>
                                      @forelse($ocorrencia->juristas as $jurista)
                                        {{$jurista->name}}

                                      @empty
                                       Por Alocar
                                      @endforelse

                                    </td>
                                    <td>{{$ocorrencia->created_at}}</td>
                                       <td>
                                        <a href="{{route('ocorrencia.mostrar',$ocorrencia->id)}}">
                                            <i class="far fa-eye"> </i>
                                        </a>

                                    </td>
                                    <td>
                                        <a class="nav-item nav-link" data-toggle="dropdown" title="Operações"><i class="fas fa-tools"></i></a>
                                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                                           @if(Auth::User()->category!=12)
                                            <a href="{{route('ocorrencia.estado',['id'=>$ocorrencia->id,'estado'=>'Resolvida' ])}}" class="dropdown-item link" >Marcar como Resolvida</a>
                                           @endif
                                            <a href="{{ route('chat', $ocorrencia->id) }}" class="dropdown-item link">Mensagens</a>
                                          </div>
                                    </td>
                                     <td>
                                       <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt " title="Remover"></i>
                                                </a>
                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                            
                        </table>
                        
                    </div> 
                </div>
                
            </div>

              <div class="tab-pane show " id="nav-seguimento" role="tabpainel" area-labelledy="nav-ocorrencias-tab">
                <div style="float: left; padding-bottom:10px;">
                    <a  href=""  data-target="#newOcorrencia" data-toggle="modal" class="btn btn-secondary btn-sm" title="Adicionar nova ocorrência"><i class="fas fa-plus"></i>Nova</a>
                 </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="seguimento">
                            <thead>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Tipo de Violação</th>
                                <th>Jurista</th>
                                <th>Data</th>
                                <th width="2%"></th>
                                <th width="2%"></th>
                                <th width="2%"></th>
                            </thead>

                            <tbody>
                                @forelse($seguimentoOcorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>
                                      @forelse($ocorrencia->juristas as $jurista)
                                        {{$jurista->name}}

                                      @empty
                                       Por Alocar
                                      @endforelse

                                    </td>
                                    <td>{{$ocorrencia->created_at}}</td>
                                       <td>
                                        <a href="{{route('ocorrencia.mostrar',$ocorrencia->id)}}">
                                            <i class="far fa-eye"> </i>
                                        </a>

                                    </td>
                                    <td>
                                        <a class="nav-item nav-link" data-toggle="dropdown" title="Operações"><i class="fas fa-tools"></i></a>
                                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                                           @if(Auth::User()->category!=12)
                                            <a href="{{route('ocorrencia.estado',['id'=>$ocorrencia->id,'estado'=>'Resolvida' ])}}" class="dropdown-item link" >Marcar como Resolvida</a>
                                           @endif
                                            <a href="{{ route('chat', $ocorrencia->id) }}" class="dropdown-item link">Mensagens</a>
                                          </div>
                                    </td>
                                     <td>
                                       <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt" title="Remover"></i>
                                                </a>
                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                            
                        </table>
                        
                    </div> 
                </div>
                
            </div>

                <div class="tab-pane show " id="nav-resolvidas" role="tabpainel" area-labelledy="nav-resolvidas-tab">
                    <div style="float: left; padding-bottom:10px;">
                    <a  href=""  data-target="#newOcorrencia" data-toggle="modal" class="btn btn-secondary btn-sm" title="Adicionar nova ocorrência"><i class="fas fa-plus"></i>Nova</a>
                 </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="resolvidas">
                            <thead>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Tipo de Violação</th>
                                <th>Jurista</th>
                                <th>Data</th>
                                <th width="2%"></th>
                                <th width="2%"></th>
                                <th width="2%"></th>
                            </thead>

                            <tbody>
                                @forelse($resolvidasOcorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>
                                      @forelse($ocorrencia->juristas as $jurista)
                                        {{$jurista->name}}

                                      @empty
                                       Por Alocar
                                      @endforelse

                                    </td>
                                    <td>{{$ocorrencia->created_at}}</td>
                                       <td>
                                        <a href="{{route('ocorrencia.mostrar',$ocorrencia->id)}}">
                                            <i class="far fa-eye"> </i>
                                        </a>

                                    </td>
                                    <td>
                                        <a class="nav-item nav-link" data-toggle="dropdown" title="Operações"><i class="fas fa-tools"></i></a>
                                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                                          
                                            <a href="{{ route('chat', $ocorrencia->id) }}" class="dropdown-item link">Mensagens</a>
                                          </div>
                                    </td>
                                     <td>
                                       <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt" title="Remover"></i>
                                                </a>
                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                            
                        </table>
                        
                    </div> 
                </div>
                
            </div>


            <div class="tab-pane show " id="nav-chats" role="tabpainel" area-labelledy="nav-chats-tab">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="chats">
                            <thead>
                                <th>De</th>
                                <th>Conteúdo</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Tipo de Violação</th>
                                <th>Data</th>
                                <th width="5%"></th>
                         <!--        <th width="5%"></th>-->
                            </thead>

                            <tbody>
                                @forelse($chatOcorrencias as $ocorrencia)
                                <tr>
                                    <th>{{Auth::User()->getCategory($ocorrencia->emissor) }}</th>
                                    <td>{{$ocorrencia->conteudo}}</td>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>{{$ocorrencia->created_at}}</td>
                                    <td>
                                        <a href="{{ route('chat', $ocorrencia->ocorrencia_id) }}"><i class="far fa-eye" title="Ver Conversa"> </i></a>
                                    </td>
                                  
                                     <td>
                                      <!--  <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt " title="Remover"></i>
                                                </a> -->
                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                            
                        </table>
                        
                    </div> 
                </div>
                
            </div>


        </div>
    <div class="modal " id="newOcorrencia" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!--  Cabecalho Modal -->
                    <div class="modal-header">
                      <h1>Nova Ocorrência</h1>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Corpo Modal -->
                    <div class="modal-body">
                    
                       <form id="ocorrencia_form" name="ocorrencia_form"  method="post" action="{{route('ocorrencia.store')}}">
                           @csrf

                            <div class="form-group">
                              <label>Jornalista</label>
                              <div class="form-single ">
                                  <select class="form-control" name="serie" id="serie" >
                               <option  value="{{old('jornalista')}}">Selecione a Jornalista</option>
                               @forelse($jornalistas as $jornalista)
                                <option value="{{$jornalista->serie}}">{{$jornalista->nome}}</option>
                               @empty
                                Sem Jornalistas
                               @endforelse
                             </select>
                              </div>
                          </div>

                            <div class="form-group">
                              <label>Tipo de violação</label>
                              <div class="form-single ">
                                  <select class="form-control" name="nivel" id="nivel" >
                               <option  value="{{old('nivel')}}" >Selecione o tipo de violação</option>
                                <option value="Agressões físicas">Agressões físicas</option>
                                <option value="Assaltos">Assaltos</option>
                                <option value="Censuras">Censuras</option>
                                <option value="Detenções">Detenções</option>
                                <option value="Legislações">Legislações</option>
                                <option value="Ameaças">Ameaças</option>
                                <option value="Violações públicas da liberdade de expressão">Violações públicas da liberdade de expressão</option>
                             </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Descrição</label>
                              <div class="form-single ">
                                 <textarea name="reason" id="reason" class="form-control"  placeholder="Descrição" value="{{old('descricao')}}"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Província</label>
                              <div class="form-single ">
                                  <select class="form-control" name="provincia" id="provincia" >
                               <option  value="{{old('provincia')}}">Selecione a Província</option>
                                <option value="1">Maputo Cidade</option>
                                <option value="2">Maputo Província</option>
                                <option value="3">Gaza</option>
                                <option value="4">Inhambane</option>
                                <option value="5">Manica </option>
                                <option value="6"> Sofala</option>
                                <option value="7"> Tete</option>
                                <option value="8"> Nampula</option>
                                <option value="9"> Zambezia</option>
                                <option value="10"> Niassa</option>
                                <option value="11"> Cabo Delegado</option>

                             </select>
                              </div>
                          </div>

                            <div class="form-group">
                              <label>Jurista</label>
                              <div class="form-single">
                                 <select name="jurista" class="form-control" id="jurista">
                                    <option selected="" disabled="">Selecione o Jurista</option>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{ $user->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                            </div>
                     

                    
                          <div class="form-group">

                            <button type="reset" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar
                             </button>
                            <button type="submit" class="btn btn-secondary btn-sm" id="btn-save">Enviar</button>
                         
                           </div>
                          </form>
                      </div>
                    </div>
                </div>
            </div>


@else
        <div class="card tab-content" id="tabContent">
   
              <div class="tab-pane show active " id="nav-seguimento" role="tabpainel" area-labelledy="nav-ocorrencias-tab">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="seguimento">
                            <thead>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Tipo de Violação</th>
                                <th>Jurista</th>
                                <th>Data</th>
                                <th width="2%"></th>
                                <th width="2%"></th>
                                <th width="2%"></th>
                            </thead>

                            <tbody>
                                @forelse($seguimentoOcorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>
                                      @forelse($ocorrencia->juristas as $jurista)
                                        {{$jurista->name}}

                                      @empty
                                       Por Alocar
                                      @endforelse

                                    </td>
                                    <td>{{$ocorrencia->created_at}}</td>
                                       <td>
                                        <a href="{{route('ocorrencia.mostrar',$ocorrencia->id)}}">
                                            <i class="far fa-eye"> </i>
                                        </a>

                                    </td>
                                    <td>
                                        <a class="nav-item nav-link" data-toggle="dropdown" title="Operações"><i class="fas fa-tools"></i></a>
                                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                                           @if(Auth::User()->category!=12)
                                            <a href="{{route('ocorrencia.estado',['id'=>$ocorrencia->id,'estado'=>'Resolvida' ])}}" class="dropdown-item link" >Marcar como Resolvida</a>
                                           @endif
                                            <a href="{{ route('chat', $ocorrencia->id) }}" class="dropdown-item link">Mensagens</a>
                                          </div>
                                    </td>
                                     <td>
                                       <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt" title="Remover"></i>
                                                </a>
                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                            
                        </table>
                        
                    </div> 
                </div>
                
            </div>

                <div class="tab-pane show " id="nav-resolvidas" role="tabpainel" area-labelledy="nav-resolvidas-tab">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="resolvidas">
                            <thead>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Tipo de Violação</th>
                                <th>Jurista</th>
                                <th>Data</th>
                                <th width="2%"></th>
                                <th width="2%"></th>
                                <th width="2%"></th>
                            </thead>

                            <tbody>
                                @forelse($resolvidasOcorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>
                                      @forelse($ocorrencia->juristas as $jurista)
                                        {{$jurista->name}}

                                      @empty
                                       Por Alocar
                                      @endforelse

                                    </td>
                                    <td>{{$ocorrencia->created_at}}</td>
                                       <td>
                                        <a href="{{route('ocorrencia.mostrar',$ocorrencia->id)}}">
                                            <i class="far fa-eye"> </i>
                                        </a>

                                    </td>
                                    <td>
                                        <a class="nav-item nav-link" data-toggle="dropdown" title="Operações"><i class="fas fa-tools"></i></a>
                                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                                          
                                            <a href="{{ route('chat', $ocorrencia->id) }}" class="dropdown-item link">Mensagens</a>
                                          </div>
                                    </td>
                                     <td>
                                       <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt" title="Remover"></i>
                                                </a>
                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                            
                        </table>
                        
                    </div> 
                </div>
                
            </div>


            <div class="tab-pane show " id="nav-chats" role="tabpainel" area-labelledy="nav-chats-tab">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="chats">
                            <thead>
                                <th>De</th>
                                <th>Conteúdo</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Tipo de Violação</th>
                                <th>Data</th>
                                <th width="5%"></th>
                         <!--        <th width="5%"></th>-->
                            </thead>

                            <tbody>
                                @forelse($chatOcorrencias as $ocorrencia)
                                <tr>
                                    <th>{{Auth::User()->getCategory($ocorrencia->emissor) }}</th>
                                    <td>{{$ocorrencia->conteudo}}</td>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>{{$ocorrencia->created_at}}</td>
                                    <td>
                                        <a href="{{ route('chat', $ocorrencia->ocorrencia_id) }}"><i class="far fa-eye" title="Ver Conversa"> </i></a>
                                    </td>
                                  
                                     <td>
                                      <!--  <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt " title="Remover"></i>
                                                </a> -->
                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                            
                        </table>
                        
                    </div> 
                </div>
                
            </div>


        </div>
    </div>

@endif