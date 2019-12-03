
<div class="modal fade" id="reg_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-warning" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header text-center">
        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Editar registro</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
        <div class="modal-body">
            <form name="reg_user" id="reg_user" method="GET" action="model/user/registrar.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario" require>
                </div>  

                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" require>
                </div>
                   
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" require>
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="ape_paterno" id="ape_paterno" placeholder="Apellido paterno" require>
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="ape_materno" id="ape_materno" placeholder="Apellido materno" require>
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Estatus</label>
                        <select class="form-control" id="status" name="status">
                            <option value='a'>Activo</option>
                            <option value='i'>Inactivo</option>
                        </select>
                </div> 
            
                <div> 
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo de usuario</label>
                            <select class="form-control" id="tipo_usuario" name="tipo_usuario">
                                <option value='100'>Administrador</option>
                                <option value='200'>Usuario normal</option>
                            </select>
                    </div>  
                </div>
                <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-success"><i class="fa fa-paper-plane-o ml-1"> Actualizar</i></a>
                </div>
            </form> 
        </div>
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>
