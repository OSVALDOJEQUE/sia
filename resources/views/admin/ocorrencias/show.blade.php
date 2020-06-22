@extends('layouts.app')
@section('title','Ocorrência Mostrar')

@section('title','Ocorrência')
@section('titulo','Ocorrência')

@push('css')
  <style type="text/css">
    .mailbox-attachments{
      padding: 0;
      list-style: none;
    }
    .mailbox-attachments li {
    border: 1px solid #eee;
    float: left;
    margin-bottom: 10px;
    margin-right: 10px;
    width: 150px;
}


element.style {
}
.mailbox-attachment-icon {
    color: #666;
    font-size: 48px;
    max-height: 118.5px;
    padding: 20px 10px;
    text-align: center;
}

element.style {
}
.mailbox-attachment-info {
    background: #f8f9fa;
    padding: 10px;
}

.mailbox-attachment-name {
    color: #666;
    font-weight: 700;
}

.mailbox-attachment-size {
    color: #999;
    font-size: 12px;
}

.mailbox-attachment-size>span {
    display: inline-block;
    padding-top: .75rem;
}


.mailbox-attachment-icon, .mailbox-attachment-info, .mailbox-attachment-size {
    display: block;
}

.show-message{
  padding:0; 
  background-color: rgba(0, 0, 0, 0.01);
  border-top: 1px solid rgba(0,0,0,.125);
}

.p-15{
  padding: 15px;
}
</style>

{!!$map['js']!!}

@endpush


@section('content')
@include('includes.alerts')


    <div class="card">
      <div class="card-header">
      </div>

    <div class="card-body">
      <div class="row">
       <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
        <label>{{$ocorrencia->jornalista}}</label>
          <table>
            <tr>
              <td><label>Nome:</label> {{$ocorrencia->nome}}</td>
            </tr>
            <tr>
              <td><label>Celular:</label> {{$ocorrencia->celular}} </td>
            </tr>


            <tr>
             <td><label>Nivel de risco: </label>{{$ocorrencia->nivel}}</td>
     
            </tr>

          </table>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
          <table>
          
            <tr>
              <td> <label>Estado:</label> {{$ocorrencia->estado}} </td>
              <td></td>
            </tr>

            <tr>
              <td> <label> Data:</label> {{$ocorrencia->created_at->diffForHumans()}}</td>
            </tr>
      
          </table>
        </div>
    </div>

    <div class="p-15">
     {!!$map['html']!!}
    </div>          
    
    <div class="p-15"> 
      <label>Evidencias:</label>
    </div>

  < /div>

  <div class="card-footer">
      <a href="#"  data-toggle="modal" data-target="#encaminhar" class="btn btn-secondary btn-sm"><i class="fas fa-share"></i>
                  Partilhar
      </a> 

          <a href="#"  data-toggle="dropdown" class="btn btn-secondary btn-sm dropdown-toggle"><i class="fas fa-check"></i>
                  Alocar Jurista
      </a>

      <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledbdy="dropdownMenu">
                  <li> <a href="{{route('ocorrencia.estado',['id'=>$ocorrencia->id,'estado'=>'Em seguimento' ])}}" class="dropdown-item" > Em seguimento</a></li>
             
                  <li> <a href="{{route('ocorrencia.estado',['id'=>$ocorrencia->id,'estado'=>'Resolvido' ])}}" class="dropdown-item" >Resolvido</a> </li>
              </ul>
  </div>
    </div>
</div>

@include('includes.modals')
@endsection
