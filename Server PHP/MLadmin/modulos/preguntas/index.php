<?php
            session_start();
            if(!isset($_SESSION['usuario']['user']) || empty($_SESSION['usuario']['user'])) 
            header('refresh:0; url=../login');

            include ('../database/db.php');
            $mysqli = ConectarDB();

            //$sql = "SELECT * FROM articulos GROUP BY articulo";
            $sql = "SELECT * FROM preguntas ORDER BY orden";
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
                               Preguntas Frecuentes
                                <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#ModalNewFoto"><i class="fa fa-plus"></i> Nueva Pregunta
                </button>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-1">
                        <?php if($resultados->num_rows > 0 ){
                            while($row = $resultados->fetch_assoc()){
                        ?>
                            <div class="col mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Pregunta #<?php echo $row['orden']; ?></h5>
                                        <p class="card-text"><textarea class="form-control" readonly id="preg<?php echo $row['_id']; ?>" rows="1"><?php echo $row['pregunta']; ?></textarea></p>
                                        <h6 class="card-title">Respuesta</h5>
                                        <p class="card-text"><textarea class="form-control" readonly id="resp<?php echo $row['_id']; ?>"><?php echo $row['respuesta']; ?></textarea></p>
                                    </div>
                                    <div class="card-footer" align="center">
                                        <button class="btn btn-primary" onclick="editar(<?php echo $row['_id']; ?>);">Editar</button>
                                        <button class="btn btn-success" disabled id="btnGuardar<?php echo $row['_id']; ?>" onclick="guardar(<?php echo $row['_id']; ?>);">Guardar</button>
                                        <button class="btn btn-secondary" onclick="eliminar(<?php echo $row['_id']; ?>);">Eliminar</button>
                                        <button class="btn btn-danger" data-toggle="modal" onclick="orden(<?php echo $row['orden']; ?>);" data-target="#ModalPosition">Orden</button>
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
                                <h5 class="modal-title">Nueva Pregunta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Pregunta</h6>
                                <textarea class="form-control" id="new_preg"></textarea>
                                <h6>Respuesta</h6>
                                <textarea class="form-control" id="new_resp"></textarea>
                                <div style="color: red;" id="result"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="Btn_guardar_new">Guardar</button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="ModalPosition" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Cambiar orden de pregunta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Orden Anterior</h6>
                                <input type="number" class="form-control" name="old_position" id="old_position" min="1" readonly>
                                <h6>Orden Nuevo</h6>
                                <input type="number" class="form-control" name="new_position" id="new_position" min="1">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="Btn_guardar_orden">Guardar</button>
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

            function editar(id){
                document.getElementById("btnGuardar"+id).disabled = false;
                document.getElementById("preg"+id).readOnly = false;
                document.getElementById("resp"+id).readOnly = false;
                
            }

            function guardar(id){
                var preg = document.getElementById("preg"+id).value;
                var resp = document.getElementById("resp"+id).value;
                $.ajax({
                        type: "POST",
                        url: "acciones/edit_pregunta.php",
                        data: "preg=" + preg + "&resp=" + resp + "&id=" + id,
                        beforeSend: function () {
                            //$("#resultado").html("Procesando, espere por favor...");
                        },
                        success: function(response) {
                            if(response == 'ok'){
                                document.getElementById("btnGuardar"+id).disabled = true;
                                document.getElementById("preg"+id).readOnly = true;
                                document.getElementById("resp"+id).readOnly = true;
                                alert("Pregunta actualizada correctamente.");
                            }
                            else{
                                alert("Error al actualizar la pregunta.");
                            }
                        }
                });

            }
            

            function eliminar(id){
                var result = window.confirm("Seguro de eliminar esta pregunta?");
                if(result == true){
                    $.ajax({
                            type: "POST",
                            url: "acciones/eliminar_pregunta.php",
                            data: "id=" + id,
                            beforeSend: function () {
                                //$("#resultado").html("Procesando, espere por favor...");
                            },
                            success: function(response) {
                                console.log(response);
                                if(response == 'ok'){
                                    location.reload();
                                }
                            }
                    });
                }
                  
            }

            $( "#Btn_guardar_new" ).click(function() {

                var preg = $("#new_preg").val();
                var resp = $("#new_resp").val();
                var ok = false;
                if(preg == ""){
                    alert("El campo pregunta está vacio");
                    ok = false;
                }
                else{
                    ok = true;
                }

                if(resp == ""){
                    alert("El campo respuesta está vacio");
                    ok = false;
                }
                else{
                    ok = true;
                }
                if(ok == true){
                    $.ajax({
                        type: "POST",
                        url: "acciones/nueva_pregunta.php",
                        data: "preg=" + preg + "&resp=" + resp,
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
            });

            function orden(orden){
                document.getElementById("old_position").value = orden;
                document.getElementById("new_position").value = '';
            }

            $( "#Btn_guardar_orden" ).click(function() {

                var old_position = $("#old_position").val();
                var new_position = $("#new_position").val();
                var ok = true;

                if(new_position == ""){
                    alert("El campo nuevo orden está vacio");
                    ok = false;
                }
                if(ok == true){
                    $.ajax({
                        type: "POST",
                        url: "acciones/orden.php",
                        data: "old_position=" + old_position + "&new_position=" + new_position,
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
            });

        </script>

    </body>
</html>
