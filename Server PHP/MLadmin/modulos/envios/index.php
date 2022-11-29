<?php
    session_start();
    if(!isset($_SESSION['usuario']['user']) || empty($_SESSION['usuario']['user'])) 
    header('refresh:0; url=../login');

    include ('../database/db.php');
    $mysqli = ConectarDB();

    //$sql = "SELECT * FROM articulos GROUP BY articulo";
    $sql = "SELECT * FROM envios ORDER BY radio";
    $resultados = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include('../../include/head.php'); ?>
</head>
    <body class="sb-nav-fixed">
        
        <?php include('../../include/nav.php'); ?>
        
        <div id="layoutSidenav">
        <?php include('../../include/menu.php'); ?>

        <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid pt-5">

                        <div class="card mb-4">
                            <div class="card-header">
                               Envíos a Domicilio
                            </div>
                        </div>

                        <?php if($resultados->num_rows > 0 ){
                            while($row = $resultados->fetch_assoc()){
                        ?>

                        <div class="row">
                            <div class="form-group col-md-2"><h4 class="card-title">Radio #<?php echo $row['radio']; ?></h4></div>
                            <div class="form-group col-md-4">
                            <input type="number" class="form-control" id="radio<?php echo $row['_id']; ?>" value="<?php echo $row['precio']; ?>" min="1" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <button class="btn btn-primary" onclick="editar(<?php echo $row['_id']; ?>);">Editar</button>
                                <button class="btn btn-success" disabled id="btnGuardar<?php echo $row['_id']; ?>" onclick="guardar(<?php echo $row['_id']; ?>);">Guardar</button>
                            </div>

                        </div>
                        <hr class="hr2">

                        <?php }
                        }
                        ?>
                        
                    </div> 

                </main>
                
                <div id="resultado"></div>

                

            </div>
        </div>
        
        <?php include('../../include/footerjs.php'); ?>

        <script type="text/javascript">

            function editar(id){
                document.getElementById("btnGuardar"+id).disabled = false;
                document.getElementById("radio"+id).readOnly = false;
                
            }

            function guardar(id){
                var precio = document.getElementById("radio"+id).value;
                
                $.ajax({
                        type: "POST",
                        url: "acciones/edit_precio.php",
                        data: "precio=" + precio +"&id="+ id ,
                        beforeSend: function () {
                            //$("#resultado").html("Procesando, espere por favor...");
                        },
                        success: function(response) {
                            if(response == 'ok'){
                                document.getElementById("btnGuardar"+id).disabled = true;
                                document.getElementById("radio"+id).readOnly = true;
                                alert("Precio actualizado correctamente.");
                            }
                            else{
                                alert("Error al actualizar el precio.");
                            }
                        }
                });

            }
            

        </script>

    </body>
</html>
