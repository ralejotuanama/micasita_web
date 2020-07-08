<div class="accordion" id="collapse-group">
    <div class="accordion-group widget-box">
        <div class="accordion-heading">
            <div class="widget-title">
                <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                    <span class="icon"><i class="icon-list"></i></span><h5>Datos de Producto</h5>
                </a>
            </div>
        </div>
        <div class="collapse in accordion-body">
            <div class="widget-content">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="text-align: right; width: 30%"><strong>Descripción</strong></td>
                            <td><?php echo $result->descripcion ?></td>
                        </tr>
                      <!--  <tr>
                            <td style="text-align: right"><strong>Unidad</strong></td>
                            <td><?php echo $result->unidad ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Precio de Compra</strong></td>
                            <td>€ <?php echo $result->precioCompra; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Precio de Venta</strong></td>
                            <td>€ <?php echo $result->precioVenta; ?></td>
                        </tr>-->
                       <!-- <tr>
                            <td style="text-align: right"><strong>Stock</strong></td>
                            <td><?php echo $result->stock; ?></td>
                        </tr>-->
                        <!--<tr>
                            <td style="text-align: right"><strong>Stock Mínimo</strong></td>
                            <td><?php echo $result->stockMinimo; ?></td>
                        </tr>-->
                  
                    </tbody>
                </table>


                <table class="table table-bordered ">
                           <thead class="background-color:blue;">
                               <tr>
                                    <th>Descripcion</th>
                                    <th>Archivo Adjunto</th>       
                              </tr>
                           </thead>
                           <tbody>
                                <tr>
                                     <td style="text-align:center;">Aquí ira descripcion de archivo 1</td>
                                     <td style="text-align:center;"> <input type="file" class="" name="userfile"  size="20" style="line-height:0px;" /></td>
                                </tr>
                                <tr>
                                     <td style="text-align:center;">Aquí ira descripcion de archivo 2</td>
                                     <td style="text-align:center;"> <input type="file" class="" name="userfile"  size="20" style="line-height:0px;" /></td>
                                </tr>
                                <tr>
                                     <td style="text-align:center;">Aquí ira descripcion de archivo 3</td>
                                     <td style="text-align:center;"> <input type="file" class="" name="userfile"  size="20" style="line-height:0px;" /></td>
                                </tr>
                                <tr>
                                     <td style="text-align:center;">Aquí ira descripcion de archivo 4</td>
                                     <td style="text-align:center;"> <input type="file" class="" name="userfile"  size="20" style="line-height:0px;" /></td>
                                </tr>
                           </tbody>

                           </table>  
            </div>
        </div>

        
                  <div class="form-actions">
                        <div class="span12">
                            <div class="span12" style="text-align:center;">
                               
                                <a href="<?php echo base_url() ?>index.php/productos" id="" class="btn btn-primary"><i class="icon-arrow-left"></i> Volver</a>
                            </div>
                        </div>
                    </div>

    </div>
</div>

