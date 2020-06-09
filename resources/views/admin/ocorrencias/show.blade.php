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

@endpush


@section('content')
@include('includes.alerts')


    <div class="card">
      <div class="card-header">
      </div>

    <div class="card-body">
      <div class="row">
       <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
        <label>{{$ocorrencia->nome_jornalista}}</label>
          <table>
              <tr>
              <td>Localização:</td>
              <td>{{$ocorrencia->localização}}</td>
            </tr>
            <tr>
              <td>Celular</td>
              <td>{{$ocorrencia->celular}}</td>
            </tr>
          </table>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
          <table>
          
            <tr>
              <td>Estado: </td>
              <td>{{$ocorrencia->estado}}</td>
            </tr>

            <tr>
             <td>Nivel de risco:</td>
              <td>{{$ocorrencia->nivel}}</td>
            </tr>
            <tr>
              <td>Data: </td>
              <td>{{$ocorrencia->created_at->diffForHumans()}}</td>
            </tr>
      
          </table>
        </div>
    </div>

    <div class="p-15">
      {{$ocorrencia->descricao}}
    </div>          
    
    <div class="p-15">   
      <ul class="mailbox-attachments">    
        <li>
          <a href="" class="mailbox-attachment-icon" target="_blenk" title=""><i class="far fa-file-image"></i></a>
            <div class="mailbox-attachment-info">
              <span class="mailbox-attachment-size">
                <span>{{number_format(256566/1024,'2')}} KB</span>
                <a href="" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
              </span>
            </div>
          </li>
      </ul>
    </div>

  </div>

  <div class="card-footer">
      <a href="#"  data-toggle="modal" data-target="#encaminhar" class="btn btn-secondary btn-sm"><i class="fas fa-share"></i>
                  Encaminhar
      </a> 

          <a href="#"  data-toggle="dropdown" class="btn btn-secondary btn-sm dropdown-toggle"><i class="fas fa-check"></i>
                  Marcar como
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
