<?php
    include("database.php");

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];

    $sql = "INSERT INTO productos (codigo_prod, nombre_prod, cantidad_prod) VALUES ('$codigo', '$nombre', '$cantidad')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Producto registrado con éxito.<br>";
        echo "<br><a href='index.php'>Regresar</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>