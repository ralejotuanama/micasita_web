<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-align-justify"></i>
                </span>
                <h5>Editar Producto</h5>
            </div>
            <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formProduto" method="post" class="form-horizontal" >
                     <div class="control-group">
                        <?php echo form_hidden('idProductos',$result->idProductos) ?>
                        <label for="descricpcion " class="control-label">Descripción<span class="required">*</span></label>
                        <div class="controls">
                            <input id="descripcion" type="text" name="descripcion" value="<?php echo $result->descripcion; ?>"  style="width:300px;" />
                        </div>
                    </div>


                    <div class="control-group">
                    <label for="distrito" class="control-label">Estado:<span class="required">*</span></label>
                      <div class="controls">
                        <select class="span4"  name="distrito" id="distrito" value="" style="width:314px;">
                            <option value="distrito1" selected>Activo</option>
                            <option  value="distrito2">Inactivo</option>                    
                        </select>
                      </div>  
                     </div>   

                   <!-- <div class="control-group">
                        <label for="unidad" class="control-label">Unidad<span class="required">*</span></label>
                        <div class="controls">
                            <input id="unidad" type="text" name="unidad" value="<?php echo $result->unidad; ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="precioCompra" class="control-label">Precio de Compra<span class="required">*</span></label>
                        <div class="controls">
                            <input id="precioCompra" class="money" type="text" name="precioCompra" value="<?php echo $result->precioCompra; ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="precioVenta" class="control-label">Precio de Venta<span class="required">*</span></label>
                        <div class="controls">
                            <input id="precioVenta" class="money" type="text" name="precioVenta" value="<?php echo $result->precioVenta; ?>"  />
                        </div>
                    </div>-->

                   <!-- <div class="control-group">
                        <label for="stock" class="control-label">Stock<span class="required">*</span></label>
                        <div class="controls">
                            <input id="stock" type="text" name="stock" value="<?php echo $result->stock; ?>"  />
                        </div>
                    </div>-->

                   <!-- <div class="control-group">
                        <label for="stockMinimo" class="control-label">Stock Mínimo</label>
                        <div class="controls">
                            <input id="stockMinimo" type="text" name="stockMinimo" value="<?php echo $result->stockMinimo; ?>"  />
                        </div>
                    </div>-->

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Modificar</button>
                                <a href="<?php echo base_url() ?>index.php/productos" id="" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                            </div>
                        </div>
                    </div>


                </form>
            </div>

         </div>
     </div>
</div>


<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>js/maskmoney.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".money").maskMoney();

        $('#formProduto').validate({
            rules :{
                  descricao: { required: true},
                  unidade: { required: true},
                  precoCompra: { required: true},
                  precoVenda: { required: true},
                  estoque: { required: true}
            },
            messages:{
                  descricao: { required: 'Campo Requerido.'},
                  unidade: {required: 'Campo Requerido.'},
                  precoCompra: { required: 'Campo Requerido.'},
                  precoVenda: { required: 'Campo Requerido.'},
                  estoque: { required: 'Campo Requerido.'}
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
    });
</script>




