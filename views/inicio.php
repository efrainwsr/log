<?php
session_start();
require_once('menu.php');
  if(isset($_SESSION['id'])){ 
  	//header('location: ../index.php');

	echo $user_id = isset( $_SESSION["id"]);
	echo $user_name = $_SESSION["nombre"]; 
	
 ?>

<html>
  <head>
	 <title>Inicio</title>
  </head>


  	 	<section class="clean-block clean-form">
            <div class="container-fluid">
                <div class="block-heading">
                    <div class="row">
                      <div class="col"><img style="width: 600px;"></div>
                    </div>
                    <h2 class="text-info" style="padding-top: 32px;">REGISTRO</h2>
                </div>

                <form id="frmRegVehiculo" name="frmRegVehiculo">

                    <div class="mb-3">
                        <label class="form-label" for="placa">Placa</label>
                        <input class="form-control item" type= "text" id="placa" name="placa">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="modelo">Modelo</label>
                        <input class="form-control" type="text" id="modelo" name="modelo">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="anio">Año</label>
                        <input class="form-control" type="text" id="anio" name="anio">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Color">Color</label>
                        <input class="form-control" type="text" id="color" name="color">
                    </div>

                    <div class="mb-3"></div>
                    <button class="btn btn-primary" type="submit" value="1" id="btnRegVehiculo" name="btnRegVehiculo" style="display: inline-block;position: static;margin: 0px;width: 420px;">REGISTRAR</button>
                    <p id="result" class="text text-danger"></p>
                </form>

            </div>
        </section>
        <script type="text/javascript" src="../app/vehiculos.js"></script>
        <script src="../assets/js/sweetalert2.js"></script>
</html>
	


<?php 
	}
 ?>