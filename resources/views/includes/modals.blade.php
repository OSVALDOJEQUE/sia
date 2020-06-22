
                           <!-- Inicio Modal para criar usuario -->
              <div class="modal " id="createUser" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!--  Cabecalho Modal -->
                    <div class="modal-header">
                      <h1 class="modal-title">Novo Usuário</h1>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Corpo Modal -->
                    <div class="modal-body">
                       <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                       </div>

                       <form  id="user_form" name="user_form">
                           <input type="hidden" name="id" id="id" value="" >
                          <div class="form-group">
                              <label>Nome do usuario</label>
                              <div class="form-single ">
                                  <input type="text" name="name"  id="name" class="form-control" value="{{old('name')}}"  placeholder="Nome Completo" />
                                   <span class="error">{{ $errors->first('name') }}</span> 
                              </div>
                          </div>
                          <div class="form-group">
                          <label>email</label>
                              <div class="form-single">
                                  <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Endereco Electronico" />
                                   <span class="error">{{ $errors->first('email') }}</span> 
                              </div>
                          </div>
                          <div class="form-group">
                          <label>Senha</label>
                              <div class="form-single">
                                  <input type="password"  name="password" id="password" class="form-control" placeholder="Senha" />
                              </div>
                          </div>

                          <div class="form-group">
                              <label>Confirmar Senha</label>
                              <div class="form-single">
                                  <input type="password"  name="confirm_password" id="confirm_password" class="form-control" placeholder="Senha" />
                                   <span id='message' class="error"></span>
                              </div>
                        
                          </div>

                          <div class="form-group">
                              <label>Tipo de Usuário</label>
                              <div class="form-single">
                                 <select  name="category" class="form-control" id="category">
                                   <option selected="" value="{{old('category')}}" >Tipo de Usuário</option>
                                    <option value="1">Nível Central</option>
                                    <option value="2">Nível provincial</option>
                                    <option value="3">Nível distrital</option>
                                    <option value="4">Jurista</option> 
                                 </select>
                                  <span class="error">{{ $errors->first('category') }}</span> 
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



                           <!-- Inicio Modal para criar usuario -->
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

                       <form  method="post" action="">
         
                          <div class="form-group">
                              <label>Comentário</label>
                              <div class="form-single ">
                                 <textarea name="parecer" id="parecer" class="form-control"  placeholder="Comentário"></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label>Para</label>
                              <div class="form-single">
                                 <select  name="permission" class="form-control" id="permission">
                                    <option   selected=""></option>
                                    <option value="2">Nível provincial</option>
                                    <option value="3">Nível distrital</option>
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


              


              

<!-- Editar Usuário -->
   <div class="modal" id="editUser" data-backdrop="static" >
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Cabecalho Modal -->
            <div class="modal-header">
                <h1 class="modal-title">Editar Usuário</h1>
                <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
            </div>
            <!-- Corpo Modal-->
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                       <form  id="user_edit_form" name="user_edit_form" >
                        <input type="hidden" name="id" id="e_id" value="" >
                          <div class="form-group">
                              <label>Nome do usuario</label>
                              <div class="form-single ">
                                  <input type="text" name="name"  id="e_name" class="form-control" value="{{old('e_name')}}"  placeholder="Nome Completo" />
                                   <span class="error">{{ $errors->first('name') }}</span> 
                              </div>
                          </div>
                          <div class="form-group">
                          <label>email</label>
                              <div class="form-single">
                                  <input type="email" name="email" id="e_email" value="{{old('e_email')}}" class="form-control" placeholder="Endereco Electronico" />
                                   <span class="error">{{ $errors->first('email') }}</span> 
                              </div>
                          </div>
                          <div class="form-group">
                          <label>Senha</label>
                              <div class="form-single">
                                  <input type="password"  name="password" id="e_password" class="form-control" placeholder="Senha" />
                              </div>
                          </div>

                          <div class="form-group">
                              <label>Confirmar Senha</label>
                              <div class="form-single">
                                  <input type="password"  name="confirm_password" id="e_confirm_password" class="form-control" placeholder="Senha" />
                              </div>
                        
                          </div>

                          <div class="form-group">
                              <label>Tipo de Usuário</label>
                              <div class="form-single">
                                 <select  name="category" class="form-control" id="e_category">
                                    <option selected="" value="{{old('category')}}">Tipo de Usuário</option>
                                    <option value="1">Nível Central</option>
                                    <option value="2">Nível provincial</option>
                                    <option value="3">Nível distrital</option>
                                    <option value="4">Jurista</option>   
                                 </select>
                                  <span class="error">{{ $errors->first('category') }}</span> 
                              </div>
                          </div>
                          
                      
                          <div class="form-group">

                            <button type="reset" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar
                             </button>
                            <button type="submit" class="btn btn-secondary btn-sm" id="editBtn" value="update" >Salvar</button>
                         
                           </div>
                          </form>
              
            </div>
          
                
        </div>
    </div>
</div>
