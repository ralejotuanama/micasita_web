<link rel="stylesheet" href="<?php echo base_url();?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.js"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12" >
     

                <h5>Datos Solicitud</h5>
        

                      <div class="widget-title">
                                <ul class="nav nav-tabs">
                                     <li class="active"><a data-toggle="tab" href="#tab1">Datos</a></li>
                                     <li class=""><a data-toggle="tab" href="#tab2">Resultados</a></li>
                                </ul>
                      </div>
                             
                      
                    <div class="widget-content tab-content">

                      <div id="tab1" class="tab-pane active" style="min-height: 300px">
                
                          <div class="span12"> 
                                   <label for="tipo"  class="">Tipo Solicitud:<span class="required"></span></label>
                                <select id="tipo" disabled type="text" name="tipo" value="" required class="span12">
                                   <option value="">Seleccione</option>
                                   <option <?php if(rtrim($result->nombre) == 'CARTA FIANZA'){echo 'selected';} ?> value="CARTA FIANZA ">CARTA FIANZA</option>
                                    <option <?php if($result->nombre == 'CARTA DE OFERTA'){echo 'selected';} ?>  value="CARTA DE OFERTA">CARTA DE SERIEDAD DE OFERTA </option>
                                 </select>    
                          </div> 


                          <div class="span12" style="padding: 1%; margin-left: 0">

                          
                                
                                <div class="span12" id="divAnexos" style="margin-left: 0">

                                  <table border=1>
                                     <thead>
                                         <tr>
                                         <th style="width:300px;">Descripcion</th>
                                         <th style="width:300px;">Archivo adjunto</th>
                                         </tr>
                                     </thead>
                               
                                    <tbody> 
                              
                                    <?php 
                                    $cont = 1;
                                    $flag = 5;
                                    foreach ($anexos as $a) {

                                        if($a->thumb == null){
                                            $thumb = base_url().'assets/img/icon-file.png';
                                            $link = base_url().'assets/img/icon-file.png';
                                        }
                                        else{
                                            $thumb = base_url().'assets/anexos2/'.$a->thumb;
                                            $link = $a->url.$a->anexo;
                                        }

                                        if($cont == $flag){
                                           echo '<tr><td style=text-align:center;>'.$a->anexo.'</td><td style=text-align:center;><div style="margin-left: 0" class="span"><a href="#modal-anexo" imagem="'.$a->idAnexos.'" link="'.$link.'" otro="'.$a->anexo.'" role="button" class="btn anexo" data-toggle="modal"><p>'.$a->anexo.'</p></a></div></td></tr>'; 
                                           $flag += 4;
                                        }
                                        else{
                                           echo '<tr><td style=text-align:center;>'.$a->anexo.'</td><td style=text-align:center;><div class="span"><a href="#modal-anexo" imagem="'.$a->idAnexos.'" link="'.$link.'" otro="'.$a->anexo.'" role="button" class="btn anexo" data-toggle="modal"><p>'.$a->anexo.'</p></a></div></td></tr>'; 
                                        }
                                        $cont ++;
                                    } ?>
                             </tbody> </table>  </div>

                            </div>

                            
                            <a href="http://localhost:8082/micasita_demo/index.php/panelcliente/conta" id="" class="btn btn-primary"><i class="icon-arrow-left"></i> Volver</a>
                            
                        </div>            


                        <div id="tab2" class="tab-pane" style="min-height: 300px">    
                        <div class="span12"> 
                                 <label for="tipo"  class="">Estado Evaluación:<span class="required"></span></label>
                                  <select id="tipo" disabled  type="text" name="tipo" value="" class="span12">      
                                    <option selected value="Aprobado">Aprobado</option>
                                    <option value="Rechazado">Rechazado</option>
                                 </select>    
                            </div> 
                            <div class="span12" style="padding: 0%; margin-left: 0">                                               
                                        <div class="span6">
                                            <label for="correo1">Fecha Inicio Vigencia:<span class="required"></span></label>
                                            <input id="correo1"  readonly class="span12" type="text" name="correo1" value="19/05/2020"/>
                                        </div>   
                                        <div class="span6">
                                            <label for="correo2">Fecha Fin Vigencia:</label>
                                            <input id="correo2" readonly  type="text" class="span12" name="correo2" value="19/11/2020"  />
                                        </div>          
                            </div>
                            <div class="span12" style="padding: 0%; margin-left: 0">                                            
                                        <div class="span6"> 
                                        <label for="">Adjuntar Archivo</label>
                                        <input type="file" class="span12" name="userfile[]" multiple="multiple" size="20" />
                                           </div>         
                            </div>
                            <div class="span12" style="padding: 0%; margin-left: 0">                                             
                                        <div class="span12">
                                        <label for="correo2">Comentarios:</label>
                                        <textarea readonly class="span12" name="comentarios" id="comentarios" cols="50" rows="5">Aquí iran los comentarios </textarea>
                                            </div>          
                            </div>
                            <a href="http://localhost:8082/micasita_demo/index.php/panelcliente/conta" id="" class="btn btn-primary"><i class="icon-arrow-left"></i> Volver</a>
                        </div>    
                        
                     </div>  
                        
                                
 
               
          
     </div>
</div>



 <!-- Modal visualizar anexo -->
           <div id="modal-anexo" class="modal hide fade" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                     <h3 id="myModalLabel">Visualizar Archivo Adjunto</h3>
                  </div>
                  <!--<div class="modal-body"  style="margin-bottom:20px;">-->
                     <div class="span12" id="div-visualizar-anexo" style="text-align: center">
                         <div class='progress progress-info progress-striped active'>
                             <div class='bar' style='width: 100%'>
                             </div>
                         </div>
                    </div>
                <!-- </div>-->
                 <div class="modal-footer">
                         <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  
                  </div>
           </div>

<script type="text/javascript">


$(document).ready(function(){




    $("#formAnexos").validate({
         submitHandler: function( form ){       
              
               var dados = new FormData(form); 
               $("#form-anexos").hide('1000');
               $("#divAnexos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
               $.ajax({
                 type: "POST",
                 url: "<?php echo base_url();?>index.php/panelcliente/anexarnuevo",
                 data: dados,
                 mimeType:"multipart/form-data",
                 contentType: false,
                 cache: false,
                 processData:false,
                 dataType: 'json',
                 success: function(data)
                 {
                   if(data.result == true){
                       $("#divAnexos" ).load("<?php echo current_url();?> #divAnexos" );
                       $("#userfile").val('');

                   }
                   else{
                       $("#divAnexos").html('<div class="alert fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atención!</strong> '+data.mensagem+'</div>');      
                   }
                 },
                 error : function() {
                     $("#divAnexos").html('<div class="alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atención!</strong> Ocurrió un error. Verifique los adjunto o(s) arquivo(s).</div>');      
                 }

                 });

                 $("#form-anexos").show('1000');
                 return false;
               }

       });


       $(document).on('click', '.anexo', function(event) {
           event.preventDefault();
           var link = $(this).attr('link');
          
           var id = $(this).attr('imagem');
           var otro = $(this).attr('otro');
           var url = '<?php echo base_url(); ?>os/excluirAnexo/';
       
        /* $("#div-visualizar-anexo").html('<div>'+otro+'</div>');*/
        $("#div-visualizar-anexo").html('<iframe frameborder="0" src="'+link+'"></iframe>');
           $("#excluir-anexo").attr('link', url+id);

           $("#download").attr('href', "<?php echo base_url(); ?>index.php/os/downloadanexo/"+id);

       });

    })


</script>







