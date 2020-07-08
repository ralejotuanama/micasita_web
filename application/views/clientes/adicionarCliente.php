<!--div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Registro de Cliente</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                } ?>
                     <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal" >
                    
                    
                     <div class="span12" >
                                       

                     </div>

                     <div class="span12" >
                                        <div class="span5">
                                            <label for="nombres">Nombres:<span class="required">*</span></label>
                                            <input id="nombres" class="span12" type="text" name="nombres" value="<?php echo set_value('nombres'); ?>"  />
                                           
                                        
                                        </div>
                                        <div class="span5">
                                            <label for="apellidos">Apellidos:<span class="required">*</span></label>
                                            <input id="apellidos" class="span12" type="text" name="apellidos" value="<?php echo set_value('apellidos'); ?>"  />
                                           
                                        </div>

                     </div>

                     <div class="span12" >
                                       

                                       </div>

                     <div class="span12" >
                                        <div class="span5">
                                            <label for="razonsocial">Razon Social:<span class="required">*</span></label>
                                            <input id="razonsocial" class="span12" type="text" name="razonsocial" value="<?php echo set_value('razonsocial'); ?>"  />
                                           
                                        
                                        </div>
                                        <div class="span5">
                                            <label for="ruc">RUC:<span class="required">*</span></label>
                                            <input id="ruc" class="span12" type="text" name="ruc" value="<?php echo set_value('ruc'); ?>"  />
                                           
                                        </div>

                     </div>

                     <div class="span12" >
                                       

                                       </div>

                     <div class="span12" >
                                        <div class="span5">
                                            <label for="telefonofijo">Teléfono Fijo:<span class="required">*</span></label>
                                            <input id="telefonofijo" class="span12" type="text" name="telefonofijo" value="<?php echo set_value('telefonofijo'); ?>"  />
                                           
                                        
                                        </div>
                                        <div class="span5">
                                            <label for="telefonocelular">Celular:<span class="required">*</span></label>
                                            <input id="telefonocelular" class="span12" type="text" name="telefonoceluar" value="<?php echo set_value('telefonocelular'); ?>"  />
                                           
                                        </div>

                     </div>


                     <div class="span12" >
                    </div>
                    

                    <div class="span12" >
                                        <div class="span5">
                                            <label for="correoelectronico">E-mail:<span class="required">*</span></label>
                                            <input id="correoelectronico" class="span12" type="text" name="correoelectronico" value="<?php echo set_value('correoelectronico'); ?>"  />
                                           
                                        
                                        </div>

                                        <div class="span5">
                                            <label for="motivo">Motivo<span class="required">*</span></label>
                                           <select class="span12" name="motivo" id="motivo" value="">
                                                <option value="motivo1">motivo1</option>
                                                <option value="motivo2">motivo2</option>
                                                <option value="motivo3">motivo3</option>
                                                <option value="motivo4">motivo4</option>
                                                <option value="motivo5">motivo5</option>
                                            </select>
                                        </div>
                                        

                     </div>


                     <div class="span12" >
                    </div>


                     
                     <div class="span12">


                          <div class="span10">
                               <label for="direccion">Direccion:<span class="required">*</span></label>
                               <textarea class="span12" name="direccion" id="direccion" cols="20" rows="5"></textarea>
                          </div>

                    </div>
                    <div class="span12" >
                    </div>-->
                                       


                    <!-- <div class="form-group">
                        <label for="nombreCliente" class="control-label">Nombre<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nombreCliente" type="text" name="nombreCliente" value="<?php echo set_value('nombreCliente'); ?>"  />
                        </div>
                          
                      
                    </div>-->




                   <!-- <div class="control-group">
                        <label for="documento" class="control-label">DNI/RUC<span class="required">*</span></label>
                        <div class="controls">
                            <input id="documento" type="text" name="documento" value="<?php echo set_value('documento'); ?>"  />
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
                        <label for="email" class="control-label">Email<span class="required">*</span></label>
                        <div class="controls">
                            <input id="email" type="text" name="email" value="<?php echo set_value('email'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
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

                    <div class="control-group" class="control-label">
                        <label for="barrio" class="control-label">Barrio<span class="required">*</span></label>
                        <div class="controls">
                            <input id="barrio" type="text" name="barrio" value="<?php echo set_value('barrio'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="ciudad" class="control-label">Ciudad<span class="required">*</span></label>
                        <div class="controls">
                            <input id="ciudad" type="text" name="ciudad" value="<?php echo set_value('ciudad'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="estado" class="control-label">País<span class="required">*</span></label>
                        <div class="controls">
                            <input id="estado" type="text" name="estado" value="<?php echo set_value('estado'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cep" class="control-label">CP<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cep" type="text" name="cep" value="<?php echo set_value('cep'); ?>"  />
                        </div>
                    </div>-->



                  <!--  <div class="form-actions">
                        <div class="span12">
                            <div class="span12">
                                <button type="submit" class="btn btn-success"> Guardar</button>
                                <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>-->





