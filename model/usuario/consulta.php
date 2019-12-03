<?php
      include_once "../model/conexion.php";
      include_once "../model/usuario/funciones.php";
?>
<div id="edita-usuario"></div>
<div id="nuevo-usuario"></div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
            <a onclick="newUser();" class="btn btn-round btn-primary"> <i class="fa fa-users"></i> Agregar usuario</a>
        <div class="x_title">
            <h2>Lista de usuarios</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php
                $sql = $conn->prepare("select * from usuarios");
                $sql->execute();

                if($sql->rowCount()>0){
            ?>
             
                <table id="dataTable" class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Rol</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($rows = $sql->fetch(PDO::FETCH_ASSOC)){
                                echo '<tr>';
                                    echo '<td>'.$rows['name'].'</td>';
                                    echo '<td>'.$rows['apellido_p'].'</td>';
                                    echo '<td>'.$rows['apellido_m'].'</td>';
                                    echo '<td>'.$rows['username'].'</td>';
                                    echo '<td>'.roles($rows['id_rol']).'</td>';
                                    echo '<td>'.statusLabel($rows['status']).'</td>';
                                    echo '<td class="text-center" style="cursor:hand;"><a onclick="editUser('.$rows['id_user'].');"> <i class="fa fa-edit"></i> </a> <a onclick="deleteUser('.$rows['id_user'].');" > <i class="fa fa-trash"></i> </a></td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
                <?php } ?> 
        </div>
    </div>
</div>
