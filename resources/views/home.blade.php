@extends('layouts.app')

@section('title','Painel Principal')

@section('titulo','Painel Principal')

@push('css')
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
@endpush

@section('content')
        <div class="menu">
             <nav >
               <ul class="nav nav-tabs p-0" id="nav-tab" role="tablist">       
                
                  <li>
                   <a class="nav-item nav-link active " id="nav-ocorrencias-tab" data-toggle="tab" href="#nav-ocorrencias" role="tab" aria-controls="nav-ocorrencias" aria-selected="false">Todas</a>
                  </li>

                  <li>
                     <a class="nav-item nav-link" id="nav-novas-tab" data-toggle="tab" href="#nav-novas" role="tab" aria-controls="nav-novas" aria-selected="false">Novas</a>      
                  </li>

                     <li>
                     <a class="nav-item nav-link" id="nav--tab" data-toggle="tab" href="#nav-seguimento" role="tab" aria-controls="nav-seguimento" aria-selected="false">Em Seguimento</a>      
                  </li>

                  <li>
                     <a class="nav-item nav-link " id="nav-resolvidas-tab" data-toggle="tab" href="#nav-resolvidas" role="tab" aria-controls="nav-resolvidas" aria-selected="false">Resolvidas</a>      
                  </li>

                  <li>
                     <a class="nav-item nav-link " id="nav-resolvidas-tab" data-toggle="tab" href="#nav-resolvidas" role="tab" aria-controls="nav-resolvidas" aria-selected="false">Mensagens</a>      
                  </li>
                  @if(Auth::User()->category==1)
                    <li>
                     <a class="nav-item nav-link" id="nav-users-tab"  href="{{url('users')}}" role="tab" >Usuários</a>
                  </li>
                  @endif

                </ul>
            </nav>
        </div>

        <div class="card tab-content" id="tabContent">
            <div class="tab-pane show active" id="nav-ocorrencias" role="tabpainel" area-labelledy="nav-ocorrencias-tab">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="ocorrencias">
                            <thead>
                                <th>Nome</th>
                                <th>Celular</th>
                                <th>Nível</th>
                                <th>Estado</th>
                                <th>Data</th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                            </thead>

                            <tbody>
                                @forelse($ocorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>{{$ocorrencia->estado}}</td>
                                    <td>{{$ocorrencia->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{route('ocorrencia.mostrar',$ocorrencia->id)}}">
                                            <i class="far fa-eye"> </i>
                                        </a>

                                    </td>
                                    <td>
                                        <a class="nav-item nav-link" data-toggle="dropdown" title="Operações"><i class="fas fa-tools"></i></a>
                                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="" class="dropdown-item link">Mostrar</a>
                                            <a href="" class="dropdown-item link">Encaminhar</a>
                                          </div>
                                    </td>
                                     <td>
                                       <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt red" title="Remover"></i>
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


            <div class="tab-pane show" id="nav-novas" role="tabpainel" area-labelledy="nav-novas-tab">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="novas">
                            <thead>
                                <th>Nome</th>
                                <th>Celular</th>
                                <th>Nível</th>
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
                                    <td>{{$ocorrencia->created_at->diffForHumans()}}</td>
                                    <td>
                                        <i class="far fa-eye"> </i>
                                    </td>
                                       <td>
                                        <a class="nav-item nav-link" data-toggle="dropdown" title="Operações"><i class="fas fa-tools"></i></a>
                                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="" class="dropdown-item link">Mostrar</a>
                                            <a href="" class="dropdown-item link">Encaminhar</a>
                                          </div>
                                    </td>
                                     <td>
                                       <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt red" title="Remover"></i>
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
                                <th>Data</th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                            </thead>

                            <tbody>
                                @forelse($seguimentoOcorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>p
                                    <td>{{$ocorrencia->created_at->diffForHumans()}}</td>
                                    <td>
                                        <i class="far fa-eye"> </i>
                                    </td>
                                       <td>
                                        <a class="nav-item nav-link" data-toggle="dropdown" title="Operações"><i class="fas fa-tools"></i></a>
                                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="" class="dropdown-item link">Mostrar</a>
                                            <a href="" class="dropdown-item link">Encaminhar</a>
                                          </div>
                                    </td>
                                     <td>
                                       <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt red" title="Remover"></i>
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
                                <th>Localização</th>
                                <th>Data</th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                            </thead>

                            <tbody>
                                @forelse($resolvidasOcorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>{{$ocorrencia->estado}}</td>
                                    <td>{{$ocorrencia->created_at->diffForHumans()}}</td>
                                    <td>
                                        <i class="far fa-eye"> </i>
                                    </td>
                                      <td>
                                        <a class="nav-item nav-link" data-toggle="dropdown" title="Operações"><i class="fas fa-tools"></i></a>
                                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="" class="dropdown-item link">Mostrar</a>
                                            <a href="" class="dropdown-item link">Encaminhar</a>
                                          </div>
                                    </td>
                                     <td>
                                       <a class="icon" data-id="{{ $ocorrencia->id }}" data-action="{{ route('ocorrencia.remover',$ocorrencia->id) }}" onclick="removerConfirmar('{{$ocorrencia->id}}')"><i class="far fa-trash-alt red" title="Remover"></i>
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


        </div>
@endsection


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

<script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>  
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation.js')}}"></script>
<script type="text/javascript">
    $(function () {
  
        $('#ocorrencias').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "lengthMenu": [[10, 25, 50,100,500, -1], [10, 25, 50,100,500, "Todos"]],
        });


         $('#novas').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "lengthMenu": [[10, 25, 50,100,500, -1], [10, 25, 50,100,500, "Todos"]],
        });


         $('#seguimento').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "lengthMenu": [[10, 25, 50,100,500, -1], [10, 25, 50,100,500, "Todos"]],
        });


         $('#resolvidas').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "lengthMenu": [[10, 25, 50,100,500, -1], [10, 25, 50,100,500, "Todos"]],
        });

    });
</script>
@endpush
