@extends('layouts.app')

@section('title','Estatísticas')

@section('titulo','Estatísticas')

@push('css')
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
@endpush

@php
   $casos =0;
@endphp


@section('content')
    <div class="card">
        <div class="card-header"> 
            
              <div class="row" >
                <div class="col-sm-3">
                    <!--<div class="input-group-sm">-->
                    <!--    <select name="ano" id="ano" class="form-control">-->
                    <!--      <option selected value="-1">Selecione o Ano</option>-->
                    <!--      <option >{{date('Y')}}</option>-->
                    <!--    </select>-->
                    <!--</div>-->
                </div>
               <div class="col-sm-9">
                  
                    <div style="float: right;">
                    <a style="float:right;" href="{{route('ocorrencia.exportar')}}" class="btn btn-secondary btn-sm" title="Exportar para EXCEL">Exportar para EXCEL</a>
                  </div>

                </div>
            </div>
        </div>
        <div class="card-body">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
               <th width="150px">Violação</th>
               <th>Maputo Cidade</th>
               <th>Maputo Província</th>
               <th>Gaza</th>
               <th>Inhambane</th>
               <th>Manica</th>
               <th>Sofala</th>
               <th>Tete</th>
               <th>Zambézia</th>
               <th>Nampula</th>
               <th>Niassa</th>
               <th>Cabo Delegado</th>  
              </tr>  
            </thead>
            <tbody>
              <tr>
                <td>Agressões físicas</td>
                <td>{{$agressoes_mc}}</td>
                <td>{{$agressoes_m}}</td>
                <td>{{$agressoes_g}}</td>
                <td>{{$agressoes_i}}</td>
                <td>{{$agressoes_ma}}</td>
                <td>{{$agressoes_b}}</td>
                <td>{{$agressoes_t}}</td>
                <td>{{$agressoes_z}}</td>
                <td>{{$agressoes_na}}</td>
                <td>{{$agressoes_n}}</td>
                <td>{{$agressoes_c}}</td>
              </tr>
              <tr>
                <td>Assaltos</td>
                <td>{{$assaltos_mc}}</td>
                <td>{{$assaltos_m}}</td>
                <td>{{$assaltos_g}}</td>
                <td>{{$assaltos_i}}</td>
                <td>{{$assaltos_ma}}</td>
                <td>{{$assaltos_b}}</td>
                <td>{{$assaltos_t}}</td>
                <td>{{$assaltos_z}}</td>
                <td>{{$assaltos_na}}</td>
                <td>{{$assaltos_n}}</td>
                <td>{{$assaltos_c}}</td>
              </tr>

              <tr>
                <td>Censuras</td>
                <td>{{$censuras_mc}}</td>
                <td>{{$censuras_m}}</td>
                <td>{{$censuras_g}}</td>
                <td>{{$censuras_i}}</td>
                <td>{{$censuras_ma}}</td>
                <td>{{$censuras_b}}</td>
                <td>{{$censuras_t}}</td>
                <td>{{$censuras_z}}</td>
                <td>{{$censuras_na}}</td>
                <td>{{$censuras_n}}</td>
                <td>{{$censuras_c}}</td>
              </tr>

              <tr>
                <td>Detenções</td>
                <td>{{$detencoes_mc}}</td>
                <td>{{$detencoes_m}}</td>
                <td>{{$detencoes_g}}</td>
                <td>{{$detencoes_i}}</td>
                <td>{{$detencoes_ma}}</td>
                <td>{{$detencoes_b}}</td>
                <td>{{$detencoes_t}}</td>
                <td>{{$detencoes_z}}</td>
                <td>{{$detencoes_na}}</td>
                <td>{{$detencoes_n}}</td>
                <td>{{$detencoes_c}}</td>
              </tr>

              <tr>
                <td>Legislações</td>
                <td>{{$legislacoes_mc}}</td>
                <td>{{$legislacoes_m}}</td>
                <td>{{$legislacoes_g}}</td>
                <td>{{$legislacoes_i}}</td>
                <td>{{$legislacoes_ma}}</td>
                <td>{{$legislacoes_b}}</td>
                <td>{{$legislacoes_t}}</td>
                <td>{{$legislacoes_z}}</td>
                <td>{{$legislacoes_na}}</td>
                <td>{{$legislacoes_n}}</td>
                <td>{{$legislacoes_c}}</td>
              </tr>

              <tr>
                <td>Ameaças</td>
                <td>{{$ameacas_mc}}</td>
                <td>{{$ameacas_m}}</td>
                <td>{{$ameacas_g}}</td>
                <td>{{$ameacas_i}}</td>
                <td>{{$ameacas_ma}}</td>
                <td>{{$ameacas_b}}</td>
                <td>{{$ameacas_t}}</td>
                <td>{{$ameacas_z}}</td>
                <td>{{$ameacas_na}}</td>
                <td>{{$ameacas_n}}</td>
                <td>{{$ameacas_c}}</td>
              </tr>

              <tr>
                <td>Violações públicas da liberdade de expressão</td>
                <td>{{$violacoes_mc}}</td>
                <td>{{$violacoes_m}}</td>
                <td>{{$violacoes_g}}</td>
                <td>{{$violacoes_i}}</td>
                <td>{{$violacoes_ma}}</td>
                <td>{{$violacoes_b}}</td>
                <td>{{$violacoes_t}}</td>
                <td>{{$violacoes_z}}</td>
                <td>{{$violacoes_na}}</td>
                <td>{{$violacoes_n}}</td>
                <td>{{$violacoes_c}}</td>
              </tr>
              <tr>
                <td>Total</td>
                @forelse($provincias as $provincia)
                  <td>{{$provincia->ocorrencias->count()}}</td>
                @empty

                @endforelse
              </tr>

            </tbody>
          </table>  
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

@endpush
