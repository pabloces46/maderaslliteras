<?php
    session_start();
    if(!isset($_SESSION['usuario']['user']) || empty($_SESSION['usuario']['user'])) 
    header('refresh:0; url=../login');

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
                    <div class="container-fluid">
                
                        <div class="row">
                            <div class="col-xl-12 pt-5">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-plus"></i>
                                        Nuevo Artículo
                                    </div>
                                    <div class="card-body">
                                        <form id="new_form">
                                        
                                        <div class="row">
                                        
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Código</label>
                                                    <input type="text" class="form-control" id="codigo" name="codigo" required>
                                                </div>
                                                <div class="form-group">
                                                    <label >Nombre Artículo</label>
                                                    <input type="text" class="form-control" id="articulo" name="articulo" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rubro</label>
                                                    <select class="form-control" id="rubro" name="rubro" required >
                                                        <option value="">Seleccione una opción</option>
                                                        <option value="MADERAS">MADERAS</option>
                                                        <option value="FERRETERIA">FERRETERIA</option>
                                                        <option value="ADHESIVOS">ADHESIVOS</option>
                                                        <option value="PROTECTORES">PROTECTORES</option>
                                                        <option value="HERRAMIENTAS">HERRAMIENTAS</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Familia</label>

                                                    <input list="familia" id="familia_input" name="familia" type="text"  class="form-control" required="">
                                                    <datalist id="familia">
                                                    </datalist>

                                                </div>
                                                <div class="form-group">
                                                    <label>Categoría</label>

                                                    <input list="categoria" id="categoria_input" name="categoria" type="text"  class="form-control" required="">
                                                    <datalist id="categoria">
                                                    </datalist>

                                                </div>
                                                
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="form-group">
                                                    <label>Espesor</label>
                                                    <input type="text" class="form-control" name="espesor">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ancho</label>
                                                    <input type="text" class="form-control" name="ancho">
                                                </div>
                                                <div class="form-group">
                                                    <label>largo</label>
                                                    <input type="text" class="form-control" name="largo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Diámetro</label>
                                                    <input type="text" class="form-control" name="diametro">
                                                </div>
                                                <div class="form-group">
                                                    <label>Diente</label>
                                                    <input type="text" class="form-control" name="diente">
                                                </div>
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="form-group">
                                                    <label>Litros</label>
                                                    <input type="text" class="form-control" name="litros">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kilos</label>
                                                    <input type="text" class="form-control" name="kilos">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tipo</label>
                                                    <input type="text" class="form-control" name="tipo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Grano</label>
                                                    <input type="text" class="form-control" name="grano">
                                                </div>

                                            </div>

                                            <div class="col-xl-4">
                                                <label>Imagen</label>
                                                <div class="card mb-4">
                                                    <div class="card-header" style="background-color: #e9ecef;" id="show_img">
                                                        <img src="../../server/server_img/productos/generic.jpg" alt="" style="width: 100%;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2"></div>

                                            <div class="col-xl-6">
                                            <div class="form-group">
                                                    <label>Seleccionar imagen</label>
                                                    <input type="hidden" id="upload_img" value="generic.jpg" name="upload_img">
                                                    <input type="file" class="form-control" id="img">
                                                    <p id="img_text" style="color:red;"></p>
                                                </div>
                                                <div style="padding-top: 20px;"></div>
                                                <button type="button" class="btn btn-primary btn-block" id="btn_guardar">Guardar</button>

                                            </div>
                                        
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="resultado"></div>
                        </div>
                    </div>
                </main>

            </div>
        </div>

        <?php include('../../include/footerjs.php'); ?>
        <script type="text/javascript">
            $(document).ready(function(){

                $("#btn_guardar").click(function(){
                    var estado = true;
                    if(document.getElementById('codigo').value == ''){
                        alert("El campo 'Código' no puede estar vacío!");
                        estado = false;
                    }

                    if(document.getElementById('articulo').value == ''){
                        alert("El campo 'Artículo' no puede estar vacío!");
                        estado = false;
                    }

                    if(document.getElementById('rubro').value == ''){
                        alert("El campo 'Rubro' no puede estar vacío!");
                        estado = false;
                    }

                    if(document.getElementById('familia_input').value == ''){
                        alert("El campo 'Familia' no puede estar vacío!");
                        estado = false;
                    }


                    if( estado == true){
                        $.ajax({
                            url:"acciones/nuevo_articulo.php",
                            method:"POST",
                            data: $("#new_form").serialize(),
                            dataType:"html",
                            success:function(data)
                            {   
                                $("#resultado").empty();
                                $("#resultado").append(data);
                            }
                        })   
                    }                                                                                                          
                });  

                $("#rubro").change(function(){
                    var rubro = $("#rubro").val();

                    $.ajax({
                        url:"acciones/buscar_familias.php",
                        method:"POST",
                        data:{rubro:rubro},
                        dataType:"json",
                        success:function(data)
                        {   
                            $("#familia_input").val('');
                            $("#categoria_input").val('');

                            var html = '';
                            if(data.error == 0){        
                                for(var count = 0; count < data.data.length; count++)
                                {
                                    html += '<option value="'+data.data[count].value+'">'+data.data[count].name+'</option>';
                                }
                                
                                $('#familia').html(html);
                            }
                        }
                    })                                                                                                               
                });  

                $("#familia_input").change(function(){
                    
                    var familia = $("#familia_input").val();

                    $.ajax({
                        url:"acciones/buscar_categorias.php",
                        method:"POST",
                        data:{familia:familia},
                        dataType:"json",
                        success:function(data)
                        {   
                            $("#categoria_input").val('');
                            var html = '';
                            if(data.error == 0){      
                                for(var count = 0; count < data.data.length; count++)
                                {
                                html += '<option value="'+data.data[count].value+'">'+data.data[count].name+'</option>';
                                }
                                
                                $('#categoria').html(html);
                            }
                        }
                    })                                                                                                              
                });

                $( "#img" ).change(function(){
                    const codigo = $("#codigo").val();
                    const file = $("#img")[0].files[0];
                    const formData = new FormData();
                    formData.append('file', file);
                    formData.append('codigo', codigo);

                    $.ajax({
                        url         : '../../server/server_img/upload_file_productos.php',
                        type        : 'POST',
                        dataType    : "json",
                        data        : formData,
                        processData: false,  // tell jQuery not to process the data
                        contentType: false,   // tell jQuery not to set contentType
                        success     : function(data){
                            //console.log(data);
                            if(data.error == false){
                                $("#upload_img").val(data.url);
                                $("#show_img").empty();
                                $("#show_img").html("<img src='../../server/server_img/productos/"+ data.url +"' style='width: 100%;'>");

                                
                                $('#img_text').html(data.message);
                            }
                            else{
                                $("#upload_img").val('');
                                $('#img_text').html(data.message);
                            }
                        
                        }
                    });
                });

            });
        </script>

    </body>
</html>
