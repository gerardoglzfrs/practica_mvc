<?php
    $opcion = $_POST['opcion']; 
    //echo "Opciones seleccionadas".$opcion;

    switch ($opcion) {
        case 1:
            header('Location:../model/json/jsonservice.php');
            break;

        case 2:
            include_once '../model/json/jsonload.php';
            break;
        
        case 3:
            header ('Location: ../model/xml/xmlservice.php' );
            break;

        case 4:
            include_once '../model/xml/xmlload.php';
            break;

        case 5:
            header ('Location: ../model/xml/xmlxsl.php');
            break;
    
        case 6:
            include_once '../model/consulta.php';
            break;
  
        case 7:
            include_once '../model/usuario/consulta.php';
            break;
            
        default:
            echo "Erorr. Contacta al administrador";
            break;
       
    }
?>