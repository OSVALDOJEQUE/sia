
                           <!-- Inicio Modal para criar usuario -->
              <div class="modal " id="newUser" aria-hidden="true" >
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

                       <form  id="user_form">
         
                          <div class="form-group">
                              <label>Nome do usuario</label>
                              <div class="form-single ">
                                  <input type="text" name="name"  id="name" class="form-control" value="{{old('name')}}"  placeholder="Nome Completo" />
                              </div>
                          </div>
                          <div class="form-group">
                          <label>email</label>
                              <div class="form-single">
                                  <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Endereco Electronico" />
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
                              </div>
                        
                          </div>

                          <div class="form-group">
                              <label>Tipo de Usuário</label>
                              <div class="form-single">
                                 <select  name="permission" class="form-control" id="permission">
                                    <option   selected="" >Tipo de Usuário</option>
                                    <option value="0">Administrador</option>
                                    <option value="1">Nível distrital</option>
                                    <option value="2">Nível provincial</option>
                                    <option value="3">Nível Central </option>
                                    <option value="4">Jurista</option>   
                                 </select>
                              </div>
                          </div>
                          
                      
                          <div class="form-group">

                            <button type="reset" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar
                             </button>
                            <button type="submit" class="btn btn-secondary btn-sm" id="btn-save">Salvar</button>
                         
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
                      <h1>Emcaminhar Ocorrência</h1>
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
                              <label>Parecer</label>
                              <div class="form-single ">
                                 <textarea name="parecer" id="parecer" class="form-control"  placeholder="parecer"></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label>Enviar Para</label>
                              <div class="form-single">
                                 <select  name="permission" class="form-control" id="permission">
                                    <option   selected="" >Tipo de Usuário</option>
                                    <option value="1">Nível distrital</option>
                                    <option value="2">Nível provincial</option>
                                    <option value="3">Nível Central </option>
                                    <option value="4">Jurista</option>   
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
                <label class="modal-title">Editar Usuário</label>
                <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
            </div>
            <!-- Corpo Modal-->
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
         
                <div id="editUserBody">
                    
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-secondary btn-sm" id="submitEditUser">Actualizar</button>
                <button type="button" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar</button>
            
                
                </div>
            </div>
          
                
        </div>
    </div>
</div>

<!-- Delete Product Modal -->
<div class="modal" id="deleteUser" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <label>Deseja remover este dado?</label>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="submitDeleteUser">Sim</button>
                <button type="button" class="btn btn-secondary" id="noDelete"  data-dismiss="modal">Não</button>
            </div>
        </div>
    </div>
</div>
                    
                   