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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>

	function validacion(){ 
		valor = document.getElementById("pwd").value;
		if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		  return false;
		}
		
		valor = document.getElementById("pwd1").value;
		if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		  return false;
		}
		
		valor = document.getElementById("pwd2").value;
		if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		  return false;
		}
		
		return true;
	}
	</script>

<?php	
session_start();

include ('../db.php');
$user=$_SESSION['usuario']['nombre'];
$mysqli = ConectarDB();
$resultado = $mysqli->query("SELECT * FROM usuariostareas WHERE USER = '$user'");
$fila = $resultado->fetch_assoc();
$oldpsw = $fila['PWD'];
?>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cambiar la contraseña</h3>
                    </div>
                    <div class="panel-body">
                    
                        <form role="form" action="acciones/cambiarpsw.php" method="post" onsubmit="return validacion()">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control"  id="pwd" placeholder="Contraseña anterior" name="pwd" type="password" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nueva contraseña" id="pwd1" name="pwd1" type="password" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Otra vez la nueva contraseña" id="pwd2" name="pwd2" type="password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Cambiar</button>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
