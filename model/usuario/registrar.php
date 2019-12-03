<?php
    include_once '../conexion.php';

    //Guardando datos en variables
    $username = $_POST['username'];
    $contra = $_POST['password'];
    $nombre = $_POST['name'];
    $ape_paterno = $_POST['ape_paterno'];
    $ape_materno = $_POST['ape_materno'];
    $rol = $_POST['tipo_usuario'];  
    $status = $_POST['status'];
  
    $sql = $conn->prepare("INSERT INTO usuarios (username, password, name, apellido_p, apellido_m, id_rol, status) VALUES (?, ?, ?, ?, ?, ?,?)"); 
    $sql->bindParam(1,$username, PDO::PARAM_STR);
    $sql->bindParam(2,$contra, PDO::PARAM_STR);
    $sql->bindParam(3,$nombre, PDO::PARAM_STR);
    $sql->bindParam(4,$ape_paterno, PDO::PARAM_STR);
    $sql->bindParam(5,$ape_materno, PDO::PARAM_STR);
    $sql->bindParam(6,$rol, PDO::PARAM_INT);
    $sql->bindParam(7,$status, PDO::PARAM_STR);

    try {
        $sql->execute();
        echo("OK"); 
     } catch (PDOException $e) {
        echo 'Fallo la conexion:'.$e->getMessage();
    }

?>