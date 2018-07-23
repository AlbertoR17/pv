<?php 
require('conec.php');
$rs = mysqli_query($con, "SELECT * FROM venta where Fecha='$fecha'");

while($row = mysqli_fetch_array($rs)){

  echo "<tr'>"; 
  //$aidi=$row['Id_Venta']; 
  //echo "<td>" . $row['Fecha'] .  "</td>";
  echo "<td> ". $row['Total'] . "</td>"; 
  echo "<td> <button type='button' class='btn btn-primary' data-toggle='modal' href='#modalCorte' data-id=".$row['Id_Venta']."> Ver más</button> </td>"; 



  // $rds = mysqli_query($con, "SELECT * FROM productosventa where Id_Venta='$aidi'");
  // while($rowa=mysqli_fetch_array($rds)){

  //   echo "<td data-hide='all'> ". $rowa['Nombre'] . "</td>";                     
  //   echo "<td data-hide='all'> ". $rowa['Precio_Unitario'] . "</td>";                     
  //   echo "<td data-hide='all'> ". $rowa['Cantidad'] . "</td>"; 

  //   \SELECT * from productosventa INNER JOIN venta on productosventa.Id_Venta = venta.Id_Venta where productosventa.Id_Venta=240
                         

  // }  

                          // echo "<td> 
                          // <form method='POST' action='../Vista/agregarexistencia.php'>
                          // <input type='hidden' class='btn btn-success' name='idproducto' value=".$row['Id_Producto'].">
                          // <button type='submit'>Agregar existencias</button>
                          //   </form>  </td>";
  echo "</tr>";   
}
 
//  echo "<div class='modal fade' id='modalCorte' role='dialog'>
//     <div class='modal-dialog' role='document'>
//         <div class='modal-content'>
//             <div class='modal-header'>
//                 <button type='button' class='close' data-dismiss='modal'>&times;</button>
//                 <h4 class='modal-title'>Agrerar Existencias</h4>
//             </div>
//             <div class='modal-body'>
//                 <form class='form-horizontal' method='post' action='../Controlador/regProducto2.php'>
//                 <div class='fetched-data'></div> 
//             </div>
//             <div class='modal-footer'>
//                  <input type='submit'  value='Guardar' class='btn btn-primary'>
//             </div>
//              </form>
//         </div>
//     </div>
// </div>";
mysqli_close($con);


?>