<!DOCTYPE html>
<html>
    <head>
    <?php include('../../include/head.php'); ?>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Login </h3></div>
                                    <div class="card-body">
                                        <form method="post" id="login">
                                            <div id="resultado"></div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Usuario</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" name="user" placeholder="Usuario" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Contraseña</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Contraseña" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0 blanco">
                                                <a class="btn btn-primary btn-block" id="btn_entrar">Entrar</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <?php include('../../include/footerjs.php'); ?>

        <script type="text/javascript">
            $(document).ready(function() {

                $('#btn_entrar').click(function(){
                    var dataString = $('#login').serialize();
                    
                    $.ajax({
                        type: "POST",
                        url: "acciones/check_login.php",
                        data: dataString,
                        beforeSend: function () {
                            $("#resultado").html("Procesando, espere por favor...");
                        },
                        success: function(response) {
                            $("#resultado").html(response);
                        }
                    });

                });
            });
    </script>

    </body>
</html>
