<?php
    include("database.php");
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $cantidad = $_POST["cantidad"];
    $sql = "UPDATE productos SET nombre_prod = '$codigo', cantidad_prod = '$cantidad' WHERE codigo_prod = '$codigo'";

    if ($conn->query($sql) === TRUE) {
        echo "Producto actualizado.<br>";
        echo "<br><a href='index.php'>Regresar</a>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
?>