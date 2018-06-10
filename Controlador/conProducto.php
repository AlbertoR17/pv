<?php 
require('conec.php');
                       $rs = mysqli_query($con, "SELECT * FROM productos");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr'>";  
                          echo "<td>" . $row['Codigo'] .  "</td>";
                          echo "<td> ". $row['Nombre'] . "</td>";
                          echo "<td> ". $row['Precio_Unitario'] . "</td>"; 
                          echo "<td> ". $row['Descripcion'] . "</td>"; 
                          //echo "<td> ". $row['Imagen'] . "</td>"; 
                          echo "<td> ". $row['Categoria'] . "</td>"; 
                 
                            

                          //echo "<td> <a href='../../Controlador/elminausuario.php?id=".$row['idusuario']."' class='btn btn-success'> Borrar</a> </td>";  
                          echo "</tr>";   
                      }

                      mysqli_close($con);


 ?>