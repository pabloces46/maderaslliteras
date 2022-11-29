<?php

$id = $_POST['id'];

include ('../../database/db.php');
    $mysqli = ConectarDB();
    $sql="SELECT * FROM img_portada WHERE _id = '$id'";
    $resultados = $mysqli->query($sql);
    
    if($resultados){
        
        $row = $resultados->fetch_assoc();
        $img = "../../../server/server_img/portada/$row[img]";
        
        $sql= "DELETE FROM img_portada WHERE _id = '$id'";
        if($mysqli->query($sql)){
            //Eliminado ok
            unlink($img);
            echo "ok";
        }
    }
    

?>