<?php
    include_once '../conexion.php';
    $id_user = $_POST["id_user"];
    $sql = $conn->prepare("delete from usuarios where id_user=?"); 
    $sql->bindParam(1, $id_user, PDO::PARAM_INT);
    $sql->execute();
?>