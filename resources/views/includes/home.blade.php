


@if(Auth::User()->category==0)
        <div class="card tab-content" id="tabContent">
          
           <div style="float: right;">
            <a style="float:right;" href="{{route('ocorrencia.exportar')}}" class="btn btn-secondary btn-sm" title="Exportar ocorrencias">Exportar para Excel</a>
          </div>

            <div class="tab-pane show active" id="nav-ocorrencias" role="tabpainel" area-labelledy="nav-ocorrencias-tab">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="ocorrencias">
                            <thead>
                                <th>Nome</th>
                                <th>Celular</th>
                                <th>Nível</th>
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="novas">
                            <thead>
                                <th>Nome</th>
                                <th>Celular</th>
                                <th>Nível</th>
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="seguimento">
                            <thead>
                                <th>Nome</th>
                                <th>Celular</th>
                                <th>Nível</th>
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
                                <th>Celular</th>
                                <th>Nível</th>
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
                                <th>Nível</th>
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

@else
        <div class="card tab-content" id="tabContent">
   
              <div class="tab-pane show active " id="nav-seguimento" role="tabpainel" area-labelledy="nav-ocorrencias-tab">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="seguimento">
                            <thead>
                                <th>Nome</th>
                                <th>Celular</th>
                                <th>Nível</th>
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
                                <th>Celular</th>
                                <th>Nível</th>
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
                                <th>Nível</th>
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