<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Artículos</title>
</head>
<body>

<h2>Agregar Artículo</h2>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="number" name="precio" placeholder="Precio">
    <button type="submit">Guardar</button>
</form>

<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    if (!empty($nombre)) {
        echo "Registro exitoso";
    } else {
        echo "Error: campo vacío";
    }
}
?>

</body>
</html>
