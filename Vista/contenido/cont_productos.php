<div class="ibox-title">
                            <h5>Productos</h5>

                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Buscar...">

                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    
                                    <th >Codigo</th>
                                    <th >Nombre</th>
                                    <th >Precio</th>
                                    <th >Descripción</th>
                                    <!-- <th >Imagen</th> -->
                                    <th >Categoria</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 

                                require('../Controlador/conProducto.php');
                                 ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>