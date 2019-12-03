<?php
include_once '../conexion.php';
$id_user = $_POST["id_user"];
$username = $_POST["username"];
$name = $_POST["name"];
$ap = $_POST["ape_paterno"];
$am= $_POST["ape_materno"];
$status = $_POST["editStatus"];

$sql = $conn->prepare("update usuarios set username=?, name=?, apellido_p=?, apellido_m=?, status=? where id_user=?");
$sql->bindParam(1, $username, PDO::PARAM_STR);
$sql->bindParam(2, $name, PDO::PARAM_STR);
$sql->bindParam(3, $ap, PDO::PARAM_STR);
$sql->bindParam(4, $am, PDO::PARAM_STR);
$sql->bindParam(5, $status, PDO::PARAM_STR);
$sql->bindParam(6, $id_user, PDO::PARAM_INT);

try{
    $sql->execute();
    echo("OK");
}catch(PDOException $e){
    echo "<script>alert('Error al actualizar usuario')</script>";
}
?>
