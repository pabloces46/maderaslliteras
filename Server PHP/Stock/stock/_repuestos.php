<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

    <?php include('../includes/head.php');?>

<!-- InstanceBeginEditable name="head" -->

<?php
session_start();
if (!isset($_SESSION['repuestos'])) {
	$_SESSION['repuestos']=array();
}


if(!isset($_SESSION['usuario']['nombre']) || empty($_SESSION['usuario']['nombre'])) 
		header('refresh:0; url=../login/login.php');

$permisos = $_SESSION['usuario']['permisos_mto'];


include ('../includes/db.php');


?>

<!-- InstanceEndEditable -->
</head>

<body>

    <div id="wrapper">

        <?php include('../includes/menustock.php');?>

        <div id="page-wrapper">

		<!-- InstanceBeginEditable name="Contenido" -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <label>Buscar Artículos</label>
                        </div>
                        <div class="panel-body">
                            
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6" align="center">

                                        <label class="radio-inline" >
                                                <input type="radio" name="radio" id="radioCodigo" value="Codigo" checked>Artículo / Código
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="radio" id="radioProveedor" value="Proveedor">Proveedor / Cód. Proveedor
                                            </label>
                                            
                                        <div class="form-group input-group" style="padding-top:12px;">
                                            <input type="text" class="form-control" placeholder="Codigo o nombre o descripcion del Repuesto" id="busqueda" autofocus="">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" id="btn_buscar"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                            
                                    </div>
                                </div>

                            <hr>
                                <div id="resultado"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
            <div class="panel-body">
                <!-- Modal Retirar-->
                <div class="modal fade" id="modal_retirar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Retirar Repuesto</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <form method="POST" id="form_retirar">
                                    <div class="col-lg-3">
                                        CODIGO:
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" id="modal_codigo" name="modal_codigo" class="form-control" readonly="">
                                    </div>
                                    <!--
                                    <div class="col-lg-3">
                                        MAQUINA:
                                    </div>
                                    <div class="col-lg-9">
                                    <select class="form-control" id="modal_maquina" name="modal_maquina" required="">
                                        <option value=""></option>
                                        <option disabled>-- CHAMBOSS --</option>
                                        <option value="CHA 1">CHA 1</option>
                                        <option value="CHA 2">CHA 2</option>
                                        <option value="CHA 3">CHA 3</option>
                                        <option disabled>-- EXTRUSION --</option>
                                        <option value="EXT 1">EXT 1</option>
                                        <option disabled>-- IMPRESION --</option>
                                        <option value="IMP 1">IMP 1</option>
                                        <option value="IMP 2">IMP 2</option>
                                        <option value="IMP 3">IMP 3</option>
                                        <option value="IMP 4">IMP 4</option>
                                        <option value="IMP 5">IMP 5</option>
                                        <option value="IMP 6">IMP 6</option>
                                        <option disabled>-- TRATAMIENTO --</option>
                                        <option value="TRA 1">TRA 1</option>
                                        <option disabled>-- --</option>
                                        <option value="OTROS">OTROS</option>
                                    </select>
                                    </div> -->
                                    <div class="col-lg-3">
                                        RETIRO:
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" name="modal_cantidad" id="modal_cantidad" class="form-control" min="1" required="">
                                    </div>

                                    <div class="col-lg-3">
                                        QUEDAN:
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" name="modal_quedan" id="modal_quedan" class="form-control" min="0">
                                    </div>

                                    <div class="col-lg-3">
                                        COMENTARIOS:
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" name="modal_comentarios" id="modal_comentarios"></textarea>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" id="btn_retirar">Confirmar</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- Modal Retirar-->
                <div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Agregar Repuesto</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <form method="POST" id="form_agregar">
                                    <div class="col-lg-3">
                                        CODIGO:
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" id="agregar_codigo" name="agregar_codigo" class="form-control" readonly="">
                                    </div>
                                    <div class="col-lg-3">
                                        CONDICIÓN:
                                    </div>
                                    <div class="col-lg-9">
                                    <select class="form-control" id="agregar_condicion" name="agregar_condicion" required="">
                                        <option value="nuevo">Nuevo</option>
                                        <option value="devolucion">Devolución</option>
         
                                    </select>
                                    </div>
                                    <div class="col-lg-3">
                                        CANTIDAD:
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" name="agregar_cantidad" id="agregar_cantidad" class="form-control" min="1" required="">
                                    </div>
                                    <div class="col-lg-3">
                                        COMENTARIO:
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea name="agregar_comentario" id="agregar_comentario" class="form-control"></textarea>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" id="btn_agregar">Confirmar</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- Termina cuadro de busqueda -->
            
		<div id="snackbar"></div>
		<!-- InstanceEndEditable -->
        
      	</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include('../includes/footer.php');?>

