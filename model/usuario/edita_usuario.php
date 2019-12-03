<?php
    include_once '../conexion.php';
    include_once '../usuario/funciones.php';
    $id_user = $_POST['id_user'];
?>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Edita usuarios</h2>
            <div class="clearfix"></div>
        
        </div>
        <div class="x_content">
            <?php
                 $sql = $conn->prepare("select * from usuarios where id_user=?");
                 $sql->bindParam(1, $id_user, PDO::PARAM_INT);
                 $sql->execute();
 
                 if($sql->rowCount()>0){
                    while($rows = $sql->fetch(PDO::FETCH_ASSOC)){
                        $name = $rows['name'];
                        $ps = $rows['password'];
                        $username = $rows['username'];
                        $ap = $rows['apellido_p'];
                        $am = $rows['apellido_m'];
                        $status = $rows['status'];
                    }
                }
               
            ?>
            
            <form name="actualizar_user" id="actualizar_user" method="POST" onsubmit="return false;"  action="">
                <input type="hidden" id="id_user" name="id_user" value="<?php echo $id_user ?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username"  placeholder="Nombre de usuario" value="<?php echo $username ?>" require>
                </div>  
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" value="<?php echo $name ?>" require>
                </div>
                        
                <div class="form-group">
                    <input type="text" class="form-control" name="ape_paterno" id="ape_paterno" placeholder="Apellido paterno"  value="<?php echo $ap ?>" require>
                </div>
                        
                <div class="form-group">
                    <input type="text" class="form-control" name="ape_materno" id="ape_materno" placeholder="Apellido materno" value="<?php echo $am ?>" require>
                </div>

                <div class="form-group">
                    <label for="">Estatus</label>
                    <select class="form-control" id="editStatus" name="editStatus">
                        <?php
                            if ($status=='a'){
                                echo "<option value='a'>Activo</option>";
                                echo "<option value='i'>Inactivo</option>";
                            }else{
                                echo "<option value='i'>Inactivo</option>";
                                echo "<option value='a'>Activo</option>";
                            }
                        ?>  
                    </select>
                </div>
                        
                    
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-success" onclick="updateUser();"><i class="fa fa-upload"> Actualizar</i></a>
                </div>
            </form>
        </div>
    </div>
</div>