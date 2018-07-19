<?php 
require('conec.php');
//SELECT `Id_Producto`, `Codigo`, `Nombre`, `Precio_Unitario`, `Descripcion`, `Imagen`, `Categoria`, `Cantidad`, `Producto` FROM `productos` INNER JOIN existencia ON productos.Id_Producto = existencia.Producto

//SELECT * FROM `productos` INNER JOIN existencia ON productos.Id_Producto = existencia.Producto
                       //$rs = mysqli_query($con, "SELECT * FROM productos");
                      $rs = mysqli_query($con, "SELECT * FROM productos INNER JOIN existencia ON productos.Id_Producto = existencia.Producto");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['Id_Producto']."'>";  
                          echo "<td>" . $row['Codigo'] .  "</td>";
                          echo "<td> ". $row['Nombre'] . "</td>";
                          echo "<td> ". $row['Precio_Unitario'] . "</td>"; 
                          // echo "<td> ". $row['Descripcion'] . "</td>"; 
                          //echo "<td> ". $row['Imagen'] . "</td>"; 
                          echo "<td> ". $row['Categoria'] . "</td>"; 
                          //href ha productos con el id
                          //meter codigo php para guardar el id y poner el modal abajo
                          if ($row['Cantidad']>5) {
                            echo "<td><a id='custId' class='btn btn-primary'  data-toggle='modal' href='#exampleModal' data-id=".$row['Id_Producto']." >". $row['Cantidad'] . "</a> </td>"; 
                          }elseif($row['Cantidad']<=5 && $row['Cantidad']>=1){
                            echo "<td><a id='custId' class='btn btn-warning'  data-toggle='modal' href='#exampleModal' data-id=".$row['Id_Producto']." >". $row['Cantidad'] . "</a> </td>"; 
                          }else{
                             echo "<td><a id='custId' class='btn btn-danger'  data-toggle='modal' href='#exampleModal' data-id=".$row['Id_Producto']." >". $row['Cantidad'] . "</a> </td>"; 
                          }
                          
                 
                            

                          //echo "<td> <a href='../../Controlador/elminausuario.php?id=".$row['idusuario']."' class='btn btn-success'> Borrar</a> </td>";  
                      echo "<td>
                      <a class='btn btn-info' data-toggle='modal' href='#infoModal' data-id=".$row['Id_Producto']."><i class='glyphicon glyphicon-list-alt'></i></a>
                       <a href='../Vista/editarproducto.php?id=".$row['Id_Producto']."' class='btn btn-success'><i class='glyphicon glyphicon-edit'></i></a>
                      <a onclick='deleteAjax(".$row['Id_Producto'].")' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
                      
                      </td>";
                     
                     
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>





 <script type="text/javascript">
   
  function deleteAjax(Id_Producto) {
    if (alertify.confirm('Esta seguro de que desea eliminar este producto?','El elemento se eliminara permanentemente', function(){
      alertify.success('Peoducto Elininado'),
      $.ajax({
          type: 'post',
          url: '../Controlador/EliminarProductoController.php',
          data:{delete_id:Id_Producto},
          success:function(data){

            location.href ="../Vista/productos.php";
          }
      });
     },
     function(){alertify.error('Operacion Cancelada')})) {


    }
  }

 </script>







 <!--<script type="text/javascript">
   
  function deleteAjax(Id_Producto) {
    if (confirm('Esta seguro este producto?'+Id_Producto)) {

      $.ajax({
          type: 'post',
          url: '../Controlador/EliminarProductoController.php',
          data:{delete_id:Id_Producto},
          success:function(data){

            location.href ="../Vista/productos.php";
          }
      });
    }
  }

 </script> -->