<div id="modalDatos" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:40%;">
           
           
                       <div class="modal-header" style="border-bottom:0px;">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                       </div>
                      <div class="widget-title">
                                <ul class="nav nav-tabs">
                                     <li class="active"><a data-toggle="tab" href="#tab12">Datos</a></li>
                                     <li class=""><a data-toggle="tab" href="#tab22">Archivos Adjuntos</a></li>
                                </ul>
                      </div>
                             
                      
                    <div class="widget-content tab-content">

                      <div id="tab12" class="tab-pane active" style="min-height: 300px">

                      <div class="span12" style="padding: 0%; margin-left: 0;">
                                                                                                                          
                         <div class="span6">
                         <label for="tipodocumento"  style="font-size:12px;margin-right:125px;">Tipo Documento:<span class="required"></span></label>
                                            <select class="" readonly name="tipodocumento" id="tipodocumento" value="">
                                                <option value="RUC">RUC</option>
                                                <option value="DNI" selected>DNI</option>
                                               
                                            </select>
                        </div>

                        <div class="span6" style="padding: 0%; margin-left: 0;">
                             <label for="razonsocial" style="font-size:12px">Numero:</label>
                            <input id="razonsocial" readonly  type="text" class="span12" name="razonsocial" value="08196587"  />
                        </div>
                                                                                                                                                                             
                    </div>       

                              <div class="span12" style="padding: 0%; margin-left: 0;" style="padding: 0%; margin-left: 0 ">
                                                                                                                          
                                    <div class="span12">
                                       <label for="razonsocial" style="font-size:12px">Razon Social:</label>
                                       <input id="razonsocial"  readonly type="text" class="span12" name="razonsocial" value="empresa de demostracion"  />
                                    </div>
                                                                                       
                               </div>                


                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span4">
                                            <label for="telefono1">Telefono 1:<span class="required"></span></label>
                                            <input id="telefono1" readonly class="span12" type="text" name="telefono1" value="8523697"/>
                                        </div>
                                        
                                        
                                        <div class="span4">
                                            <label for="telefono2">Telefono 2:</label>
                                            <input id="telefono2" readonly type="text" class="span12" name="telefono2" value="2369874"  />
                                        </div>

                                        <div class="span4">
                                            <label for="telefono3">Telefono 3:</label>
                                            <input id="telefono3" readonly type="text" class="span12" name="telefono3" value="963366214"  />
                                        </div>
                                </div>
                    


                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span6">
                                            <label for="correo1">Correo 1:<span class="required"></span></label>
                                            <input id="correo1" readonly class="span12" type="text" name="correo1" value="administracion@pruebas.com.pe"/>
                                        </div>
                                        
                                        
                                        <div class="span6">
                                            <label for="correo2">Correo 2:</label>
                                            <input id="correo2" readonly  type="text" class="span12" name="correo2" value="marketing@pruebas.com.pe"  />
                                        </div>

                                       
                                </div>

                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                       <div class="span4">
                                            <label for="departamento">Departamento:<span class="required">*</span></label>
                                            <select class="span12" readonly name="departamento" id="departamento" value="">
                                                <option value="departamento1" selected>Lima</option>
                                                <option  value="departamento2">Arequipa</option>
                                                <option  value="departamento3">Cusco</option>
                                                    </select>
                                        </div>    

                                        <div class="span4">
                                            <label for="provincia">Provincia:<span class="required">*</span></label>
                                            <select class="span12" readonly name="provincia" id="provincia" value="">
                                                <option value="provincia1" selected>Lima</option>
                                                
                                                    </select>
                                        </div>    

                                        <div class="span4">
                                            <label for="distrito">Distrito:<span class="required">*</span></label>
                                            <select class="span12" readonly name="distrito" id="distrito" value="">
                                                <option value="distrito1" selected>San Isidro</option>
                                                <option  value="distrito2">Miraflores</option>
                                                <option  value="distrito3">San Borja</option>
                                                    </select>
                                        </div>    
                                                                                
                                                                             
                                  </div>

                                  <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span12">
                                            <label for="direccion">Direccion:<span class="required"></span></label>
                                            <input id="direccion" readonly class="span12" type="text" name="direccion" value="Av. San luis 142"/>
                                        </div>
                                        
                                             
                                </div>

                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span12">
                                                <label for="referencia">Referencia:<span class="required"></span></label>
                                                <input id="referencia" readonly  class="span12" type="text" name="referencia" value="A 2 cuadras de la meternidad de lima"/>
                                        </div>
                                                                                
                                                                                     
                                </div>

                        </div>            


                        <div id="tab22" class="tab-pane" style="min-height: 300px">    
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

                         <div class="form-actions" style="text-align:center;">
                              
                                    
                                       <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                                
                            </div> 
                        
                     </div>  
           
        </div>






