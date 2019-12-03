<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title">
			<i class="fa fa-anchor"></i> <span>MVC</span></a>
          </div>
          <div class="clearfix"></div>
          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <h6>
              <?php
                if ($_SESSION['id_rol']==100) {
                  echo '<h6>Administrador</h6>';
                }else{
                  echo '<h6>Usuario mortal</h6>';
                }
                ?>
            </h6>
            </div>
          </div>
          <!-- /menu prile quick info -->
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>MENU</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="#" onclick="menujquery(1);">Json Service</a>
                    <li><a href="#" onclick="menujquery(2);">Json Load</a>
                    <li><a href="#" onclick="menu(3);">XML Service</a>
                    <li><a href="#" onclick="menujquery(4);">XML Load</a>
                    <li><a href="#" onclick="menu(5);">XSL-XSL</a>
                    <li><a href="#" onclick="menujquery(6);">Consulta</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-search"></i> Consulta<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="#" onclick="menujquery(7);"> <i class="fa fa-user"></i> Consulta</a>
      		        </ul>
                    </li>
                  </ul> 
                </li>		  
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
	</div>
      </div>		  
      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>		  
            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt=""><?php echo $_SESSION['nom_completo'];?> <?php echo $_SESSION['ap'];?> <?php echo $_SESSION['am'];?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="view/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>	
            </ul>
          </nav>  
        </div>
      </div>
      <!-- /top navigation -->		
      <!-- page content -->
      <div class="right_col" role="main" id="contenido_principal">
         contenido princial
      </div>
      <!-- /page content -->
    </div>
  </div>	  
</body>  
