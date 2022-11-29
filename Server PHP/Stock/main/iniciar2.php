<?php   
session_start();
session_destroy();

if(isset($_SESSION['usuario']['nombre']) && !empty($_SESSION['usuario']['nombre'])) 
header('refresh:0; url=index.php');
else{
    header('refresh:0; url=../../vinventions/modulos/login/login.php');
}


?>