<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formCliente').validate({
            rules :{
                  nombreCliente:{ required: true},
                  documento:{ required: true},
                  telefono:{ required: true},
                  email:{ required: true},
                  ruc:{ required: true},
                  numero:{ required: true},
                  barrio:{ required: true},
                  ciudad:{ required: true},
                  estado:{ required: true},
                  cep:{ required: true}
            },
            messages:{
                  nombreCliente :{ required: 'Campo Requerido.'},
                  documento :{ required: 'Campo Requerido.'},
                  telefono:{ required: 'Campo Requerido.'},
                  email:{ required: 'Campo Requerido.'},
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




<div class="row-fluid" style="margin-top:0">
    <div class="span12" >
     

                <h5>Registrar Linea</h5>
                <form action="" id="" method="post" enctype="multipart/form-data">

                      <div class="widget-title">
                                <ul class="nav nav-tabs">
                                     <li class="active"><a data-toggle="tab" href="#tab1">Datos clientes</a></li>
                                     <li class=""><a data-toggle="tab" href="#tab2">Archivos Adjuntos</a></li>
                                </ul>
                      </div>
                             
                      
                    <div class="widget-content tab-content">

                      <div id="tab1" class="tab-pane active" style="min-height: 300px">

                      <div class="span12" style="padding: 0%; margin-left: 0 ">
                                                                                                                          
                         <div class="span3">
                         <label for="tipodocumento" style="font-size:12px;margin-right:125px;">Tipo Documento:<span class="required"></span></label>
                                            <select class="" name="tipodocumento" id="tipodocumento" value="">
                                                <option value="RUC">RUC</option>
                                                <option value="DNI">DNI</option>
                                               
                                            </select>
                        </div>

                        <div class="span3">
                             <label for="razonsocial" style="font-size:12px">Numero:</label>
                            <input id="razonsocial"   type="text" class="span12" name="razonsocial" value=""  />
                        </div>
                                                                                                                                                                             
                    </div>       

                              <div class="span12" style="padding: 0%; margin-left: 0 ">
                                                                                                                          
                                    <div class="span6">
                                       <label for="razonsocial" style="font-size:12px">Razon Social:</label>
                                       <input id="razonsocial"   type="text" class="span12" name="razonsocial" value=""  />
                                    </div>
                                                                                       
                               </div>                


                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span2">
                                            <label for="telefono1">Telefono 1:<span class="required"></span></label>
                                            <input id="telefono1"  class="span12" type="text" name="telefono1" value=""/>
                                        </div>
                                        
                                        
                                        <div class="span2">
                                            <label for="telefono2">Telefono 2:</label>
                                            <input id="telefono2" type="text" class="span12" name="telefono2" value=""  />
                                        </div>

                                        <div class="span2">
                                            <label for="telefono3">Telefono 3:</label>
                                            <input id="telefono3"  type="text" class="span12" name="telefono3" value=""  />
                                        </div>
                                </div>
                    


                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span3">
                                            <label for="correo1">Correo 1:<span class="required"></span></label>
                                            <input id="correo1" class="span12" type="text" name="correo1" value=""/>
                                        </div>
                                        
                                        
                                        <div class="span3">
                                            <label for="correo2">Correo 2:</label>
                                            <input id="correo2"  type="text" class="span12" name="correo2" value=""  />
                                        </div>

                                       
                                </div>

                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                       <div class="span2">
                                            <label for="departamento">Departamento:<span class="required">*</span></label>
                                            <select class="span12"  name="departamento" id="departamento" value="">
                                                <option value="departamento1">Lima</option>
                                                <option  value="departamento2">Arequipa</option>
                                                <option  value="departamento3">Cusco</option>
                                                    </select>
                                        </div>    

                                        <div class="span2">
                                            <label for="provincia">Provincia:<span class="required">*</span></label>
                                            <select class="span12"  name="provincia" id="provincia" value="">
                                                <option value="provincia1">Lima</option>
                                                
                                                    </select>
                                        </div>    

                                        <div class="span2">
                                            <label for="distrito">Distrito:<span class="required">*</span></label>
                                            <select class="span12"  name="distrito" id="distrito" value="">
                                                <option value="distrito1">San Isidro</option>
                                                <option  value="distrito2">Miraflores</option>
                                                <option  value="distrito3">San Borja</option>
                                                    </select>
                                        </div>    
                                                                                
                                                                             
                                  </div>

                                  <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span6">
                                            <label for="direccion">Direccion:<span class="required"></span></label>
                                            <input id="direccion"  class="span12" type="text" name="direccion" value=""/>
                                        </div>
                                        
                                             
                                </div>

                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span6">
                                                <label for="referencia">Referencia:<span class="required"></span></label>
                                                <input id="referencia"  class="span12" type="text" name="referencia" value=""/>
                                        </div>
                                                                                
                                                                                     
                                </div>

                        </div>            


                        <div id="tab2" class="tab-pane" style="min-height: 300px">    


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
                        
                                

                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            
                            
                              <a href="http://127.0.0.1:8082/micasita_demo/index.php/clientes" id="" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                            
                            </div>
                        </div>
                  

                    
                </form>
          
     </div>
</div>











