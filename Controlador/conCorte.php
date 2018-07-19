<?php 
require('conec.php');
$fe= date('Y-m-d');
$rs = mysqli_query($con, "SELECT SUM(Total) as totaldia FROM venta where Fecha='$fe' ");

$row = mysqli_fetch_array($rs);

$totaldia=$row['totaldia']; 
//  echo $totaldia;
mysqli_close($con);

?>