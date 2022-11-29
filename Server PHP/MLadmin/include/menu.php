<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>

                <div class="sb-sidenav-menu-heading">Artículos</div>
                <a class="nav-link" href="../articulos">
                    <div class="sb-nav-link-icon"></div>
                    Listado
                </a>
                <a class="nav-link" href="../articulos/nuevo.php">
                    <div class="sb-nav-link-icon"></div>
                    Nuevo Artículo
                </a>
                

                <div class="sb-sidenav-menu-heading">Otros</div>
                
                <a class="nav-link" href="../portada">
                    <div class="sb-nav-link-icon"></div>
                    Imagenes Portada
                </a>
                <a class="nav-link" href="../showroom">
                    <div class="sb-nav-link-icon"></div>
                    Imagenes Showroom
                </a>
                <a class="nav-link" href="../preguntas">
                    <div class="sb-nav-link-icon"></div>
                    Preguntas Frecuentes
                </a>
                <a class="nav-link" href="../envios">
                    <div class="sb-nav-link-icon"></div>
                    Envíos a Domicilio
                </a>
                <a class="nav-link" href="../contacto">
                    <div class="sb-nav-link-icon"></div>
                    Info de Contacto
                </a>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Has ingresado como:</div>
            
            <?php echo $_SESSION['usuario']['user']; ?>
        </div>
    </nav>
</div>