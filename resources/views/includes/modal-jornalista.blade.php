  

  <div class="modal " id="editJornalista" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!--  Cabecalho Modal -->
                    <div class="modal-header">
                      <h1>Editar Jornalista</h1>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Corpo Modal -->
                    <div class="modal-body">
                    
                       <form id="jornalista_form" name="jornalista_form">
                           @csrf
                         <div class="form-group">
                              <label>Nome</label>
                              <input type="hidden" name="id" id="id">
                              <div class="form-single ">
                                  <input type="text" name="nome"  id="nome" class="form-control" value="{{old('name')}}"  placeholder="Nome Completo" />
                                   <span class="error">{{ $errors->first('name') }}</span> 
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Telefone</label>
                              <div class="form-single">
                                  <input type="text" name="celular" id="celular" value="{{old('celular')}}" class="form-control" placeholder="Endereco Electronico" />
                                   <span class="error">{{ $errors->first('celular') }}</span> 
                              </div>
                          </div>

                          <div class="form-group">
                          <label>E-mail</label>
                              <div class="form-single">
                                  <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Endereco Electronico" />
                                   <span class="error">{{ $errors->first('email') }}</span> 
                              </div>
                          </div>

                          <div class="form-group">
                              <label>Contacto do editor</label>
                              <div class="form-single">
                                  <input type="text" name="contacto" id="contacto" value="{{old('contacto')}}" class="form-control" placeholder="Telefone do editor" />
                                   <span class="error">{{ $errors->first('contacto') }}</span> 
                              </div>
                          </div>
                              <div class="form-group">
                              <label>Entidade</label>
                              <div class="form-single">
                                  <input type="text" name="entidade" id="entidade" value="{{old('entidade')}}" class="form-control" placeholder="Entidade responsavel" />
                                   <span class="error">{{ $errors->first('entidade') }}</span> 
                              </div>
                          </div>
                          
                      
                          <div class="form-group">

                            <button type="reset" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar
                             </button>
                            <button type="submit" class="btn btn-secondary btn-sm" id="saveBtn" value="create" >Salvar</button>
                         
                           </div>
                  
                          </form>
                      </div>
                    </div>
                </div>
            </div>