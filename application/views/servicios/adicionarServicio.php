<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-align-justify"></i>
                </span>
                <h5>Registro de Servicio</h5>
            </div>
            <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formServico" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="nombre" class="control-label">Nombre<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nombre" type="text" name="nombre" value="<?php echo set_value('nombre'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="precio" class="control-label"><span class="required">Precio*</span></label>
                        <div class="controls">
                            <input id="precio" class="money" type="text" name="precio" value="<?php echo set_value('precio'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="descripcion" class="control-label">Descripción</label>
                        <div class="controls">
                            <input id="descripcion" type="text" name="descripcion" value="<?php echo set_value('descripcion'); ?>"  />
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar</button>
                                <a href="<?php echo base_url() ?>index.php/servicios" id="btnAdicionar" class="btn"><i class="icon-arrow-left"></i> Volver</a>
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
           $('#formServico').validate({
            rules :{
                  nombre:{ required: true},
                  precio:{ required: true}
            },
            messages:{
                  nombre :{ required: 'Campo Requerido.'},
                  precio :{ required: 'Campo Requerido.'}
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




                                    
