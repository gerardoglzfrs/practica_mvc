<div class="container">
    <div class="col-sm-6">
    <div style="margin-top:1px;">
        <div class="animate form">
            <section>
                <h3 style="color: #3498DB;">Registro de usuarios </h3>
                        <div class="clearfix"></div>
                        <div class="resultado"></div>
                        <div class="separator">
                        <div class="clearfix"></div>
                        <form name="reg_user" id="reg_user" method="POST" action="model/user/registrar.php">
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
                                    <option value='200'>Usuario mortal</option>
                                </select>
                            <div class="clearfix"></div>
                            <div class="resultado"></div>
                            <div class="separator">
                            <div class="clearfix"></div>

                            <div id="exito" style="display:none">Sus datos han sido guardados con éxito.</div>
                            <div id="fracaso" style="display:none">Se ha producido un error durante el envío de datos.</div>

                            </div>  
                                <a class="btn btn-success submit" name="registrar" id="registrar">Registrar</a>
                            </div>
                        
                </form>
            </section>
        </div>
    </div>
    </div>
</div>
