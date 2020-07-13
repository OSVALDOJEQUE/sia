@extends('layouts.app')

@section('title','Gestão de jornalista')

@section('titulo','Jornalistas')

@push('css')
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
@endpush

@section('content')
        <div class="menu">
             <nav >
               <ul class="nav nav-tabs p-0" id="nav-tab" role="tablist">       
            
                </ul>
            </nav>
        </div>

        <div class="card tab-content" id="tabContent">
             <div style="float: right;">
                <a style="float:right;" href="{{route('jornalista.exportar')}}" class="btn btn-secondary btn-sm" title="Exportar jornalistas">Exportar para Excel</a>
              </div>
            <div class="tab-pane show active" id="nav-users" role="tabpainel" aria-labelledby="nav-users-tab" >
             
                <div class="card-body" >
                    <div class="table-responsive">
                        <table class="table text-wrap table-hover table-striped" id="jornalistas">
                            <thead>
                                <th>Nome</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th>Estado</th>
                                <th>Dispositivo</th>
                                <th>Plataforma</th>
                                <th>UUID</th>
                                <th>versão</th>
                                <th>Serie</th>
                                <th width="100px">Accão</th>
                            </thead>
                            <tbody>
                               
                            </tbody>
                            
                        </table>
                        
                    </div>
                </div>
                
            </div>
        </div>

        @include('includes.modal-jornalista')
@endsection


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

<script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>  
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation.js')}}"></script>

@endpush
