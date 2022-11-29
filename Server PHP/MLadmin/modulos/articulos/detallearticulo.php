<!DOCTYPE html>
<html>
    <head>
        <?php include('../../include/head.php'); ?>

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
                                        Detalle del Artículo

                                        <a href="editar.php?id=<?php echo $articulo['_id']; ?>"><button type="button" class="btn btn-primary" id="btn_guardar" style="float: right;"> Editar</button> </a>

                                    </div>
                                    <div class="card-body">
                                        
                                        <div class="row">
                                        
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Código</label>
                                                    <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $articulo['codigo']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label >Artículo</label>
                                                    <input type="text" class="form-control" name="articulo" value="<?php echo $articulo['articulo']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rubro</label>
                                                    <input type="text" class="form-control" name="rubro" value="<?php echo $articulo['rubro']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Familia</label>
                                                    <input type="text" class="form-control" name="familia" value="<?php echo $articulo['familia']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Categoría</label>
                                                    <input type="text" class="form-control" name="categoria" value="<?php echo $articulo['categoria']; ?>" disabled>
                                                </div>
                                                
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="form-group">
                                                    <label>Espesor</label>
                                                    <input type="text" class="form-control" name="espesor" value="<?php echo $articulo['espesor']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ancho</label>
                                                    <input type="text" class="form-control" name="ancho" value="<?php echo $articulo['ancho']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>largo</label>
                                                    <input type="text" class="form-control" name="largo" value="<?php echo $articulo['largo']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Diámetro</label>
                                                    <input type="text" class="form-control" name="diametro" value="<?php echo $articulo['diametro']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Diente</label>
                                                    <input type="text" class="form-control" name="diente" value="<?php echo $articulo['diente']; ?>" disabled>
                                                </div>
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="form-group">
                                                    <label>Litros</label>
                                                    <input type="text" class="form-control" name="litros" value="<?php echo $articulo['litros']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kilos</label>
                                                    <input type="text" class="form-control" name="kilos" value="<?php echo $articulo['kilos']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tipo</label>
                                                    <input type="text" class="form-control" name="tipo" value="<?php echo $articulo['tipo']; ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Grano</label>
                                                    <input type="text" class="form-control" name="grano" value="<?php echo $articulo['grano']; ?>" disabled>
                                                </div>

                                            </div>
                                            <div class="col-xl-4">
                                                <label>Imagen</label>
                                                <div class="card mb-4">
                                                    <div class="card-header" style="background-color: #e9ecef;">
                                                        <img src="../../server/server_img/productos/<?php echo $articulo['img']; ?>" alt="" style="width: 100%;">
                                                    </div>
                                                </div>
                                            </div>

                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </main>
            </div>
        </div>

        <?php include('../../include/footerjs.php'); ?>

    </body>
</html>
