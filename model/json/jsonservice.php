<?php
    include_once '../conexion.php';
    $search = '';
    if (isset($_GET['search'])) {
       $search=$_GET['search'];
    }
    if($search==""){
        $where="";
    }else{
        $where= "where username=?";
    }
    $Query = "select*from usuarios ".$where;

    $sql = $conn->prepare($Query);
    $sql->bindParam(1, $search, PDO::PARAM_STR);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        while ($rows = $sql ->fetch(PDO::FETCH_ASSOC)) {
            $datos[] = $rows;
        }
        echo json_encode($datos);
    }

?>