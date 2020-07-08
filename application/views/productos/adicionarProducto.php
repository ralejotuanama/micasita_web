<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-align-justify"></i>
                </span>
                <h5>Registrar Producto</h5>
            </div>
            <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formProduto" method="post" class="form-horizontal" >
                     <div class="control-group">
                        <label for="descripcion" class="control-label">Descripción<span class="required">*</span></label>
                        <div class="controls">
                            <input id="descripcion" type="text" name="descripcion" value="<?php echo set_value('descripcion'); ?>"  />
                        </div>
                    </div>

                 <!--   <div class="control-group">
                        <label for="unidad" class="control-label">Unidad<span class="required">*</span></label>
                        <div class="controls">
                            <input id="unidad" type="text" name="unidad" value="<?php echo set_value('unidad'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="precioCompra" class="control-label">Precio de Compra<span class="required">*</span></label>
                        <div class="controls">
                            <input id="precioCompra" class="money" type="text" name="precioCompra" value="<?php echo set_value('precioCompra'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="precioVenta" class="control-label">Precio de Venta<span class="required">*</span></label>
                        <div class="controls">
                            <input id="precioVenta" class="money" type="text" name="precioVenta" value="<?php echo set_value('precioVenta'); ?>"  />
                        </div>
                    </div>-->

                   <!-- <div class="control-group">
                        <label for="stock" class="control-label">Stock<span class="required">*</span></label>
                        <div class="controls">
                            <input id="stock" type="text" name="stock" value="<?php echo set_value('stock'); ?>"  />
                        </div>
                    </div>-->

                   <!-- <div class="control-group">
                        <label for="stockMinimo" class="control-label">Stock Mínimo</label>
                        <div class="controls">
                            <input id="stockMinimo" type="text" name="stockMinimo" value="<?php echo set_value('stockMinimo'); ?>"  />
                        </div>
                    </div>-->

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"> Guardar</button>
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



