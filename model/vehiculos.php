<?php
session_start();
require_once ('Conexion.php');
 $db = new Database();
$accion = $_POST["accion"];

    switch ($accion) {
        case 1:
            $placa = $_POST["placa"];
            $modelo = $_POST["modelo"];
            $anio = $_POST["anio"];
            $color = $_POST["color"];
            $sql = "INSERT INTO vehiculos (placa, modelo, anio, color) VALUES ('$placa', '$modelo', '$anio', '$color')";

            if ($db->query($sql) === TRUE) {
              echo "success";
            } else {
              echo "Error al insertar registro: " . $db->error;
            }
        break;
    }
       

    ?>