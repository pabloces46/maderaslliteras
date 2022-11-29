

<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">ARTICULOS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <div id="notificaciones"></div>    
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?= $_SESSION['usuario']['name']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                         
                        <li><a href="../usuarios/password.php"><i class="fa fa-gear fa-fw"></i> Cambiar contraseña</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../usuarios/cerrar.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
						

                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Articulos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="../stock/_repuestos.php">Buscar Art.</a>
                                </li>
                                <?php if($permisos < 2){ ?>
                                <li>
                                    <a href="../stock/comprar.php">Reponer Art.</a>
                                </li>
                                <?php } ?>	
                                <?php if($permisos < 3){ ?>
                                <li>
                                    <a href="../stock/existencias.php">Existencias de Art.</a>
                                </li>
                                <?php } ?>
                                <?php if($permisos < 2){ ?>
                                <li>
                                    <a href="../stock/_movimientosdiarios.php">Movimientos de Art.</a>
                                </li>
                                <?php } ?>
                                <?php if($permisos < 2){ ?>
                                <li>
                                    <a href="../stock/crear.php">Nuevo Articulo</a>
                                </li>   
                                <?php } ?>
                                <?php if($permisos < 2){ ?>
                                <li>
                                    <a href="../stock/qr2" target="_blank">Codigos QR</a>
                                </li>  
                                <?php } ?>
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Equipos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="../stock/equipos.php">Equipos</a>
                                </li>
                                <li>
                                    <a href="../stock/nuevoequipo.php">Nuevo Equipo</a>
                                </li>   
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>

      <!-- Divider -->
      <hr class="sidebar-divider">
                    </ul>
              </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>




