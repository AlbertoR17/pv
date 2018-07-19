<?php 
require('conec.php');
$rs = mysqli_query($con, "SELECT * FROM venta where Fecha='$fecha'");

while($row = mysqli_fetch_array($rs)){

  echo "<tr'>"; 
  $aidi=$row['Id_Venta']; 
  //echo "<td>" . $row['Fecha'] .  "</td>";
  echo "<td> ". $row['Total'] . "</td>"; 
  echo "<td> <button type='button' class='btn btn-primary'> Ver más</button> </td>"; 



  $rds = mysqli_query($con, "SELECT * FROM productosventa where Id_Venta='$aidi'");
  while($rowa=mysqli_fetch_array($rds)){
/*
    echo "<td data-hide='all'> ". $rowa['Nombre'] . "</td>";                     
    echo "<td data-hide='all'> ". $rowa['Precio_Unitario'] . "</td>";                     
    echo "<td data-hide='all'> ". $rowa['Cantidad'] . "</td>";  */                    

  }  

                          // echo "<td> 
                          // <form method='POST' action='../Vista/agregarexistencia.php'>
                          // <input type='hidden' class='btn btn-success' name='idproducto' value=".$row['Id_Producto'].">
                          // <button type='submit'>Agregar existencias</button>
                          //   </form>  </td>";
  echo "</tr>";   
}

mysqli_close($con);


?>