<?php
//Include database connection
require('conec.php');

if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
    // Run the Query
$rs = mysqli_query($con, "SELECT * FROM productos INNER JOIN existencia ON productos.Id_Producto = existencia.Producto WHERE Id_Producto= $id");
//$rs = mysqli_query($con, "SELECT * FROM productos where Id_Producto =$id");
    $row = mysqli_fetch_array($rs);
    $codigoPro =$row['Codigo'];
    $nombre=$row['Nombre'];
    $precio=$row['Precio_Unitario'];
    $des=$row['Descripcion'];
    $cat=$row['Categoria'];

    //$q = mysqli_query($con, "SELECT Cantidad FROM existencia where Producto =$id");
    //$row = mysqli_fetch_array($q);
    $cant =$row['Cantidad'];
    

    // Fetch Records
    // Echo the data you want to show in modal


    echo "
    <table class='table table-striped'>
        <tr>
            <td>Codigo</td>
            <td>".$codigoPro."</td>
        </tr>
        <tr>
            <td>Nombre del Producto</td>
            <td>".$nombre."</td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>".$cat."</td>
        </tr>
        <tr>
            <td>Precio</td>
            <td>".$precio."</td>
        </tr>
        <tr>
            <td>Existencia</td>
            <td>".$cant."</td>
        </tr>
        
        <tr>
            <td>Descripcion</td>
            <td>".$des."</td>
        </tr>
    </table>";

      
 }
?>