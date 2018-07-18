 <?php
require('conec.php');
 
$codigo=$_POST['codigo'];
$rs = mysqli_query($con,"SELECT * FROM productos where Codigo=$codigo");
    
                       $array=array();
                       
                       //$i=0;
                       while($row =mysqli_fetch_assoc($rs)){
                          $id =$row['Id_Producto'];
                          $codigoPro =$row['Codigo'];
                          $nom=$row['Nombre'];
                          $PrecioU=$row['Precio_Unitario'];
                          $Des=$row['Descripcion'];
                          $Cat=$row['Categoria'];
                          $im=$row['Imagen'];
                          //$array[$i]=$row;
                          //$i++;
                        //$array[] = array( 'Nombre'=> $nom,'Precio_Unitario'=> $PrecioU,'Descripcion'=> $Des);
                      }
                      
                       mysqli_close($con);
                    
                    echo json_encode( array('Nombre'=> $nom,'Precio_Unitario'=> $PrecioU,'Descripcion'=> $Des,'Imagen'=> $im,'Id_Producto'=> $id));
                   
                  
                   
                      
                     
                    
?>  

   
          