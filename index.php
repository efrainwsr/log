<?php 
session_start();

  if(isset($_SESSION['id'])){ header('location: views/inicio.php');}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <title>Sin nombre</title>
</head>

<body style="color: rgb(33, 37, 41);" id="body" name="body">
    <main class="page login-page" style="width: 100%;height: 100%;margin: 0px;color: rgb(33, 37, 41);background: rgb(246,246,246);">
        <section class="clean-block clean-form dark">
            <div class="container-fluid">
                <div class="block-heading" style="padding-bottom: 5px;padding-top: 0px;">
                    <div class="row">
                        <div class="col"><img style="width: 600px;"></div>
                    </div>
                    <h2 class="text-info" style="padding-top: 32px;">INICIO DE SESION</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <form id="login-form" name="login-form">
                    <div class="mb-3">
                        <label class="form-label" for="usuario">Usuario</label>
                        <input class="form-control item" type= "text" id="usuario" name="usuario">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Contraseña</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                    <div class="mb-3"></div>
                    <button class="btn btn-primary" type="submit" style="display: inline-block;position: static;margin: 0px;width: 420px;">INGRESAR</button>
                    <p id="error-msg" class="text text-danger"></p>
                </form>
            </div>
        </section>
    </main>
</body>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
</html>

<script>
        $(function() {
            // Cuando se envíe el formulario, enviar los datos utilizando Ajax
            $('#login-form').submit(function(event) {
                //event.preventDefault(); // Evitar que se recargue la página al enviar el formulario

                $.ajax({
                    type: 'POST',
                    url: 'model/login/iniciar_sesion.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response === 'success') {
                            // Si se inició sesión correctamente, redirigir al usuario a la página de inicio
                            alert(response);
                            window.location.href = 'views/inicio.php';
                        } else {
                            //alert('Datos incorrectos');
                            $('#error-msg').html(response);
                        }
                    }
                });
            });
        });
    </script>