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

  @if(!$ocorrencia->provincia)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <p>Para efeitos estatísticos, não se esqueça de confirmar a província da ocorrência, clicando
        <a href="#" data-toggle="modal" data-target="#registarProvincia">aqui</a></p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
    
    <div class="card">
      <div class="card-header">
      </div>

    <div class="card-body">
      <div class="row">
       <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
          <table>
            <tr>
              <td><label>Nome:</label> {{$ocorrencia->jornalista->nome}}</td>
            </tr>
            <tr>
              <td><label>Celular:</label> {{$ocorrencia->jornalista->celular}}</td>
            </tr>
            <tr>
             <td><label>Nivel de risco:</label> {{$ocorrencia->nivel}}</td>
            </tr>

          </table>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
          <table>
          
            <tr>
              <td> <label>Estado:</label> {{$ocorrencia->estado}}</td>
            </tr>

            <tr>
              <td> <label>Data:</label> {{$ocorrencia->created_at}}</td>
            </tr>

            <tr>
              <td> <label>Jurista:</label>
                @forelse($ocorrencia->juristas as $jurista)
                  {{$jurista->name}},
                @empty
                  Por Alocar
                @endforelse
              </td>
            </tr>
      
          </table>
        </div>
    </div>

    <div class="p-15">
     {!!$map['html']!!}
    </div>          
    
    <div class="p-15">
      <label>Evidencia:</label>
       @if(!$ocorrencia->provincia)
        Por confirmar
       @else
        {{$ocorrencia->provincia->provincia}}
       @endif
       <br>
      
      @if($ocorrencia->imgURL)
          <img style="max-width:500px;" src="data:image/jpeg;base64,{{$ocorrencia->imgURL}}">
       @endif 
    </div>
    
      @if($descricao = $ocorrencia->descricao)
        <div class="p-15">
        <label>Descrição:</label>
        <p style="font-size:14px;">{{$descricao}}</p>
      </div>
       @endif 


  </div>

    <div class="card-footer">
        @if(Auth::user()->category!=12)
        <a href="#"  data-toggle="modal" data-target="#encaminhar" class="btn btn-secondary btn-sm"><i class="fas fa-share"></i>
                    Partilhar
        </a> 

        <a href="#"  data-toggle="modal" data-target="#alocar"class="btn btn-secondary btn-sm"><i class="far fa-user"></i>
                    Alocar Jurista
        </a>

              <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledbdy="dropdownMenu">
                          <li> <a href="{{route('ocorrencia.estado',['id'=>$ocorrencia->id,'estado'=>'Em seguimento' ])}}" class="dropdown-item" > Em seguimento</a></li>
                     
                          <li> <a href="{{route('ocorrencia.estado',['id'=>$ocorrencia->id,'estado'=>'Resolvido' ])}}" class="dropdown-item" >Resolvido</a> </li>
              </ul>
          @endif
    </div>
  </div>
</div>

@include('includes.modal-ocorrencia')
@endsection


@push('scripts')
 <script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>  
 <script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('js/validation.js')}}"></script>
@endpush