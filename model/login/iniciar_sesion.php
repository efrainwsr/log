<?php
session_start();
require_once ('../Conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    // Verificar si el usuario existe en la base de datos
    $db = new Database();
    $sql = "SELECT u_id, u_nombre FROM usuarios WHERE u_usuario = '$usuario' AND u_contra = '$password'";
    $result = $db->query($sql);

    if (mysqli_num_rows($result) == 1){
        // Iniciar sesión y crear cookie
        $row = mysqli_fetch_assoc($result);
        $_SESSION["id"]     = $row["u_id"];
        $_SESSION["nombre"] = $row["u_nombre"];
        //setcookie("id", $row["u_id"], time() + (86400 * 30), "/"); // Cookie válida por 30 días

        header("Location: ../../views/inicio.php"); // Redirigir al usuario a la página de inicio
        
    } else {
        // Mostrar mensaje de error si los datos son incorrectos
        $error_msg= "Los datos de inicio de sesión son incorrectos. Por favor, inténtelo de nuevo.";
    }
}
?>