<?php 

require('conec.php');

$suma=$_POST['suma'];
$query= mysqli_query($con,"INSERT INTO venta (Id_Venta,Total,Fecha) values ('','$suma',now())");

/*$rs = mysqli_query($con, "SELECT * FROM venta");
    $row = mysqli_fetch_array($rs);

     $total =$row['Total'];

     $sumaTotal= (total + suma)
    $q= "UPDATE caja set Total=$sumaTotal";
$ejecuta_q= mysqli_query($con,$q) or die("error al actualizar producto"); */

mysqli_close($con);


 ?>