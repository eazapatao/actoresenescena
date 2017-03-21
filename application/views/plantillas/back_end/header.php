

    <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>EE</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Actores </b>en escena</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- Es posible agregar imagen del usuario -->
                            <span class="hidden-xs">Panel administrador</span><br>


                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                                                       <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-center">
                                   <center><span class="hidden-xs">  <?php echo date("d-m-Y"); ?></span></center>
                                    <center><a href="<?= base_url()?>index.php/login/logout" class="btn btn-primary btn-flat" class="btn btn-default btn-flat">Cerrar sesión</a></center>

                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
