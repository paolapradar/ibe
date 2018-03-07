<!-- REGISTRO DE USUARIO -->
<div class="modal fade" id="modalNewUsu" tabindex="-1" role="dialog" aria-labelledby="ModalLabelNewUsu" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="ModalLabelNewUsu">Registrar</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="newUsu" action="" >
            <div class="form-group">
              Ánimate a ser parte de la experiencia que apoya la orientación y proceso de formación educativa.
            </div>
            <div class="form-group">
        			<input type="text" class="form-control" name="nomUsu" id="nomUsu"  placeholder="Nombre completo"/>
            </div>
            <div class="form-group">
        			<input type="email" class="form-control" name="emailUsu" id="emailUsu"  placeholder="Email"/>
            </div>
            <div class="form-group">
        			<input type="text" class="form-control" name="usu" id="usu"  placeholder="Usuario"/>
            </div>
            <div class="form-group">
        			<input type="password" class="form-control" name="claveUsu" id="claveUsu"  placeholder="Clave"/>
            </div>
            <div class="form-group">
        			<input type="password" class="form-control" name="conClaveUsu" id="conClaveUsu"  placeholder="Confirmar Clave"/>
            </div>
            <div class="form-group ">
                @csrf
        			<button type="button" class="btn btn-info btn-lg btn-block login-button">Registrar</button>
        		</div>
          </form>
      </div>
    </div>
  </div>
</div>
<!-- REGISTRO DE USUARIO FIN-->
