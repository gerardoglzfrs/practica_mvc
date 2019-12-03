
function acceso(){
    var login = document.getElementById("frm_login");
    var user = document.getElementById("usuario").value;
    var passwd = document.getElementById("passwd").value;

    login.action="model/acceso.php";
    
    //Uso de las expresiones regulares
    if (user.length==0 || passwd.length == 0 || /^\s/.test(user)) {
        alert('Ingrese su usuario o contraseña');    
    }else{
        login.submit();
    }
    
}

function validarForm(){
    if($("#username").val()==""){
        alert("El nombre no puede estar vacio");
        $("#username").focus();
        return false;
    }

    if($("#password").val()==""){
        alert("La contraseña no puede estar vacio");
        $("#password").focus();
        return false;
    }
    
    if($("#name").val()==""){
        alert("El nombre no pude estar vacio");
        $("#name").focus();
        return false;
    }

    if($("#ape_paterno").val()==""){
        alert("El apellido paterno no pude estar vacio");
        $("#ape_paterno").focus();
        return false;
    }

    if($("#ape_materno").val()==""){
        alert("El apellido paterno no pude estar vacio");
        $("#ape_materno").focus();
        return false;
    }

    if ($("#status").is(":selected")) {
        alert("seleccione una opcion de estado");
        return false;
    }
    return true;
}

$(document).ready(function(){
    $("#registrar").click(function(){
            if(validarForm()){
                $.post("model/user/registrar.php", $("#reg_user").serialize(), function(res){
                    if(res == 1){
                        $("#exito").delay(500).fadeIn("slow");     
                    } else {
                        $("#fracaso").delay(500).fadeIn("slow");  
                    }
                });
            }
        });
    });

function consultaxml(){
    var buscar = document.getElementById("buscar").value;
    if (buscar=="") {
        alert('Ingrese datos');
    }else{
        let xhr = new XMLHttpRequest();
        xhr.open('POST','model/xml/xmlload.php', false);
        let formData = new FormData();
        formData.append("search",buscar);
        try {
            xhr.send(formData);
            if (xhr.status != 200) {
                alert('Error del Sistema');
            }else{
                document.getElementById("contenido_principal").innerHTML = (xhr.response);
            }
        } catch (err) {
            alert('Error del Menu');
        }
    }
}

function menu(opcion){
    let xhr =new XMLHttpRequest();
    xhr.open('POST','controller/controller.php', false);
    let formdata = new FormData();
    formdata.append("opcion", opcion);
    try {
        xhr.send(formdata);
        if (xhr.status != 200) {
            alert('Error del Sistema');
        }else{
            document.getElementById('contenido_principal').innerHTML = (xhr.response);
        }
    } catch (err) {
        alert('Error del Menu');
    }
}

function consultajson(){
    var buscar = document.getElementById("buscar").value;
    if (buscar=="") {
        alert('Ingrese datos');
    }else{
    let xhr = new XMLHttpRequest();
    xhr.open('POST','model/json/jsonload.php', false);
    let formData=new FormData();
    formData.append("search",buscar);
    try {
        xhr.send(formData);
        if (xhr.status != 200) {
            alert('Error del Sistema');
        }else{
            document.getElementById('contenido_principal').innerHTML = (xhr.response);
        }
    } catch (err) {
        alert('Error del Menu');
    }
}
}

function consultaxsl(){
    let xhr = new XMLHttpRequest();
    xhr.open('POST','model/xml/xmlxsl.php', false);
    let formData = new FormData();
    try {
        xhr.send(formData);
        if (xhr.status != 200) {
            alert('Error del Sistema');
        }else{
            document.getElementById("contenido_principal").innerHTML = (xhr.response);
        }
    } catch (err) {
        alert('Error del Menu');
    }
}

function menujquery(opcion){
    $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: {opcion: opcion},
        beforeSend: function(){
            $("#contenido_principal").html("<img src='images/ajax-loader.gif'>" );
        },
        success: function(respuesta){
            $("#contenido_principal").html(respuesta);
        }
    });
}
    
function consultaxmljquery(){
    $.ajax({
        type: "POST",
        url: "model/xml/xmlload.php",
        data: $("#form_consulta").serialize(),
        beforeSend: function(){
            $("#contenido_principal").html("<img src='images/ajax-loader.gif'>");
        },
        success: function(respuesta){
            $("#contenido_principal").html(respuesta);
        }
    });
}

function editUser(id_user){
    $.ajax({
        type: "POST",
        url: "model/usuario/edita_usuario.php",
        data: {id_user:id_user},
        beforeSend: function(){
            $('#edita-usuario').html("<img src='images/ajax-loader.gif'>");
        },
        success: function(resultado){
            $('#nuevo-usuario').html('');
            $('#edita-usuario').html(resultado);
        }
    });
}

function newUser(){
    $.ajax({
        type: "POST",
        url: "model/usuario/nuevo_usuario.php",
        beforeSend: function(){
            $('#nuevo-usuario').html("<img src='images/ajax-loader.gif'>");
        },
        success: function(resultado){
            $('#edita-usuario').html('');
            $('#nuevo-usuario').html(resultado);
        }
    });
}

//Actualizar usuario
function updateUser(){
    $.ajax({
        type: "POST",
        url: "model/usuario/guardar_usuario.php",
        data: $("#actualizar_user").serialize(),
        beforeSend: function(){
            $("#edita-usuario").html("<img src='images/ajax-loader.gif'>");
        },
        success: function(respuesta){
            if($.trim(respuesta)==="OK"){
                menujquery(7);
            }else{
                $("#contenido_principal").html(respuesta);
            }
        }
    });
}


//Añadir usuario
function addUser(){
    $.ajax({
        type: "POST",
        url: "model/usuario/registrar.php",
        data: $("#add_user").serialize(),
        beforeSend: function(){
            $("#nuevo-usuario").html("<img src='images/ajax-loader.gif'>");
        },
        success: function(){
            menujquery(7);
        }
    });
}


//Delete user
function deleteUser(id_user){
    var opcion = confirm("Are you suere to delete this user");
    if(opcion==true){
        $.ajax({
            type: "POST",
            url: "model/usuario/borrar.php",
            data: {id_user:id_user},
            beforeSend: function(){
                $("#nuevo-usuario").html("<img src='images/ajax-loader.gif'>");
            },
            success: function(){
                menujquery(7);
            }
        });
    }else{
        menujquery(7);
    }
}