<?php
session_start();
//session_destroy();

if(!isset($_SESSION['usuario']['nombre']) || empty($_SESSION['usuario']['nombre'])) 
	header('refresh:0; url=iniciar.php');
include('../myphp-backup.php'); 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>VINVENTIONS ARG</title>

        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="../Estilos/Inicio/assets/css/styles.css" />

		<!-- Font Awesome Stylesheet -->
		<link rel="stylesheet" href="../Estilos/Inicio/assets/font-awesome/css/font-awesome.css" />

		<!-- Including Open Sans Condensed from Google Fonts -->
		<link rel="stylesheet" href="../Estilos/Inicio/assets/fonts.css" />

        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
       
    </head>
    
    <body>
    	
		<a href="../../vinventions/modulos/menu"> <img src="../Estilos/images/VinventionsLogo.jpg" width="250px"></a>

		<br>
		<H1 style="color: #640026;" >MANTENIMIENTO</H1>

        <br>
    	<nav id="colorNav">
			<ul>
				
				<li class="green">
					<a href="../stock" class="icon-cogs"></a>
					<ul>
						<li><a href="#">Stock Repuestos</a></li>
					</ul>
				</li>
				<li class="red">
					<a href="../registroOT" class="icon-calendar"></a>
					<ul>
						<li><a href="#">Registros OT</a></li>
					</ul>
				</li>
				<li class="blue">
					<a href="../tareas" class="icon-wrench"></a>
					<ul>
					  <li><a href="#">Tareas</a></li>
					</ul>
				</li>
			</ul>
		</nav>
        <br><br>
        <p>Usuario: <b><?php echo $_SESSION['usuario']['name'];?></b>  <?php if( $_SESSION['usuario']['name'] != "Invitado" ){ ?> - <a href="#">Cambiar Contraseña</a> <?php }?></p>
		
		<?php if( $_SESSION['usuario']['permisos'] == 1 ){ ?><p><a href="selectname.php">Cambiar de Usuario</a> - <a href="process/cerrar.php">Salir</a></p><?php } else { ?>
		<p><a href="process/cerrar.php">Cambiar de Usuario</a></p><?php } ?>
        <!-- BSA AdPacks code. Please ignore and remove.--> 
		<script src="../Estilos/Inicio/assets/jquery-1.8.2.min.js"></script>
        <script src="../Estilos/Inicio/assets/v1.js" async></script>
        
    
    </body>
</html>
