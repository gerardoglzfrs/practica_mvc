<?php
    if(isset($_POST['search'])){
        $url = "http://127.0.0.1/Practica1/model/xml/xmlservice.php?search=".$_POST['search']."";
    }else{
        $url = "http://127.0.0.1/Practica1/model/xml/xmlservice.php";
    }
    
    $datos = simplexml_load_file($url);
    if (empty($datos)) {
        echo '<center><h1 style="color:red">¡No existen datos!</h1></center>';
     }
     
    foreach ($datos as $usuario) {
        echo "<url>";
            echo "<li>".$usuario->nombre."</li>";
            echo "<li>".$usuario->username."</li>";
        echo "</url>";
}
?>