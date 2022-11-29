<?php
            session_start();
            if(!isset($_SESSION['usuario']['user']) || empty($_SESSION['usuario']['user'])) 
            header('refresh:0; url=../login');

            include ('../database/db.php');
            $mysqli = ConectarDB();

            //$sql = "SELECT * FROM articulos GROUP BY articulo";
            $sql = "SELECT * FROM img_showroom";
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
                               Imágenes Showroom
                                <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#ModalNewFoto"><i class="fa fa-plus"></i> Nueva Imágen
                </button>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-4">
                        <?php if($resultados->num_rows > 0 ){
                            while($row = $resultados->fetch_assoc()){
                        ?>
                            <div class="col mb-4">
                                <div class="card">
                                    <img src="../../server/server_img/showroom/<?php echo $row['img']; ?>" class="card-img-top">
                                    <div class="card-footer" align="center">
                                        <?php if($row['activa'] == 'SI'){?>
                                            <button class="btn btn-danger" onclick="mostrar(<?php echo $row['_id']; ?>,'NO');">No mostrar</button>
                                        <?php }else{ ?>
                                            <button class="btn btn-success" onclick="mostrar(<?php echo $row['_id']; ?>,'SI');">Mostrar</button>
                                        <?php }?>
                                        <button class="btn btn-primary" onclick="eliminar(<?php echo $row['_id']; ?>);">Eliminar</button>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php }
                        }
                        ?>
                            
                              
                        </div>

                        
                    </div>
                    <div class="modal fade" id="ModalNewFoto" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nueva imagen de Portada</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" id="foto_form" enctype="multipart/form-data">
                                    <input type="file" class="form-control" name="uploadedFile" />
                                </form>
                                <div style="color: red;" id="result"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="Btn_guardar_foto">Guardar</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    

                </main>
                
                <div id="resultado"></div>

                

            </div>
        </div>
        
        <?php include('../../include/footerjs.php'); ?>

        <script type="text/javascript">

            function mostrar(id,activa){
                var result = window.confirm("Seguro desea cambiar esta imagen?");
                if(result == true){
                    $.ajax({
                            type: "POST",
                            url: "acciones/mostrar.php",
                            data: "id=" + id + "&activa="+activa,
                            beforeSend: function () {
                                //$("#resultado").html("Procesando, espere por favor...");
                            },
                            success: function(response) {
                                if(response == 'ok'){
                                    location.reload();
                                }
                                else{
                                    alert("Error!");
                                }
                            }
                    });
                }
                  
            }

            function eliminar(id){
                var result = window.confirm("Seguro de eliminar esta imagen?");
                if(result == true){
                    $.ajax({
                            type: "POST",
                            url: "acciones/eliminar_img_showroom.php",
                            data: "id=" + id,
                            beforeSend: function () {
                                //$("#resultado").html("Procesando, espere por favor...");
                            },
                            success: function(response) {
                                if(response == 'ok'){
                                    location.reload();
                                }
                            }
                    });
                }
                  
            }

            $( "#Btn_guardar_foto" ).click(function() {

                var form = $('#foto_form');
                var formdata = false;
                if (window.FormData){
                    formdata = new FormData(form[0]);
                }

                var formAction = form.attr('action');
                $.ajax({
                    url         : 'acciones/_upload_foto.php',
                    data        : formdata ? formdata : form.serialize(),
                    cache       : false,
                    contentType : false,
                    processData : false,
                    type        : 'POST',
                    beforeSend: function () {
                        $("#result").html("Subiendo imágen, espere por favor...");
                    },
                    success     : function(data, textStatus, jqXHR){
                    if(data.message == 'ok'){
                        $("#result").empty();
                        $("#result").append("Imagen subida correctamente.");
                        location.reload();
                    }
                    else{
                        $("#result").empty();
                        $("#result").append(data.message);
                    }
                    
                    }
                });
                });

        </script>

    </body>
</html>
