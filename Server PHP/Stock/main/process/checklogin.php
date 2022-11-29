<?php
session_start();
include ('../../includes/db.php');
if( isset($_POST["user"]) && isset($_POST["password"])){
	$user = $_POST["user"];
	$pass = $_POST["password"];
	$sql="SELECT * FROM usuarios WHERE USER='$user'";
	$mysqli = ConectarDB();
	$resultado = $mysqli->query($sql);
	if($resultado->num_rows == 1){
		$fila = $resultado->fetch_assoc();
		if($fila['PWD'] == $pass){
			$_SESSION['usuario']['nombre'] = $user;
			$_SESSION['usuario']['permisos_mto'] = $fila['PERMISOS'];
			$_SESSION['usuario']['name'] = "";
			//echo "Usuario y Contraseña correctos";
			if($fila['PERMISOS'] == 1){	
				header('refresh:0; url=../selectname.php');
			}
			else{
				$_SESSION['usuario']['name'] = $fila['NOMBRE'];
				header('refresh:0; url=../index.php');
			}
			
		}
		else{
			//echo "Contraseña incorrecta";
			header('refresh:0; url=../iniciar.php?id=0');
		}
	}
	else{
		//echo "Usuario no econtrado";
		header('refresh:0; url=../iniciar.php?id=1');
	}
}
?>