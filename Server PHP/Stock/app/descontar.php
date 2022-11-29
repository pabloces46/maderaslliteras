<?php
session_start();

include_once ('../includes/db.php');
$mysqli = ConectarDB();

$user = $_GET['u'];
$cantidad = $_GET['ca'];
$parcialApp = $_GET['q'];
$codigo = $_GET['co'];

$sql = "SELECT STOCK,REPUESTO FROM inventario WHERE CODIGO = '$codigo'";
$resultados = $mysqli->query($sql);
$row=$resultados->fetch_assoc();

$sql = "UPDATE inventario SET STOCK = STOCK - '$cantidad' WHERE CODIGO = '$codigo'";

if( $mysqli->query($sql) === True){
    $fecha = date("Y-m-d H:i");
    $sql = "SELECT REPUESTO,STOCK,CODIGO,UNIDAD FROM inventario WHERE CODIGO = '$codigo'";
    $resultados = $mysqli->query($sql);
    $row=$resultados->fetch_assoc();
    $parcial = $row['STOCK'];
    $sql2 = "INSERT INTO movimientos (FECHA,CODIGO,ARTICULO,TIPO_MOV,CANTIDAD,USER,PARCIAL,DISPOSITIVO,PARCIALAPP) VALUES ('$fecha','$codigo','$row[REPUESTO]','Egreso','$cantidad','$user','$parcial','APP','$parcialApp')";
    if( $mysqli->query($sql2) === True){
        
        //respondo a la app
        echo "ok";

        $getUsers = $mysqli->query("SELECT * FROM usuarios WHERE NOTIF_MOV = 'SI'");
        while($user2 = $getUsers->fetch_assoc()){
            $texto = "<b>$user</b> retiró <b>$cantidad $row[UNIDAD]</b> 
                  <br> Artículo: <b>$row[REPUESTO]</b> 
                  <br> Código: <b>$row[CODIGO]</b> - Stock: <b>$parcial</b>";
            $notif = $mysqli->query("INSERT INTO notificaciones (USER,TEXTO,TIPO) VALUES ('$user2[USER]','$texto','MOV')");
        }

        if($parcialApp != $parcial){
            $getUsers = $mysqli->query("SELECT * FROM usuarios WHERE NOTIF_DIF = 'SI'");
            
            if($parcialApp == -1){
                $texto = "<b>$user</b> no indicó el stock 
                        <br> Artículo: <b>$row[REPUESTO]</b> 
                        <br> Código: <b>$row[CODIGO]</b> - Stock: <b>$parcial</b>";
                while($user2 = $getUsers->fetch_assoc()){    
                    $notif = $mysqli->query("INSERT INTO notificaciones (USER,TEXTO,TIPO) VALUES ('$user2[USER]','$texto','DIF2')");
                }

                }
            else{
                $texto = "No coincide el stock indicado por <b>$user</b>
                        <br> Artículo: <b>$row[REPUESTO]</b> 
                        <br> Código: <b>$row[CODIGO]</b>
                        <br> Stock: <b>$parcial</b>
                        <br> Stock Indicado: <b>$parcialApp</b>";
                    
                
                while($user2 = $getUsers->fetch_assoc()){    
                    $notif = $mysqli->query("INSERT INTO notificaciones (USER,TEXTO,TIPO) VALUES ('$user2[USER]','$texto','DIF')");
                }
            }
            //mando notif de dif de parcial
        }
    }
    
}

?>