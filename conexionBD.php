<?php
error_reporting(0);

$servername = "localhost";
$database = "agencia_bab";
$username = "root";
$password = "";

$conexion = mysqli_connect($servername, $username, $password, $database);
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>