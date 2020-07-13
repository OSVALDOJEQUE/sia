@extends('layouts.app')

@section('title','Mensagens')

@section('titulo','Mensagens')

@push('css')
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
@endpush

@section('content')

@if (Auth::user()->category==0)
    <div class="menu">
      <nav >
        <ul class="nav nav-tabs p-0" id="nav-tab" role="tablist">       
          <li>
            <a class="nav-item nav-link active" id="nav-provincial-tab" data-toggle="tab" href="#nav-provincial" role="tab" aria-controls="nav-provincial" aria-selected="false">Nível Provincial</a>      
          </li>

          <li>
            <a class="nav-item nav-link" id="nav-Jurista-tab" data-toggle="tab" href="#nav-jurista" role="tab" aria-controls="nav-seguimento" aria-selected="false">Jurista</a>      
          </li>
        </ul>
      </nav>
    </div>
<br>

    <div class="card tab-content" id="tabContent">

      <div class="tab-pane show active" id="nav-provincial" role="tabpainel" area-labelledy="nav-novas-tab">
        <div class="card" style="border: 1px solid #ddd;">
          <div class="card-body">
            @forelse ($conversaProvincial as $chat)
              @if($chat->destino!=Auth::user()->category)
                <div class="card enviada">
                  <div class="card-body p-10">  
                    <p>{{$chat->conteudo}}<br>
                      <label class="hora">{{$chat->created_at}}</label>
                    </p>
                  </div>
                </div>
              @else
                <div class="card recebida">
                  <div class="card-body p-10">
                      <p>
                      {{$chat->conteudo}}
                      <br>
                      <label class="hora">{{$chat->created_at}}</label>
                    </p>
                  </div>
                </div>
              @endif
              
              <dir style="clear: both"></dir>
            
            @empty
               Sem mensagens
               
               <br><br>
            @endforelse

            <div class="new">
              <hr>
              <form action="{{ route('msg_provincial', $id) }}" method="post" >
                @csrf
                <div class="form-row">
                  <div class="col-12 mb-3">
                    <textarea type="text" class="form-control" id="validationCustom01" name="content" placeholder="Nova mensagem. . ." required rows="3"></textarea>
                  </div>
           
                </div>
     
                <div style="overflow:auto;">
                  <div style="float:right;">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </div>
              </form>
            </div> 
          </div>
        </div>
      </div>

      <div class="tab-pane show" id="nav-jurista" role="tabpainel" area-labelledy="nav-ocorrencias-tab">
        <div class="card" style="border: 1px solid #ddd;">
          <div class="card-body">
            @forelse ($conversaJurista as $chat)
              @if($chat->destino!=Auth::user()->category)
                <div class="card enviada">
                  <div class="card-body p-10">
                    <p>
                     {{$chat->conteudo}}
                     <br>
                     <label class="hora">{{$chat->created_at}}</label>
                    </p>
                  </div>
                </div>
            @else
              <div class="card recebida">
                <div class="card-body p-10">
                  <p>
                    {{$chat->conteudo}}<br>
                    <label class="hora">{{$chat->created_at}}</label>
                  </p>
                </div>
              </div>

            @endif
            <dir style="clear: both"></dir>
            @empty
                Sem mensagens
                <br><br>
            @endforelse 

            <div class="new">
              <hr>
              <form action="{{ route('msg_jurista', $id) }}" method="post" >
                @csrf
                <div class="form-row">
                  <div class="col-12 mb-3">
                    <textarea type="text" class="form-control" id="validationCustom01" name="content" placeholder="Nova mensagem. . ." required rows="3"></textarea>
                  </div>
                </div>
     
                <div style="overflow:auto;">
                  <div style="float:right;">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>               
      </div>
    </div>
  @endif
  
  @if(Auth::User()->category==12)
    <div class="card-body">
      @forelse ($conversa as $chat)
        @if($chat->destino!=Auth::user()->id)
          <div class="card enviada">
            <div class="card-body p-10">               
                <p>
                {{$chat->conteudo}}
                <br>
                <label class="hora">{{$chat->created_at}}</label>
                </p>
            </div>
          </div>
        @else
          <div class="card recebida">
            <div class="card-body p-10">
              <p>
              {{$chat->conteudo}}
              <br>
              <label class="hora">{{$chat->created_at}}</label>
              </p>
            </div>
          </div>
        @endif
          <dir style="clear: both"></dir>
      @empty
        Sem mensagens
        <br><br>
      @endforelse

      <div class="new">
        <hr>
        <form action="{{ route('msg_central', $id) }}" method="post" >
          @csrf
          <div class="form-row">
            <div class="col-12 mb-3">
              <textarea type="text" class="form-control" id="validationCustom01" name="content" placeholder="Nova mensagem. . ." required rows="3"></textarea>
            </div> 
          </div>

          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    @endif

    @if(Auth::User()->category>=1 && Auth::User()->category<=11 )

      <div class="card-body">
      @forelse ($conversa as $chat)
        @if($chat->destino!=Auth::user()->category)
          <div class="card enviada">
            <div class="card-body p-10">               
                <p>
                {{$chat->conteudo}}
                <br>
                <label class="hora">{{$chat->created_at}}</label>
                </p>
            </div>
          </div>
        @else
          <div class="card recebida">
            <div class="card-body p-10">
              <p>
              {{$chat->conteudo}}
              <br>
              <label class="hora">{{$chat->created_at}}</label>
              </p>
            </div>
          </div>
        @endif
          <dir style="clear: both"></dir>
      @empty
        Sem mensagens
        <br><br>
      @endforelse

      <div class="new">
        <hr>
        <form action="{{ route('msg_central', $id) }}" method="post" >
          @csrf
          <div class="form-row">
            <div class="col-12 mb-3">
              <textarea type="text" class="form-control" id="validationCustom01" name="content" placeholder="Nova mensagem. . ." required rows="3"></textarea>
            </div> 
          </div>

          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

   @endif
      <div class='back'>
              
                <a href="{{route('ocorrencia.mostrar',$id)}}">Ver Ocorrência Relacionada</a>
           
      </div>

@endsection


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>  
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation.js')}}"></script>

@endpush
