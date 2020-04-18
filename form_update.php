<?php
    include("database.php");
    $codigo = $_GET['codigo'];
	
    $sql = "SELECT codigo_prod, nombre_prod, cantidad_prod FROM productos WHERE codigo_prod = '$codigo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $codigo=$row["codigo_prod"];
            $nombre=$row["nombre_prod"];
            $cantidad=$row["cantidad_prod"];		
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
<html>
    <head><title>Manejo CRUD</title></head>
    <body>
        <form action="update.php" method="POST">
            <b>INGRESO DE PRODUCTOS</b><br><br>
            <table border=0>
                <tr><td>Codigo del producto: </td><td><input type="text" name="codigo" value='<?php echo $codigo; ?>' required/></td></tr>
                <tr><td>Nombre del producto: </td><td><input type="text" name="nombre" value='<?php echo $nombre; ?>' required/></td></tr>
                <tr><td>Cantidad de productos: </td><td><input type="text" name="cantidad" value='<?php echo $cantidad; ?>' required/></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td><input type = "submit" value="Actualizar producto"></td></tr>
            </table>
            <br><a href="index.php">Regresar</a>     
        </form>
        <hr>  
    </body>
</html>
