<?php
    session_start();
    include_once 'conexion.php';
    $usuario = $_POST['usuario'];
    $passwd = $_POST['passwd'];
    $sql = $conn->prepare("select*from usuarios where username = ? and password = ? and status = 'a'");
    $sql->bindParam(1, $usuario, PDO::PARAM_STR);
    $sql->bindParam(2, $passwd, PDO::PARAM_STR);
    $sql->execute();
    if ($sql->rowCount()>0) {
        while($rows = $sql->fetch(PDO::FETCH_ASSOC)){
            $_SESSION['id_user']=$rows['id_user'];
            $_SESSION['nom_completo']=$rows['name'];
            $_SESSION['ap']=$rows['apellido_p'];
            $_SESSION['am']=$rows['apellido_m'];
            $_SESSION['id_rol']=$rows['id_rol'];
            $_SESSION['staus']=$rows['status'];
        }
        $_SESSION['mvc_conectado']=1;
    }else{
        $_SESSION['mvc_conectado']=2;   
    }
    header("Location: ../index.php");
?>