<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Registro de Usuario</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">'.$custom_error.'</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formUsuario" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="nombre" class="control-label">Nombre<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nombre" type="text" name="nombre" value="<?php echo set_value('nombre'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="rg" class="control-label">DNI<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rg" type="text" name="rg" value="<?php echo set_value('rg'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="cpf" class="control-label">NIF<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cpf" type="text" name="cpf" value="<?php echo set_value('cpf'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="ruc" class="control-label">Dirección<span class="required">*</span></label>
                        <div class="controls">
                            <input id="ruc" type="text" name="ruc" value="<?php echo set_value('ruc'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="numero" class="control-label">Número<span class="required">*</span></label>
                        <div class="controls">
                            <input id="numero" type="text" name="numero" value="<?php echo set_value('numero'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="barrio" class="control-label">Barrio<span class="required">*</span></label>
                        <div class="controls">
                            <input id="barrio" type="text" name="barrio" value="<?php echo set_value('barrio'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="ciudad" class="control-label">Ciudad<span class="required">*</span></label>
                        <div class="controls">
                            <input id="ciudad" type="text" name="ciudad" value="<?php echo set_value('ciudad'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="estado" class="control-label">País<span class="required">*</span></label>
                        <div class="controls">
                            <input id="estado" type="text" name="estado" value="<?php echo set_value('estado'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="email" class="control-label">Email<span class="required">*</span></label>
                        <div class="controls">
                            <input id="email" type="text" name="email" value="<?php echo set_value('email'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="clave" class="control-label">Contraseña<span class="required">*</span></label>
                        <div class="controls">
                            <input id="clave" type="password" name="clave" value="<?php echo set_value('clave'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="telefono" class="control-label">Teléfono<span class="required">*</span></label>
                        <div class="controls">
                            <input id="telefono" type="text" name="telefono" value="<?php echo set_value('telefono'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label">Tel. Móvil</label>
                        <div class="controls">
                            <input id="celular" type="text" name="celular" value="<?php echo set_value('celular'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label  class="control-label">Situación*</label>
                        <div class="controls">
                            <select name="situacion" id="situacion">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label  class="control-label">Permisos<span class="required">*</span></label>
                        <div class="controls">
                            <select name="permissoes_id" id="permissoes_id">
                                  <?php foreach ($permissoes as $p) {
                                      echo '<option value="'.$p->idPermissao.'">'.$p->nome.'</option>';
                                  } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar</button>
                                <a href="<?php echo base_url() ?>index.php/usuarios" id="" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>


<script  src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){

           $('#formUsuario').validate({
            rules : {
                  nombre:{ required: true},
                  rg:{ required: true},
                  cpf:{ required: true},
                  telefono:{ required: true},
                  email:{ required: true},
                  clave:{ required: true},
                  ruc:{ required: true},
                  numero:{ required: true},
                  barrio:{ required: true},
                  ciudad:{ required: true},
                  estado:{ required: true},
                  cep:{ required: true}
            },
            messages: {
                  nombre :{ required: 'Campo Requerido.'},
                  rg:{ required: 'Campo Requerido.'},
                  cpf:{ required: 'Campo Requerido.'},
                  telefono:{ required: 'Campo Requerido.'},
                  email:{ required: 'Campo Requerido.'},
                  clave:{ required: 'Campo Requerido.'},
                  ruc:{ required: 'Campo Requerido.'},
                  numero:{ required: 'Campo Requerido.'},
                  barrio:{ required: 'Campo Requerido.'},
                  ciudad:{ required: 'Campo Requerido.'},
                  estado:{ required: 'Campo Requerido.'},
                  cep:{ required: 'Campo Requerido.'}

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




