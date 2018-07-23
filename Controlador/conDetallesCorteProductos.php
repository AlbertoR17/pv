<?php 

require('conec.php');
 $id = $_POST['rowid'];
$rs = mysqli_query($con, "SELECT * from productosventa INNER JOIN venta on productosventa.Id_Venta = venta.Id_Venta where productosventa.Id_Venta=$id");


echo " <table class='footable table table-stripped' data-page-size='8' data-filter=#filter>
                                <thead>
                                <tr>
                                    
                                    
                                    <th >Nombre</th>
                                    <th >Precio</th>
                                    <!-- <th >Descripción</th> -->
                                    <!-- <th >Imagen</th> -->
                                   
                                    <th>Cantidad</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
        
                                 <!-- <tr>
                                 <td>holis</td>
                                 <td>12</td>
                                 <td>3</td>
                                 </tr> -->
                                ";


while($row = mysqli_fetch_array($rs)){

  echo "<tr>"; 

  //$aidi=$row['Id_Venta']; 
  //echo "<td>" . $row['Fecha'] .  "</td>";

  echo "<td> ". $row['Nombre'] . "</td>"; 
  echo "<td> ". $row['Precio_Unitario'] . "</td>"; 
  echo "<td> ". $row['Cantidad'] . "</td>"; 
 
 



  // $rds = mysqli_query($con, "SELECT * from productosventa INNER JOIN venta on productosventa.Id_Venta = venta.Id_Venta where productosventa.Id_Venta=240");
  // while($rowa=mysqli_fetch_array($rds)){

  //   echo "<td data-hide='all'> ". $rowa['Nombre'] . "</td>";                     
  //   echo "<td data-hide='all'> ". $rowa['Precio_Unitario'] . "</td>";                     
  //   echo "<td data-hide='all'> ". $rowa['Cantidad'] . "</td>"; 

  //   \SELECT * from productosventa INNER JOIN venta on productosventa.Id_Venta = venta.Id_Venta where productosventa.Id_Venta=240
  //   SELECT * from venta INNER JOIN corte on venta.Id_corte = corte.Id_Corte where venta.Id_corte = 17
                         

  // }  

                          // echo "<td> 
                          // <form method='POST' action='../Vista/agregarexistencia.php'>
                          // <input type='hidden' class='btn btn-success' name='idproducto' value=".$row['Id_Producto'].">
                          // <button type='submit'>Agregar existencias</button>
                          //   </form>  </td>";
  echo "</tr>";   
}
echo "</tbody>
                                <tfoot>
                                <tr>
                                    <td colspan='5'>
                                        <ul class='pagination pull-right'></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>";
 
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