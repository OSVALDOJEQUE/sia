@extends('layouts.app')

@section('title','Painel Principal')

@section('titulo','Painel Principal')

@push('css')

  <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<style>
       

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

             a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 500;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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

                    <li>
                     <a class="nav-item nav-link" id="nav-users-tab" data-toggle="tab" href="#nav-users" role="tab" aria-controls="nav-users" aria-selected="true">Usuários</a>
                  </li>
                </ul>
            </nav>
        </div>

        <div class="card tab-content" id="tabContent">
            <div class="tab-pane show active" id="nav-ocorrencias" role="tabpainel" area-labelledy="nav-ocorrencias-tab">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="ocorrencias">
                            <thead>
                                <th>Jornalista</th>
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
                                    <td>{{$ocorrencia->nome_jornalista}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>{{$ocorrencia->estado}}</td>
                                    <td>{{$ocorrencia->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{route('ocorrencia.mostrar',$ocorrencia->id)}}">
                                            <i class="far fa-eye"> </i>
                                        </a>

                                    </td>
                                    <td><i class="far fa-edit"></i></td>
                                     <td>
                                        <i class="far fa-trash-alt"> </i>
                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                            
                        </table>
                        
                    </div> 
                </div>
                
            </div>

            <div class="tab-pane show" id="nav-users" role="tabpainel" aria-labelledby="nav-users-tab" >
                <div class="card-header">
                    <a href="" class="btn btn-secondary btn-sm"  data-toggle="modal" data-target="#newUser" ><i class="fas fa-user-plus"> </i> Novo</a>                    
                </div>
                <div class="card-body" >
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="users">
                            <thead>
                                <th>Nome</th>
                                <th>Nivel</th>
                                <th>Email</th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                            </thead>

                            <tbody>
                                @forelse($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->category}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <i class="far fa-eye"> </i>
                                    </td>
                                    <td><i class="far fa-edit"></i></td>
                                     <td>
                                        <i class="far fa-trash-alt"> </i>
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
                                <th>Jornalista</th>
                                <th>Celular</th>
                                <th>Nível</th>
                                <th>Localização</th>
                                <th>Data</th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                            </thead>

                            <tbody>
                                @forelse($novasOcorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome_jornalista}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>{{$ocorrencia->estado}}</td>
                                    <td>{{$ocorrencia->created_at->diffForHumans()}}</td>
                                    <td>
                                        <i class="far fa-eye"> </i>
                                    </td>
                                    <td><i class="far fa-edit"></i></td>
                                     <td>
                                        <i class="far fa-trash-alt"> </i>
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
                                <th>Jornalista</th>
                                <th>Celular</th>
                                <th>Nível</th>
                                <th>Localização</th>
                                <th>Data</th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                            </thead>

                            <tbody>
                                @forelse($seguimentoOcorrencias as $ocorrencia)
                                <tr>
                                    <td>{{$ocorrencia->nome_jornalista}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>{{$ocorrencia->estado}}</td>
                                    <td>{{$ocorrencia->created_at->diffForHumans()}}</td>
                                    <td>
                                        <i class="far fa-eye"> </i>
                                    </td>
                                    <td><i class="far fa-edit"></i></td>
                                     <td>
                                        <i class="far fa-trash-alt"> </i>
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
                                <th>Jornalista</th>
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
                                    <td>{{$ocorrencia->nome_jornalista}}</td>
                                    <td>{{$ocorrencia->celular}}</td>
                                    <td>{{$ocorrencia->nivel}}</td>
                                    <td>{{$ocorrencia->estado}}</td>
                                    <td>{{$ocorrencia->created_at->diffForHumans()}}</td>
                                    <td>
                                        <i class="far fa-eye"> </i>
                                    </td>
                                    <td><i class="far fa-edit"></i></td>
                                     <td>
                                        <i class="far fa-trash-alt"> </i>
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

        @include('includes.modals')
@endsection


@push('scripts')

<script type="text/javascript" src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>  
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation.js')}}"></script>
<script type="text/javascript">
    $(function () {
         var table = $('#users').DataTable({
                processing: false,
                serverSide: false,
                lengthMenu: [[10,25, 50,100, -1], [10, 25, 50,100, "Todos"]],    
            });

         $('#ocorrencias').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
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
