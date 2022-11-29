<?php
session_start();
include ('../../includes/db.php');
if( isset($_POST["user"]) && isset($_POST["password"])){
	$user = $_POST["user"];
	$pass = $_POST["password"];
	$sql="SELECT * FROM usuarios WHERE USER='$user' AND  ACTIVO = 'SI'";
	$mysqli = ConectarDB();
	$resultado = $mysqli->query($sql);
	if($resultado->num_rows == 1){
		$fila = $resultado->fetch_assoc();
		if($fila['PWD'] == $pass){
			$_SESSION['usuario']['nombre'] = $user;
			$_SESSION['usuario']['permisos_mto'] = $fila['PERMISOS'];
			//echo "Usuario y Contraseña correctos";
			$_SESSION['usuario']['name'] = $fila['NOMBRE'];
			header('refresh:0; url=../../index.php');
		}
		else{
			//echo "Contraseña incorrecta";
			header('refresh:0; url=../login.php?id=0');
		}
	}
	else{
		//echo "Usuario no econtrado";
		header('refresh:0; url=../login.php?id=1');
	}
}
?>