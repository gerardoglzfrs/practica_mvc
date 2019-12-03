<body style="background:#F7F7F7;">
   <center>
    <div class="">
        <div id="wrapper">
            <div id="" class="animate form">
                <section class="login_content">
                    <form  name="frm_login" id="frm_login" method="post">
                        <h1>Control de acceso</h1>
                        
                        <div>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Username" require>
                        </div>
                        
                        <div>
                            <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password" require>
                        </div>
                        <?php 
                        if (isset($_SESSION['mvc_conectado']) == 2) {
                            include_once 'view/mensaje.php';
                            $_SESSION['mvc_conectado']=0;
                        }
                        ?>
                        <div>
                            <a class="btn btn-success submit" onclick="acceso();">Entrar</a>
                        </div>

                        <div class="clearfix"></div>
                        <div class="resultado"></div>
                        <div class="separator">
                        <div class="clearfix"></div>
                        <br>
                        
                            <div>
                                <h1><i class="fa fa-anchor" style="font-size: 26px;"></i> MVC</h1>
                                <p>©2019 Programación Web Avazada</p>
                            </div>

                    </form>
                </section>
            </div>
        </div>
    </div>
 </center>
</body>