<?php
$conn = new mysqli("localhost", "root", "", "articulos");

if ($conn->connect_error) {
    die("Error de conexión");
}
?>
