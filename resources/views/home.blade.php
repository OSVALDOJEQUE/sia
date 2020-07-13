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
               @if(Auth::User()->category==0)
                  <li>
                   <a class="nav-item nav-link active " id="nav-ocorrencias-tab" data-toggle="tab" href="#nav-ocorrencias" role="tab" aria-controls="nav-ocorrencias" aria-selected="false">Todas</a>
                  </li>

                  <li>
                     <a class="nav-item nav-link" id="nav-novas-tab" data-toggle="tab" href="#nav-novas" role="tab" aria-controls="nav-novas" aria-selected="false">Novas</a>      
                  </li>

                     <li>
                     <a class="nav-item nav-link" id="nav-seguimento-tab" data-toggle="tab" href="#nav-seguimento" role="tab" aria-controls="nav-seguimento" aria-selected="false">Em Seguimento</a>      
                  </li>

                  <li>
                     <a class="nav-item nav-link " id="nav-resolvidas-tab" data-toggle="tab" href="#nav-resolvidas" role="tab" aria-controls="nav-resolvidas" aria-selected="false">Resolvidas</a>      
                  </li>

                  <li>
                     <a class="nav-item nav-link" id="nav-chats-tab" data-toggle="tab" href="#nav-chats" role="tab" aria-controls="nav-chats" aria-selected="false">Mensagens</a>      
                  </li>
                
                    <li>
                       <a class="nav-item nav-link" href="{{url('jornalistas')}}" role="tab" >Jornalistas</a>      
                    </li>
                      <li>
                       <a class="nav-item nav-link" id="nav-users-tab"  href="{{url('users')}}" role="tab" >Usuários</a>
                    </li>
                     <li>
                        <a href="{{route('ocorrencia.estatisticas')}}" class="nav-item nav-link" role="tab">Estatísticas</a>
                    </li>
                  @else
                    <li>
                       <a class="nav-item nav-link active" id="nav-seguimento-tab" data-toggle="tab" href="#nav-seguimento" role="tab" aria-controls="nav-seguimento" aria-selected="false">Por Resolver</a>      
                    </li>

                    <li>
                       <a class="nav-item nav-link " id="nav-resolvidas-tab" data-toggle="tab" href="#nav-resolvidas" role="tab" aria-controls="nav-resolvidas" aria-selected="false">Resolvidas</a>      
                    </li>

                    <li>
                       <a class="nav-item nav-link" id="nav-chats-tab" data-toggle="tab" href="#nav-chats" role="tab" aria-controls="nav-chats" aria-selected="false">Mensagens</a>      
                    </li>
                  @endif

                </ul>
            </nav>
        </div>


        @include('includes.home')

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
  
       var table = $('#ocorrencias').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "lengthMenu": [[10, 25, 50,100,500, -1], [10, 25, 50,100,500, "Todos"]],
            buttons: [
            'Excel'
            ]
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
