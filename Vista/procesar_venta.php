<?php 

require('conec.php');

$proc=$_POST['proc'];
$cantidad=$_POST['cantidad'];
$preciou=$_POST['preciou'];
$desc=$_POST['descripcion'];
$id=$_POST['id'];
/*$rs = mysqli_query($con, "SELECT Id_Venta FROM venta ORDER BY Id_Venta DESC LIMIT 1");
    $row = mysqli_fetch_array($rs);

     $id =$row['Id_Venta'];

*/
//$query1=" SELECT TOP 1 * FROM venta ORDER BY Id_Venta DESC";
$query= "INSERT INTO productosventa (Nombre,Precio_Unitario,Cantidad,Descripcion,Id_Venta) values ('$proc','$preciou','$cantidad','$desc',(SELECT MAX(Id_Venta) FROM venta))";
$exe= mysqli_query($con,$query) or die($query);

$qss = "UPDATE existencia set Cantidad=Cantidad- $cantidad WHERE Producto=$id"; 


$ejecuta_qss= mysqli_query($con,$qss) or die("error al insertar producto");
echo'<script type="text/javascript">
    alert("venta realizada");
    location.href="../Vista/venta.php";
    </script>';
mysqli_close($con);




 ?>