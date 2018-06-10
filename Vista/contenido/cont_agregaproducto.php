<div class="ibox-title">
    <h5>Agregar producto</h5>

</div>
<div class="ibox-content">
    <form class="form-horizontal" method="post" action="../Controlador/regProducto.php">
      <div class="form-group"><label class="col-sm-2 control-label">Codigo producto</label>
        <div class="col-sm-10"><input type="text" name="codpro"  value="" class="form-control"></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10"><input type="text" name="nombre"  value="" class="form-control"></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Precio unitario</label>
        <div class="col-sm-10"><input type="text" name="precio"  value="" class="form-control"></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Descripción</label>
        <div class="col-sm-10"><input type="text" name="descripcion"  value="" class="form-control"></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Categoria</label>
        <div class="col-sm-10"><input type="text" name="cat"  value="" class="form-control"></div>
    </div>
    <!-- <div class="form-group"><label class="col-sm-2 control-label">Cantidad</label>
        <div class="col-sm-10"><input type="text" name="cant"  value="" class="form-control"></div>
    </div> -->
    <div class="form-group"><label class="col-sm-2 control-label">Imagen</label>
        <div class="col-sm-10">
    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
    <div class="form-control" data-trigger="fileinput">
        <i class="glyphicon glyphicon-file fileinput-exists"></i>
    <span class="fileinput-filename"></span>
    </div>
    <span class="input-group-addon btn btn-default btn-file">
        <span class="fileinput-new">Seleccionar archivo</span>
        <span class="fileinput-exists">Cargar</span>
        <input type="file" name="..."/>
    </span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Cambiar</a>
</div> 
</div>
    </div>
    <div class="form-group">     
        <center>   
        <div class="col-sm-12 "><input type="submit"  value="Guardar producto" class=" btn btn-primary"></div>
        </center>
    </div>  
</form>
</div>