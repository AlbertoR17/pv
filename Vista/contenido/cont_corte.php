<?php require('../Controlador/conCorte.php'); ?>
<div class="ibox-content">
	<fieldset>
		<legend>Corte</legend>
<form method="POST" action="../Controlador/regCorte.php">
		<label class="col-sm-2 control-label">Fecha</label>
		<div class="form-group col-sm-10" id="data_1">
			<div class="input-group ">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				<input type="text" readonly name="fecha" id="fecha" value = "<?php
				date_default_timezone_set("America/Mexico_City");
				echo date('Y-m-d')?>" class="form-control" >
			</div>
		</div>
		<label class="col-sm-2 control-label">Total de ventas</label>
		<div class="form-group col-sm-10" id="data_1">
			<div class="input-group ">
				<span class="input-group-addon"><i class="fa fa-money"></i></span>
				<input type="number" autocomplete="off" readonly name="totalsis" id="totalsis" maxlength="60"  class="form-control" value="<?php echo $totaldia ?>">
			</div>
		</div>
		<label class="col-sm-2 control-label">Cantidad de caja</label>
		<div class="form-group col-sm-10" id="data_1">
			<div class="input-group ">

				<span class="input-group-addon"><i class="fa fa-money"></i></span>
				<input type="number" autocomplete="off" name="totalreal" id="totalreal" maxlength="60"  class="form-control">
			</div>
		</div>
    

		<div class="form-group pull-right" id="data_1">
			<div class="input-group "><br>
				<input type="submit" class=" btn btn-primary" value="Terminar corte">
			</div>
		</div>
    
		</form>
		
		









	</fieldset>
</div>






























































































<!-- Content Wrapper. Contains page content -->
      <!--<div class="content-wrapper">
        <!-- Content Header (Page header) 
        <section class="content-header">
          <h1>
             Corte de Caja 
            <small></small>
          </h1>
          
        </section>

        <!-- Main content 
        <section class="content">

          <!-- Your Page Content Here 
          <div class='row'>
          <div class='col-md-6'>
          <div class='box box-primary'>
          <div class='box-header with-border'>
         
          </div>
          <div class='box-body'>
            <div class="form-group">
                    <label>Fecha:</label>
                    <div class="input-group">
                      <button class="btn btn-default pull-left" id="daterange-btn">
                        <i class="fa fa-calendar"></i> Click para seleccionar.
                        <i class="fa fa-caret-down"></i>
                      </button>
                    </div>
                    <span class='fe'></span>
                    <input type='hidden'  class='form-control' id='fi' value=''>
                    <input type="hidden"  class='form-control' id='ff' value=''>
            </div><!-- /.form group 
          </div>

          </div>
          </div>

          <div class='col-md-6'>
          <div class='box box-primary'>
          <div class='box-header with-border'>
          <h4 class='box-title'>Selecciona el numero de caja.</h4>
           </div>
           <div class='box-body'>
           <form class='form-horizontal'>
           <div class='form-group'>
           <label for='numero_caja' class='col-sm-5 control-label'># de Caja:</label>
             <div class='col-sm-6'>
                <select class='form-control select2' id='numero_caja' onchange='activa_boton();'>
                <option value='' selected>Selecciona</option>
                <option value='1'>Caja 1</option>
                <option value='2'>Caja 2</option>
                <option value='3'>Caja 3</option>
                <option value='4'>Caja 4</option>
                <option value='0'>Todas</option>
                </select>
             </div>
           </div>
           </form>
           </div>
           <div class='box-footer'>
           <button class='btn btn-primary pull-right' onclick='trae_venta();' id='btn-sig' disabled><i class='fa fa-search'></i> Consultar...</button>
          </div>
          </div>
          </div>

          </div>

        <div class='row'>
        <div class='col-md-12'>
        <div id='global'>
        </div>
        </div>
        <div class='col-md-12'>
        <div id='data'>
        </div>
        </div>
        </div>
        </section><!-- /.content 

        <div class="modal fade" id ="modal_detalle_venta" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title nuticket"></h4>
          </div>
          <div class="modal-body">
            <div id='detalle_de_venta'></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div> /.modal-content 
      </div><!-- /.modal-dialog 
    </div><!-- /.modal 

         </div><!-- /.content-wrapper -->