<?php
if(isset($_POST['search'])){
    $url = "http://127.0.0.1/Practica1/model/json/jsonservice.php?search=".$_POST['search']."";     
}else{
    $url = "http://127.0.0.1/Practica1/model/json/jsonservice.php";
}
$datos = (array) json_decode(file_get_contents($url));  

if (empty($datos)) {
    echo '<center><h1 style="color:red">¡No existen datos!</h1></center>';
}

    foreach ($datos as $usuarios) {
        echo "<article>";
            echo "<h1>".$usuarios->name."</h1>";
            echo "<h5>".$usuarios->username."</h5>";
        echo "</article>";      
    }                     


?>