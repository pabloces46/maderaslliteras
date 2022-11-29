<?php
    session_start();
    if(!isset($_SESSION['usuario']['user']) || empty($_SESSION['usuario']['user'])) 
    header('refresh:0; url=../login');

    include_once ('../database/db.php');
    $mysqli = ConectarDB();

    $art_id = $_GET['id'];
    $resultados = $mysqli->query("SELECT * FROM articulos WHERE _ID = '$art_id'");
    if($resultados->num_rows > 0 ){
        $articulo = $resultados->fetch_assoc();
    }
    else{

    }

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
                                        Editar Artículo
                                    </div>
                                    <div class="card-body">
                                        <form id="edit_form">
                                        
                                        <div class="row">
                                        
                                        <div class="col-xl-6">
                                                <input type="hidden" id="art_id" name="art_id" value = "<?php echo $art_id; ?>">

                                                <div class="form-group">
                                                    <label>Código</label>
                                                    <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $articulo['codigo']; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label >Artículo</label>
                                                    <input type="text" class="form-control" id="articulo" name="articulo" value="<?php echo $articulo['articulo']; ?>" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label>Rubro</label>
                                                    <select class="form-control" id="rubro" name="rubro" required >
                                                        <option value="">Seleccione una opción</option>
                                                        <option value="MADERAS" <?php if($articulo['rubro'] == 'MADERAS') echo "selected"; ?>>MADERAS</option>
                                                        <option value="FERRETERIA" <?php if($articulo['rubro'] == 'FERRETERIA') echo "selected"; ?>>FERRETERIA</option>
                                                        <option value="ADHESIVOS" <?php if($articulo['rubro'] == 'ADHESIVOS') echo "selected"; ?>>ADHESIVOS</option>
                                                        <option value="PROTECTORES" <?php if($articulo['rubro'] == 'PROTECTORES') echo "selected"; ?>>PROTECTORES</option>
                                                        <option value="HERRAMIENTAS" <?php if($articulo['rubro'] == 'HERRAMIENTAS') echo "selected"; ?>>HERRAMIENTAS</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Familia</label>

                                                    <input list="familia" id="familia_input" name="familia" type="text"  class="form-control" required="" value="<?php echo $articulo['familia']; ?>">
                                                    <datalist id="familia">
                                                    </datalist>

                                                </div>

                                                <div class="form-group">
                                                    <label>Categoría</label>

                                                    <input list="categoria" id="categoria_input" name="categoria" type="text"  class="form-control" value="<?php echo $articulo['categoria']; ?>" required="">
                                                    <datalist id="categoria">
                                                    </datalist>

                                                </div>

                                            </div>

                                            <div class="col-xl-3">
                                                <div class="form-group">
                                                    <label>Espesor</label>
                                                    <input type="text" class="form-control" name="espesor" value="<?php echo $articulo['espesor']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ancho</label>
                                                    <input type="text" class="form-control" name="ancho" value="<?php echo $articulo['ancho']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>largo</label>
                                                    <input type="text" class="form-control" name="largo" value="<?php echo $articulo['largo']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Diámetro</label>
                                                    <input type="text" class="form-control" name="diametro" value="<?php echo $articulo['diametro']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Diente</label>
                                                    <input type="text" class="form-control" name="diente" value="<?php echo $articulo['diente']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="form-group">
                                                    <label>Litros</label>
                                                    <input type="text" class="form-control" name="litros" value="<?php echo $articulo['litros']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kilos</label>
                                                    <input type="text" class="form-control" name="kilos" value="<?php echo $articulo['kilos']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tipo</label>
                                                    <input type="text" class="form-control" name="tipo" value="<?php echo $articulo['tipo']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Grano</label>
                                                    <input type="text" class="form-control" name="grano" value="<?php echo $articulo['grano']; ?>">
                                                </div>

                                            </div>
                                            <div class="col-xl-4">
                                                <label>Imagen</label>
                                                <div class="card mb-4">
                                                    <div class="card-header" style="background-color: #e9ecef;" id="show_img">
                                                        <img src="../../server/server_img/productos/<?php echo $articulo['img']; ?>" alt="" style="width: 100%;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2"></div>

                                            <div class="col-xl-6">
                                            <div class="form-group">
                                                    <label>Cambiar imagen</label>
                                                    <input type="hidden" id="upload_img" name="upload_img" value="<?php echo $articulo['img']; ?>">
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

                cargarDatos();

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
                        //console.log($("#edit_form").serialize());
                        $.ajax({
                            url:"acciones/editar_articulo.php",
                            method:"POST",
                            data: $("#edit_form").serialize(),
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

            function cargarDatos(){

                var rubro = $("#rubro").val();

                $.ajax({
                    url:"acciones/buscar_familias.php",
                    method:"POST",
                    data:{rubro:rubro},
                    dataType:"json",
                    success:function(data)
                    {   

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
            }
        </script>
        
    </body>
</html>
