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
    header("Content-Type: text/xml");
    if ($sql->rowCount()>0) {
        echo "<?xml version='1.0' encoding='UTF-8' ?>";
        echo "<usuarios>";
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo "<usuario>";
                    echo "<nombre>".$row['name']."</nombre>";
                    echo "<apellidop>".$row['apellido_p']."</apellidop>";
                    echo "<apellidom>".$row['apellido_m']."</apellidom>";
                    echo "<username>".$row['username']."</username>";
                echo "</usuario>";
            } 
        echo "</usuarios>";
    }else{
        echo "<?xml version='1.0' encoding='UTF-8' ?>";
        echo "<usuarios></usuarios>";
    }
    
?>