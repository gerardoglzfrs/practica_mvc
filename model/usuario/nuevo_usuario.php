<?php
    include_once '../conexion.php';
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Agregar usuario</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form name="add_user" id="add_user" method="POST" onsubmit="return false;"  action="" >
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
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo de usuario</label>
                    <select class="form-control" id="tipo_usuario" name="tipo_usuario">
                        <option value='100'>Administrador</option>
                        <option value='200'>Usuario normal</option>
                    </select>
                </div>  
            
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-success" onclick="addUser();"><i class="fa fa-save"> Guardar</i></a>
                </div>
            </form>
        </div>
    </div>
</div>