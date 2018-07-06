
<?php 

$idProd=$_GET['id'];
require('conec.php');
include('css.php');
    $rs = mysqli_query($con, "SELECT * FROM productos where Id_Producto =$idProd");
    $row = mysqli_fetch_array($rs);
    $codigoPro =$row['Codigo'];
    $nombre=$row['Nombre'];
    $precio=$row['Precio_Unitario'];
    $des=$row['Descripcion'];
    $cat=$row['Categoria'];


    
mysqli_close($con);
?>

<div class="ibox-title">
    <h5>Editar producto</h5>

</div>
<div class="ibox-content">
    <form class="form-horizontal" method="post" action="../Controlador/editarproductoController.php">

    <div class="form-group"><label class="col-sm-2 control-label"></label>
        <div class="col-sm-10"><input required type="text" name="idProducto"  value="<?php echo $idProd; ?>" class="form-control" style="display: none"></div>
    </div>

      <div class="form-group"><label class="col-sm-2 control-label" >Codigo producto</label>
        <div class="col-sm-10"><input required type="number" onkeypress="return validanum(event)" name="codpro"  value="<?php echo $codigoPro; ?>" class="form-control" autofocus></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10"><input required type="text" name="nombre" onkeypress="return validaletra(event)" value="<?php echo $nombre; ?>" class="form-control"></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Precio unitario</label>
        <div class="col-sm-10"><input required type="number" min="0.50" step="0.01" name="precio"   value="<?php echo $precio; ?>" class="form-control"></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Descripción</label>
        <div class="col-sm-10"><input required type="text" name="descripcion" maxlength="100" value="<?php echo $des; ?>" class="form-control"></div>
    </div>

    <div class="form-group"><label class="col-sm-2 control-label">Categoria</label>
        <div class="col-sm-10">
          <select class="form-control" required name="cat" value="Lacteos">
            <option <?php if($cat == 'Lacteos'){echo("selected");}?> value="Lacteos">Lacteos</option>
            <option <?php if($cat == 'Panaderia'){echo("selected");}?> value="Panaderia">Panaderia</option>
            <option <?php if($cat == 'Botanas'){echo("selected");}?> value="Botanas">Botanas</option>
            <option <?php if($cat == 'Bebidas'){echo("selected");}?> value="Bebidas">Bebidas</option>
            <option <?php if($cat == 'Frutas y Verduras'){echo("selected");}?> value="Frutas y Verduras">Frutas y Verduras</option>
            <option <?php if($cat == 'Carnes'){echo("selected");}?> value="Carnes">Carnes</option>
            <option <?php if($cat == 'Detergentes'){echo("selected");}?> value="Detergentes">Detergentes</option>
            <option <?php if($cat == 'Enlatados'){echo("selected");}?> value="Enlatados">Enlatados</option>
            <option <?php if($cat == 'A granel'){echo("selected");}?> value="A granel">A granel</option>           
          </select>
        </div>
    </div>


    <div class="form-group">     
        <center>   
        <div class="col-sm-12 "><input type="submit"  value="Guardar producto" class=" btn btn-primary"></div>
        </center>
    </div>  
</form>
</div>
 <script type="text/javascript">
        function validaletra(e) { 
          tecla = (document.all) ? e.keyCode : e.which; 
          if (tecla==8) return true; 
          patron =/[A-Za-z\s]/; 
          te = String.fromCharCode(tecla); 
          return patron.test(te); 
          }
      </script>
      <script type="text/javascript">
          function validanum(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==8){
              return true;
          }
              patron =/[0-9]/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }
      </script>
      <script type="text/javascript">
         function validacorreo(e) { 
          tecla = (document.all) ? e.keyCode : e.which; 
          if (tecla==8) return true; 
          patron =/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail); 
          te = String.fromCharCode(tecla); 
          return patron.test(te); 
          }
          function isValidEmail(mail) {  
  return /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail); 
}

      </script>