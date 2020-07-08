
<div class="row-fluid" style="margin-top:0">
    <div class="span12" >
     

                <h5>Registrar Linea</h5>
               <form action="<?php echo base_url()?>index.php/panelcliente/guardar_linea" id="" method="post" enctype="multipart/form-data">

                      <div class="widget-title">
                                <ul class="nav nav-tabs">
                                     <li class="active"><a data-toggle="tab" href="#tab1">Datos clientes</a></li>
                                     <li class=""><a data-toggle="tab" href="#tab2">Archivos Adjuntos</a></li>
                                </ul>
                      </div>
                             
                      
                    <div class="widget-content tab-content">

                      <div id="tab1" class="tab-pane active" style="min-height: 300px">
                      <!--<form action="<?php echo base_url()?>index.php/panelcliente/guardar_linea" id="" method="post">-->

                          <div class="span12" style="padding: 0%; margin-left: 0 ">

                         
                                                                                                                          
                                  <div class="span3">
                                      <label for="tipodocumento" style="font-size:12px;margin-right:125px;">Tipo Documento:<span class="required"></span></label>
                                            <select class="" name="tipodocumento" id="tipodocumento" value="">
                                                <option <?php if($result->tipodocumento == 'RUC'){echo 'selected';} ?>  value="RUC">RUC</option>
                                                <option <?php if($result->tipodocumento == 'DNI'){echo 'selected';} ?> value="DNI">DNI</option>
                                               
                                            </select>
                                 </div>

                               <div class="span3">
                                   <label for="razonsocial" style="font-size:12px">Numero:</label>
                                   <input id="razonsocial"   type="text" class="span12" name="razonsocial" readonly value="<?php  echo $result->documento  ?>"  />
                              </div>
                                                                                                                                                                             
                         </div>       

                              <div class="span12" style="padding: 0%; margin-left: 0 ">
                                                                                                                          
                                    <div class="span6">
                                       <label for="razonsocial" style="font-size:12px">Razon Social:</label>
                                       <input id="razonsocial"   type="text" class="span12" name="razonsocial" value="<?php echo $result->nombreCliente ?>"  />
                                    </div>
                                                                                       
                               </div>                


                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span2">
                                            <label for="telefono1">Telefono 1:<span class="required"></span></label>
                                            <input id="telefono1"  class="span12" type="text" name="telefono1" value="<?php echo $result->telefono ?>"/>
                                        </div>
                                        
                                        
                                        <div class="span2">
                                            <label for="telefono2">Telefono 2:</label>
                                            <input id="telefono2" type="text" class="span12" name="telefono2" value="<?php echo $result->celular ?>"  />
                                        </div>

                                        <div class="span2">
                                            <label for="telefono3">Telefono 3:</label>
                                            <input id="telefono3"  type="text" class="span12" name="telefono3" value="<?php  echo $result->telefono3 ?>"  />
                                        </div>
                                </div>
                    


                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span3">
                                            <label for="correo1">Correo 1:<span class="required"></span></label>
                                            <input id="correo1" class="span12" type="text" name="correo1" value="<?php  echo $result->email ?>"/>
                                        </div>
                                        
                                        
                                        <div class="span3">
                                            <label for="correo2">Correo 2:</label>
                                            <input id="correo2"  type="text" class="span12" name="correo2" value="<?php  echo $result->email2 ?>"  />
                                        </div>

                                       
                                </div>

                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                       <div class="span2">
                                            <label for="departamento">Departamento:<span class="required">*</span></label>
                                            <select class="span12"  name="departamento" id="departamento" value="">
                                            <option value="">Seleccione</option>
                                                <option  <?php if($result->estado == 'AMAZONAS'){echo 'selected';} ?>  value="AMAZONAS">AMAZONAS</option>
                                                <option  <?php if($result->estado == 'ANCASH'){echo 'selected';} ?>  value="ANCASH">ANCASH</option>
                                                <option  <?php if($result->estado == 'APURIMAC'){echo 'selected';} ?> value="APURIMAC">APURIMAC</option>
                                                <option  <?php if($result->estado == 'AREQUIPA'){echo 'selected';} ?> value="AREQUIPA">AREQUIPA</option>
                                                <option  <?php if($result->estado == 'AYACUCHO'){echo 'selected';} ?> value="AYACUCHO">AYACUCHO</option>
                                                <option  <?php if($result->estado == 'CALLAO'){echo 'selected';} ?> value="CALLAO">CALLAO</option>
                                                <option  <?php if($result->estado == 'CUSCO'){echo 'selected';} ?>  value="CUSCO">CUSCO</option>
                                                <option  <?php if($result->estado == 'HUANCAVELICA'){echo 'selected';} ?> value="HUANCAVELICA">HUANCAVELICA</option>
                                                <option  <?php if($result->estado == 'HUANUCO'){echo 'selected';} ?> value="HUANUCO">HUANUCO</option>
                                                <option  <?php if($result->estado == 'ICA'){echo 'selected';} ?> value="ICA">ICA</option>
                                                <option  <?php if($result->estado == 'JUNIN'){echo 'selected';} ?>  value="JUNIN">JUNIN</option>
                                                <option  <?php if($result->estado == 'LA LIBERTAD'){echo 'selected';} ?> value="LA LIBERTAD">LA LIBERTAD</option>
                                                <option  <?php if($result->estado == 'LAMBAYEQUE'){echo 'selected';} ?> value="LAMBAYEQUE">LAMBAYEQUE</option>
                                                <option  <?php if($result->estado == 'LIMA'){echo 'selected';} ?> value="LIMA">LIMA</option>
                                                <option  <?php if($result->estado == 'LORETO'){echo 'selected';} ?> value="LORETO">LORETO</option>
                                                <option  <?php if($result->estado == 'MADRE DE DIOS'){echo 'selected';} ?> value="MADRE DE DIOS">MADRE DE DIOS</option>
                                                <option  <?php if($result->estado == 'MOQUEGUA'){echo 'selected';} ?> value="MOQUEGUA">MOQUEGUA</option>
                                                <option  <?php if($result->estado == 'PASCO'){echo 'selected';} ?>  value="PASCO">PASCO</option>
                                                <option  <?php if($result->estado == 'PIURA'){echo 'selected';} ?> value="PIURA">PIURA</option>
                                                <option  <?php if($result->estado == 'PUNO'){echo 'selected';} ?> value="PUNO">PUNO</option>
                                                <option  <?php if($result->estado == 'SAN MARTIN'){echo 'selected';} ?> value="SAN MARTIN">SAN MARTIN</option>
                                                <option  <?php if($result->estado == 'TACNA'){echo 'selected';} ?> value="TACNA">TACNA</option>
                                                <option  <?php if($result->estado == 'TUMBES'){echo 'selected';} ?> value="TUMBES">TUMBES</option>
                                                <option  <?php if($result->estado == 'UCAYALI'){echo 'selected';} ?> value="UCAYALI">UCAYALI</option>
                                                    </select>
                                        </div>    

                                        <div class="span2">
                                            <label for="provincia">Provincia:<span class="required">*</span></label>
                                            <select class="span12"  name="provincia" id="provincia" value="">
                                                <option <?php if($result->ciudad == 'BARRANCA'){echo 'selected';} ?>  value="BARRANCA">BARRANCA</option>
                                                <option <?php if($result->ciudad == 'CAJATAMBO'){echo 'selected';} ?> value="CAJATAMBO">CAJATAMBO</option>
                                                <option <?php if($result->ciudad == 'HUAURA'){echo 'selected';} ?> value="HUAURA">HUAURA</option>
                                                <option <?php if($result->ciudad == 'LIMA'){echo 'selected';} ?> value="LIMA">LIMA</option>
                                                <option <?php if($result->cuidad == 'OYON'){echo 'selected';} ?> value="OYON">OYON</option>
                                                <option <?php if($result->ciudad == 'HUARAL'){echo 'selected';} ?> value="HUARAL">HUARAL</option>
                                                <option <?php if($result->ciudad == 'CANTA'){echo 'selected';} ?> value="CANTA">CANTA</option>
                                                <option <?php if($result->ciudad == 'CAÑETE'){echo 'selected';} ?> value="CAÑETE">CAÑETE</option>
                                                
                                                    </select>
                                        </div>    

                                        <div class="span2">
                                            <label for="distrito">Distrito:<span class="required">*</span></label>
                                            <select class="span12"  name="distrito" id="distrito" value="">
                                                <option <?php if($result->barrio == 'ANCON'){echo 'selected';} ?>  value="ANCON">ANCON</option>
                                                <option  <?php if($result->barrio == 'ATE'){echo 'selected';} ?>  value="ATE">ATE</option>
                                                <option  <?php if($result->barrio == 'BARRANCO'){echo 'selected';} ?>  value="BARRANCO">BARRANCO</option>
                                                <option  <?php if($result->barrio == 'BREÑA'){echo 'selected';} ?>  value="BREÑA">BREÑA</option>
                                                <option <?php if($result->barrio == 'CHORRILLOS'){echo 'selected';} ?>   value="CHORRILLOS">CHORRILLOS</option>
                                                <option <?php if($result->barrio == 'COMAS'){echo 'selected';} ?>  value="COMAS">COMAS</option>
                                                <option <?php if($result->barrio == 'EL AGUSTINO'){echo 'selected';} ?>  value="EL AGUSTINO">EL AGUSTINO</option>
                                                <option <?php if($result->barrio == 'INDEPENDENCIA'){echo 'selected';} ?>  value="INDEPENDENCIA">INDEPENDENCIA</option>
                                                <option <?php if($result->barrio == 'JESUS MARIA'){echo 'selected';} ?>  value="JESUS MARIA">JESUS MARIA</option>
                                                <option <?php if($result->barrio == 'LA MOLINA'){echo 'selected';} ?>  value="LA MOLINA">LA MOLINA</option>
                                                <option <?php if($result->barrio == 'LA VICTORIA'){echo 'selected';} ?>   value="LA VICTORIA">LA VICTORIA</option>
                                                <option <?php if($result->barrio == 'LINCE'){echo 'selected';} ?>  value="LINCE">LINCE</option>
                                                <option <?php if($result->barrio == 'LOS OLIVOS'){echo 'selected';} ?>  value="LOS OLIVOS">LOS OLIVOS</option>
                                                <option <?php if($result->barrio == 'SJL'){echo 'selected';} ?>  value="SJL">SJL</option>
                                                <option <?php if($result->barrio == 'MIRAFLORES'){echo 'selected';} ?>  value="MIRAFLORES">MIRAFLORES</option>
                                                <option  <?php if($result->barrio == 'RIMAC'){echo 'selected';} ?>  value="RIMAC">RIMAC</option>
                                                <option <?php if($result->barrio == 'SAN BORJA'){echo 'selected';} ?>  value="SAN BORJA">SAN BORJA</option>
                                                <option <?php if($result->barrio == 'SAN ISIDRO'){echo 'selected';} ?>  value="SAN ISIDRO">SAN ISIDRO</option>
                                                <option  <?php if($result->barrio == 'SJM'){echo 'selected';} ?>  value="SJM">SJM</option>
                                                <option <?php if($result->barrio == 'SAN LUIS'){echo 'selected';} ?>   value="SAN LUIS">SAN LUIS</option>
                                                <option <?php if($result->barrio == 'SAN MIGUEL'){echo 'selected';} ?>  value="SAN MIGUEL">SAN MIGUEL</option>
                                                <option   <?php if($result->barrio == 'SANTA ANITA'){echo 'selected';} ?> value="SANTA ANITA">SANTA ANITA</option>
                                                <option  <?php if($result->barrio == 'SURCO'){echo 'selected';} ?>   value="SURCO">SURCO</option>
                                                <option  <?php if($result->barrio == 'SURQUILLO'){echo 'selected';} ?>  value="SURQUILLO">SURQUILLO</option>
                                                <option <?php if($result->barrio == 'VILLA EL SALVADOR'){echo 'selected';} ?>  value="VILLA EL SALVADOR">VILLA EL SALVADOR</option>
                                                <option <?php if($result->barrio == 'VILLA MARIA'){echo 'selected';} ?>  value="VILLA MARIA">VILLA MARIA</option>
                                                    </select>
                                        </div>    
                                                                                
                                                                             
                                  </div>

                                  <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span6">
                                            <label for="direccion">Direccion:<span class="required"></span></label>
                                            <input id="direccion"  class="span12" type="text" name="direccion" value="<?php  echo $result->ruc ?>"/>
                                        </div>
                                        
                                             
                                </div>

                                <div class="span12" style="padding: 0%; margin-left: 0">
                                                                                
                                        <div class="span6">
                                                <label for="referencia">Referencia:<span class="required"></span></label>
                                                <input id="referencia"  class="span12" type="text" name="referencia" value="<?php  echo $result->referencia ?>"/>
                                        </div>
                                                                                
                                                                                     
                                </div>

                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a href="http://localhost:8082/micasita_demo/index.php/panelcliente/conta" id="" class="btn btn-primary"><i class="icon-arrow-left"></i> Volver</a>
                            


                             
                        </div>            


                        <div id="tab2" class="tab-pane" style="min-height: 300px">    


                        
                             <!--Anexos-->
                      
                            <div class="span12" style="padding: 1%; margin-left: 0">

                           
                               
                
                            <table class="table table-bordered ">

                                
                               <thead class="background-color:blue;">
                                 <tr>
        
                                   <th>Descripcion</th>
                                   <th>Archivo Adjunto</th> 
            
                                </tr>
                              </thead>
                              <tbody>

                                <tr>
                                    <td style="text-align:center;">aqui va descripcion de archivo1</td>
                                    <td style="text-align:center;"> <input type="file" class="" name="userfile1" id="uploadPDF" size="20" style="line-height:0px;"  /> <input type="button" value="Previsualizar" onclick="PreviewImage();" data-toggle="modal" data-target="#myModal" class="btn btn-primary" /></td>

                              </tr>

                               <tr>
                                    <td style="text-align:center;">aqui va descripcion de archivo2</td>
                                    <td style="text-align:center;"> <input type="file" class="" name="userfile2"  size="20" id="uploadPDF2" style="line-height:0px;"  /> <input type="button" value="Previsualizar" onclick="PreviewImage2();"  /></td>

                              </tr>


                               <tr>
                                    <td style="text-align:center;">aqui va descripcion de archivo3</td>
                                    <td style="text-align:center;"> <input type="file" class="" name="userfile3"  size="20"  style="line-height:0px;" id="uploadPDF" /> <input type="button" value="Previsualizar" onclick="PreviewImage();"  /></td>

                               </tr>


                               <tr>
                                    <td style="text-align:center;">aqui va descripcion de archivo4</td>
                                    <td style="text-align:center;"> <input type="file" class="" name="userfile4"  size="20"  style="line-height:0px;" id="uploadPDF" /> <input type="button" value="Previsualizar" onclick="PreviewImage();"  /></td>

                              </tr>
                            </tbody>

                           </table>  

                         
     

                            </div>
                            <button type="submit" class="btn btn-success">Guardar</button>
                                
                            <a href="http://localhost:8082/micasita_demo/index.php/panelcliente/conta" id="" class="btn btn-primary"><i class="icon-arrow-left"></i> Volver</a>
                            
                        
                          




                        </div>    
                        
                     </div>  

                    </form> 




                   <!-- <input id="uploadPDF" type="file" name="myPDF"/>&nbsp;-->
                     



        
                         <div style="clear:both">
                                <iframe id="viewer" frameborder="0" scrolling="no" width="300" height="400"></iframe>
                         </div>
                         <div style="clear:both">
                                <iframe id="viewer2" frameborder="0" scrolling="no" width="300" height="400"></iframe>
                         </div>
   
                        
                                

                      
     </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


          <!--<img id="blah" src="#" alt="your image" />-->



         <!-- <script>
                function readURL(input) {
                  if (input.files && input.files[0]) {
                     var reader = new FileReader();
    
                    reader.onload = function(e) {
                      $('#blah').attr('src', e.target.result);
                       }
    
                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                            }
                 }

                  $("#imgInp").change(function() {
                           readURL(this);
                    });

</script>-->

       <script type="text/javascript">
            function PreviewImage() {
                pdffile=document.getElementById("uploadPDF").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#viewer').attr('src',pdffile_url);
            }
            function PreviewImage2() {
                pdffile=document.getElementById("uploadPDF2").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#viewer2').attr('src',pdffile_url);
            }
        </script>







