<?php
session_start();
include ('db.php');
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
			$_SESSION['usuario']['permisos'] = $fila['PERMISOS'];
			//echo "Usuario y Contraseña correctos";
			header('refresh:0; url=Mtto/buscar.php');
		}
		else{
			//echo "Contraseña incorrecta";
			header('refresh:0; url=index.php?id=0');
		}
	}
	else{
		//echo "Usuario no econtrado";
		header('refresh:0; url=index.php?id=1');
	}
}
?>