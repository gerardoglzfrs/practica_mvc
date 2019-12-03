<?php
    session_start();
    include_once 'view/header.php';

    if(isset($_SESSION['mvc_conectado']) && $_SESSION['mvc_conectado']==1){
        include_once 'view/home.php';
    }else{  
        include_once 'view/login.php';
    }
?>