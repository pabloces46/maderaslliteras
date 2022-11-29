<?php   
session_start();
session_destroy();

if(isset($_SESSION['usuario']['nombre']) && !empty($_SESSION['usuario']['nombre'])) 
header('refresh:0; url=index.php');
else{
    header('refresh:0; url=main/iniciar.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VINVENTIONS ARG</title>

    <!-- Bootstrap Core CSS -->
    <link href="../Estilos/Inicio/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../Estilos/Inicio/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../Estilos/Inicio/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../Estilos/Inicio/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>

	function campo_vacio(f) { 
		if (f.user.value   == '' || f.password.value   == '') {
			alert("Los campos no pueden estar vacíos!");  
			return false; 
		}
		else{
			return true;
		}
	}
	</script>



</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Iniciar Sesion</h3>
                    </div>
                    <div class="panel-body">
                    <?php
						if(isset($_GET["id"]) && $_GET["id"] == 1)
                    		echo "<div class='alert alert-danger'>Usuario no encontrado</div>";
						if(isset($_GET["id"]) && $_GET["id"] == 0)
							echo "<div class='alert alert-danger'>Contraseña incorrecta</div>";
					?>
                        <form role="form" action="process/checklogin.php" method="post" onsubmit="return campo_vacio(this)">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="user" type="user" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Iniciar</button>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Entrar como invitado</h3>
                    </div>
                    <div class="panel-body">

                                <a href="process/invitadologin.php?invitado=true"><button type="button" class="btn btn-lg btn-success btn-block">Entrar</button></a>

                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- jQuery -->
    <script src="../Estilos/Inicio/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../Estilos/Inicio/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../Estilos/Inicio/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../Estilos/Inicio/dist/js/sb-admin-2.js"></script>

</body>

</html>
