<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'tu_usuario');
define('DB_PASSWORD', 'tu_contraseña');
define('DB_NAME', 'nombre_de_tu_bd');
 
/* Intentar conectar a la base de datos */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Comprobar la conexión
if($conn === false){
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}
?>
