<?php
session_start();

// Destruir la sesión
session_unset();
session_destroy();

// Destruir las cookies
//setcookie("id", "", time() - 3600, "/");
//setcookie("nombre", "", time() - 3600, "/");

// Redirigir al usuario a la página de inicio de sesión
header("Location: ../../index.php");
exit;
?>