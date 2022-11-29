<?php
    session_start();
    if(!isset($_SESSION['usuario']['user']) || empty($_SESSION['usuario']['user'])) 
    header('refresh:0; url=../login');

    include ('../database/db.php');
    $mysqli = ConectarDB();

    //$sql = "SELECT * FROM articulos GROUP BY articulo";
    $sql = "SELECT * FROM contacto WHERE _id = '1'";
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
                               Info de Contacto
                            </div>
                        </div>

                        <?php if($resultados->num_rows > 0 ){
                            $row = $resultados->fetch_assoc();
                        ?>

                        <div class="row">
                            <div class="form-group col-md-2"><h4 class="card-title">Teléfono</h4></div>
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="telefono" value="<?php echo $row['telefono']; ?>" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <button class="btn btn-primary" onclick="editar('telefono');">Editar</button>
                                <button class="btn btn-success" disabled id="btnGuardartelefono" onclick="guardar('telefono');">Guardar</button>
                            </div>

                        </div>

                        <hr class="hr2">

                        <div class="row">
                            <div class="form-group col-md-2"><h4 class="card-title">Whatsapp</h4></div>
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="whatsapp" value="<?php echo $row['whatsapp']; ?>" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <button class="btn btn-primary" onclick="editar('whatsapp');">Editar</button>
                                <button class="btn btn-success" disabled id="btnGuardarwhatsapp" onclick="guardar('whatsapp');">Guardar</button>
                            </div>

                        </div>

                        <hr class="hr2">

                        <div class="row">
                            <div class="form-group col-md-2"><h4 class="card-title">Horarios</h4></div>
                            <div class="form-group col-md-4">
                            <textarea class="form-control"id="horarios" readonly rows="4"><?php echo $row['horarios'];?></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <button class="btn btn-primary" onclick="editar('horarios');">Editar</button>
                                <button class="btn btn-success" disabled id="btnGuardarhorarios" onclick="guardar('horarios');">Guardar</button>
                            </div>

                        </div>

                        <hr class="hr2">

                        <div class="row">
                            <div class="form-group col-md-2"><h4 class="card-title">E-mail</h4></div>
                            <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="mail" value="<?php echo $row['mail']; ?>" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <button class="btn btn-primary" onclick="editar('mail');">Editar</button>
                                <button class="btn btn-success" disabled id="btnGuardarmail" onclick="guardar('mail');">Guardar</button>
                            </div>

                        </div>

                        <?php 
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
                document.getElementById(id).readOnly = false;
                
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