<script type="text/javascript">
$(document).ready(function(){

  //comprobamos si se pulsa una tecla
  $("#busqueda").keyup(function(e){

      var consulta = $("#busqueda").val();
      var filtro = $("input[name='radio']:checked").val();

      //if(consulta.length > 0){                                                     
      //hace la búsqueda si hay por lo menos 2 letras 

      if(e.which == 13){
      //hace la búsqueda cuando presiono enter 
        $.ajax({
              type: "POST",
              url: "acciones/_buscarrepuestos.php",
              //data: "b="+consulta + "&f=" + filtro,
              data: "b="+consulta + "&f=" + filtro,
              dataType: "html",
              success: function(data){                                                    
                    $("#resultado").empty(); 
                    $("#resultado").append(data);                                
              }
        });
    
      }                                                                                                                         
  });

    $("#btn_buscar").click(function() {

    var consulta = $("#busqueda").val();
    var filtro = $("input[name='radio']:checked").val();

    $.ajax({
            type: "POST",
            url: "acciones/_buscarrepuestos.php",
            //data: "b="+consulta + "&f=" + filtro,
            data: "b="+consulta + "&f=" + filtro,
            dataType: "html",
            success: function(data){                                                    
                $("#resultado").empty(); 
                $("#resultado").append(data);                                
            }
    });
                                                                                                                      
});  

  $("#btn_retirar").click(function() {

    var enviar = false;
    /*if($("#modal_maquina").val() != ''){
        enviar = true;
    }
    else{
        alert("Debes seleccionar una maquina.");
        enviar = false;
    }*/
    if($("#modal_cantidad").val() > 0){
        enviar = true;
    }
    else{
        alert("Debes seleccionar la cantidad a retirar.");
        enviar = false;
    }

    if(enviar == true){

       $.ajax({
          type: "POST",
          url: "acciones/_retirar.php",
          data: $("#form_retirar").serialize(),
          dataType: "html",
          success: function(data){
                $('#modal_retirar').modal('hide');
                $("#snackbar").empty();                                           
                $("#snackbar").append(data);
                showToast();
                reLoadSearch();

          }
        }); 
    }
    
  });

  $("#btn_agregar").click(function() {

    var enviar = false;
    if($("#agregar_cantidad").val() > 0){
        enviar = true;
    }
    else{
        alert("Debes seleccionar la cantidad a agregar.");
        enviar = false;
    }

    if(enviar == true){

       $.ajax({
          type: "POST",
          url: "acciones/_agregar.php",
          data: $("#form_agregar").serialize(),
          dataType: "html",
          success: function(data){
                $('#modal_agregar').modal('hide');
                $("#snackbar").empty();                                           
                $("#snackbar").append(data);
                showToast();
                reLoadSearch();

          }
        }); 
    }
    
  });

});


function SetCodigo(codigo){
    document.getElementById("modal_codigo").value = codigo;
    document.getElementById("modal_cantidad").value = '';
    document.getElementById("modal_quedan").value = '';
    document.getElementById("modal_comentarios").value = '';
    //document.getElementById("modal_maquina").options[0].selected = 'selected';
}

function SetCodigoAgregar(codigo){
    document.getElementById("agregar_codigo").value = codigo;
    document.getElementById("agregar_cantidad").value = '';
    document.getElementById("agregar_comentario").value = '';
}

function showToast() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
}

function reLoadSearch(){
    var consulta = $("#busqueda").val();
    var filtro = $("input[name='radio']:checked").val();
    $.ajax({
        type: "POST",
        url: "acciones/_buscarrepuestos.php",
        data: "b="+consulta + "&f=" + filtro,
        dataType: "html",
        success: function(data){                                                    
                $("#resultado").empty(); 
                $("#resultado").append(data);                                
        }
    });

}


</script>
</body>

<!-- InstanceEnd --></html>
