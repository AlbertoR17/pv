<?php 

require('conec.php');

$proc=$_POST['proc'];
$cantidad=$_POST['cantidad'];
$preciou=$_POST['preciou'];

/*$rs = mysqli_query($con, "SELECT Id_Venta FROM venta ORDER BY Id_Venta DESC LIMIT 1");
    $row = mysqli_fetch_array($rs);

     $id =$row['Id_Venta'];

*/
//$query1=" SELECT TOP 1 * FROM venta ORDER BY Id_Venta DESC";
$query= "INSERT INTO productosventa (Nombre,Precio_Unitario,Cantidad,Descripcion,Id_Venta) values ('$proc','$preciou','$cantidad','',(SELECT MAX(Id_Venta) FROM venta))";
$exe= mysqli_query($con,$query) or die($query);

mysqli_close($con);




 ?>