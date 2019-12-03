<?php
  include_once '../conexion.php';
  include '../user/reg_modal.php';
  $busqueda = $conn->prepare("select * from usuarios");
  $busqueda->execute();
  //almacenar los datos en una variable
  $datos = $busqueda->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido paterno</th>
      <th scope="col">Apellido materno</th>
      <th scope="col">Rol</th>
      <th scope="col">Estatus</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>

<?php
  foreach ($datos as $mostrar) {
      echo '<tr>';
      echo '<td>'.$mostrar['id_user'].'</td>';
      echo '<td>'.$mostrar['name'].'</td>';
      echo '<td>'.$mostrar['apellido_p'].'</td>';
      echo '<td>'.$mostrar['apellido_m'].'</td>';
  
      if ($mostrar['id_rol']=='100') {
        echo '<td>Administrador</td>';
      }else{
        echo '<td>Usuario normal</td>';
      }

      if ($mostrar['status']=='a') {
        echo '<td style="color: green;">Activo</td>';
      }else{
        echo '<td style="color: red;">Inactivo</td>';
      }
   
      echo '<td> 
        <a class="btn btn-danger" id="eliminar" onclick="eliminar();">
        <i class="fa fa-trash-o fa-lg"></i> Eliminar </a> 
        
        <a class="btn btn-success" id="editar" data-toggle="modal" data-target="#reg_modal"  onclick="editar();"> 
        <i class="fa fa-pencil fa-lg"></i> Editar </a>
           
      </td>';
     echo ' </tr>';
    
  }
?>
