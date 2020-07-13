  

  <div class="modal " id="aprovar" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!--  Cabecalho Modal -->
                    <div class="modal-header">
                      <h1>Jornalista</h1>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Corpo Modal -->
                    <div class="modal-body">
                    
                       <form id="aprovar_form" name="aprovar_form">
                           @csrf
                          <div class="form-group">
                              <label></label>
                    
                            </div>
                    

                    
                          <div class="form-group">

                            <button type="reset" class="btn btn-secondary btn-sm modelClose" data-dismiss="modal">Cancelar
                             </button>
                            <button type="submit" class="btn btn-secondary btn-sm" id="btn-save">Aprovar</button>
                         
                           </div>
                          </form>
                      </div>
                    </div>
                </div>
            </div>