
                           <!-- Inicio Modal para criar partilhar ocorrencia -->
              <div class="modal " id="encaminhar" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!--  Cabecalho Modal -->
                    <div class="modal-header">
                      <h1>Partilhar Ocorrência</h1>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Corpo Modal -->
                    <div class="modal-body">
                       <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                       </div>

                       <form id="partilhar_form" name="partilhar_form"  method="post" action="{{ route('partilhar', $ocorrencia->id) }}">
                           @csrf
                          <div class="form-group">
                              <label>Comentário</label>
                              <div class="form-single ">
                                 <textarea name="comentario" id="comentario" class="form-control"  placeholder="Comentário"></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label>Para</label>
                              <div class="form-single">
                                 <select name="permission" class="form-control" id="permission">
                                    <option selected="" disabled="">Níveis de Tratamento</option>
                                    <option value="1">Maputo Cidade</option>
                                    <option value="2">Maputo Província</option>
                                    <option value="3">Gaza</option>
                                    <option value="4">Inhambane</option>
                                    <option value="5">Manica</option>
                                    <option value="6">Sofala</option>
                                    <option value="7">Tete</option>
                                    <option value="8">Zambézia</option>
                                    <option value="9">Nampula</option>
                                    <option value="10">Niassa</option>
                                    <option value="11">Cabo Delegado</option>
                                 </select>
                              </div>
                          </div>
                          
                      
                          <div class="form-group">

                            <button type="reset" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar
                             </button>
                            <button type="submit" class="btn btn-secondary btn-sm" id="btn-save">Enviar</button>
                         
                           </div>
                          </form>
                      </div>
                    </div>
                </div>
            </div>


              
<div class="modal " id="alocar" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!--  Cabecalho Modal -->
                    <div class="modal-header">
                      <h1>Alocar Jurista</h1>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Corpo Modal -->
                    <div class="modal-body">
                       <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                       </div>

                       <form id="alocar_form" name="alocar_form"  method="post" action="{{ route('alocar',$ocorrencia->id) }}">
                           @csrf
                          <div class="form-group">
                              <label>Comentário</label>
                              <div class="form-single ">
                                 <textarea name="comentario" id="comentario" class="form-control"  placeholder="Comentário"></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label>Jurista</label>
                              <div class="form-single">
                                 <select name="jurista" class="form-control" id="jurista">
                                    <option selected="" disabled="">Selecione o Jurista</option>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{ $user->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                          </div>
                          
                      
                          <div class="form-group">

                            <button type="reset" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar
                             </button>
                            <button type="submit" class="btn btn-secondary btn-sm" id="btn-save">Enviar</button>
                         
                           </div>
                          </form>
                      </div>
                    </div>
                </div>
            </div>

            <div class="modal " id="registarProvincia" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!--  Cabecalho Modal -->
                    <div class="modal-header">
                      <h1>Confirmar  Província</h1>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Corpo Modal -->
                    <div class="modal-body">
                    
                       <form id="provincia_form" name="provincia_form"  method="post" action="{{ route('confirmarProvincia',$ocorrencia->id) }}">
                           @csrf
                          <div class="form-group">
                              <label>Província</label>
                              <div class="form-single ">
                                  <select class="form-control" name="provincia" id="provincia" >
                               <option  selected="" disabled="" >Selecione a Província</option>
                                <option value="1">Maputo Cidade</option>
                                <option value="2">Maputo Província</option>
                                <option value="3">Gaza</option>
                                <option value="4">Inhambane</option>
                                <option value="5">Manica</option>
                                <option value="6">Sofala</option>
                                <option value="7">Tete</option>
                                <option value="8">Nampula</option>
                                <option value="9">Zambezia</option>
                                <option value="10">Niassa</option>
                                <option value="11">Cabo Delegado</option>

                             </select>
                              </div>
                          </div>

                    
                          <div class="form-group">

                            <button type="reset" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar
                             </button>
                            <button type="submit" class="btn btn-secondary btn-sm" id="btn-save">Enviar</button>
                         
                           </div>
                          </form>
                      </div>
                    </div>
                </div>
            </div>

                        <div class="modal " id="editarOcorrencia" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!--  Cabecalho Modal -->
                    <div class="modal-header">
                      <h1>Editar Ocorrência</h1>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Corpo Modal -->
                    <div class="modal-body">
                    
                       <form id="ocorrencia_form" name="ocorrencia_form"  method="post" action="{{ route('ocorrencia.editar',$ocorrencia->id) }}">
                           @csrf
                          <div class="form-group">
                              <label>Província</label>
                              <div class="form-single ">
                                  <select class="form-control" name="provincia" id="provincia" >
                               <option  value="{{$ocorrencia->provincia->id ?? old('provincia')}}">{{$ocorrencia->provincia->provincia ?? 'Selecione a Província'}}</option>
                                <option value="1">Maputo Cidade</option>
                                <option value="2">Maputo Província</option>
                                <option value="3">Gaza</option>
                                <option value="4">Inhambane</option>
                                <option value="5">Manica </option>
                                <option value="6"> Sofala</option>
                                <option value="7"> Tete</option>
                                <option value="8"> Nampula</option>
                                <option value="9"> Zambezia</option>
                                <option value="10"> Niassa</option>
                                <option value="11"> Cabo Delegado</option>

                             </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Tipo de violação</label>
                              <div class="form-single ">
                                  <select class="form-control" name="violacao" id="violacao" >
                               <option  value="{{$ocorrencia->nivel ?? old('nivel')}}" >{{$ocorrencia->nivel ?? 'Selecione o tipo de violação'}}</option>
                                <option value="Agressões físicas">Agressões físicas</option>
                                <option value="Assaltos">Assaltos</option>
                                <option value="Censuras">Censuras</option>
                                <option value="Detenções">Detenções</option>
                                <option value="Legislações">Legislações</option>
                                <option value="Ameaças">Ameaças</option>
                                <option value="Violações públicas da liberdade de expressão">Violações públicas da liberdade de expressão</option>
                             </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Descrição</label>
                              <div class="form-single ">
                                 <textarea name="descricao" id="descricao" class="form-control"  placeholder="Descrição" value="{{$ocorrencia->descricao ?? old('descricao')}}">{{$ocorrencia->descricao}}</textarea>
                              </div>
                          </div>

                    
                          <div class="form-group">

                            <button type="reset" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar
                             </button>
                            <button type="submit" class="btn btn-secondary btn-sm" id="btn-save">Enviar</button>
                         
                           </div>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
