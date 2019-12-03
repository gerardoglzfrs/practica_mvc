<?php
 function statusLabel($status){
    if ($status=='a') {
        $statusLabel='<span class="label label-success">Activo</span>';
    }else{
        $statusLabel='<span class="label label-danger">Inactivo</span>';
    }
    return $statusLabel;
}

function roles($id_rol){
    if($id_rol=='100'){
        $tipo_rol='<span>Administrador</span>';
    }else{
        $tipo_rol='<span>Usuario normal</span>';
    }
    return $tipo_rol;
}

function rol($id_rol){
    if($type_rol=='100'){
        $type = "<option value='100'>Administrador</option>
        <option value='200'>Usuario normal</option";
    }else{
          
    }
}   
?>