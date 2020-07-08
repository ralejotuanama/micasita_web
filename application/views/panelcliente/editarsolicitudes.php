<link rel="stylesheet" href="<?php echo base_url();?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.js"></script>


<!-- inicio row-fluid -->
<div class="row-fluid" style="margin-top:0">
    <!-- inicio span12 -->
    <div class="span12" >
     
                <h5>Editar Solicitud</h5>
                <!-- inicio formulario -->
                <form action="<?php echo base_url()?>index.php/panelcliente/editarsolicitudbd" id="editarsolicitud" method="post" enctype="multipart/form-data">

                                   <div class="widget-title">
                                       <ul class="nav nav-tabs">
                                           <li class="active"><a data-toggle="tab" href="#tab1">Datos</a></li>
                                           <li class=""><a data-toggle="tab" href="#tab2">Resultados</a></li>
                                       </ul>
                                  </div>
                             
                             <!-- inicio widget-content-->
                             <div class="widget-content tab-content">
                                   <!-- inicio tab1-->
                                   <div id="tab1" class="tab-pane active" style="min-height: 300px">
                                     <?php echo form_hidden('soli',$result->idsolicitud) ?>
                                       
                                       <!-- inicio span11-->
                                      <div class="span11"> 
                                          <label for="tipo"  class="">Tipo Solicitud:<span class="required"></span></label>
                                         <select id="tipo"  type="text" name="tipo" value="" required class="span12">
                                            <option value="">Seleccione</option>
                                            <option <?php if(rtrim($result->nombre) == 'CARTA FIANZA'){echo 'selected';} ?>  value="CARTA FIANZA">CARTA FIANZA</option>
                                            <option <?php if($result->nombre == 'CARTA DE OFERTA'){echo 'selected';} ?>  value="CARTA DE OFERTA">CARTA DE SERIEDAD DE OFERTA</option>
                                         </select>    
                                     </div> 
                                      <!-- fin span11-->


                                       <div class="span12" style="padding: 1%; margin-left: 0">
                                         <!-- inicio divanexos-->
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

                                                $cont1 = 0;
                                                  $m = count($anexos);
                                                  if(count($anexos)>0){
                                                        foreach ($anexos as $a) {
                                                          $link = $a->url.$a->anexo;
                                                            echo '<tr><td style=text-align:center;>'.$a->idAnexos.'</td><td style=text-align:center;><div style="margin-left: 0" class="span"><a href="#modal-anexo" imagem="'.$a->idAnexos.'" link="'.$link.'" role="button" otro="'.$a->anexo.'" class="btn anexo" data-toggle="modal"><p>'.$a->anexo.'</p></a></div></td></tr>'; 
                                                             $cont1 ++;                                
                                                     } 
                                                                   if($cont1 == 1){
                                                                     echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile2"  /></td></tr>'; 
                                                                     echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile3"  /></td></tr>'; 
                                                                     echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile4"  /></td></tr>';  
                                                                     echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile5"  /></td></tr>'; 
                                                                     echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile6"  /></td></tr>'; 
                                                                     }
                                                                    elseif($cont1 == 2){
                                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile3"  /></td></tr>'; 
                                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile4"  /></td></tr>';  
                                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile5"  /></td></tr>'; 
                                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile6"  /></td></tr>'; 
                                                                     }
                                                                     elseif($cont1 == 3){
                                                                      echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile4"  /></td></tr>'; 
                                                                      echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile5"  /></td></tr>';  
                                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile6"  /></td></tr>'; 
                                                                    }
                                                                    elseif($cont1 == 4){
                                                                      echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile5"  /></td></tr>'; 
                                                                      echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile6"  /></td></tr>'; 
                                                                    }
                                                                    elseif($cont1 == 5){
                                                                      echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile6"  /></td></tr>'; 
                                                                    }
                                                          }else{
                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile1"  /></td></tr>'; 
                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile2"  /></td></tr>';
                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile3"  /></td></tr>'; 
                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile4"  /></td></tr>';  
                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile5"  /></td></tr>'; 
                                                       echo '<tr><td style=text-align:center;>archivo</td><td><input  type="file" name="userfile6"  /></td></tr>'; 
                                                  }
                                                ?>
                                              </tbody> 
                                              </table> 
                                             </div>
                                             <!-- fin divanexos-->
                                          </div>
                                      </div> 
                                       <!-- fin tab1-->           

                                        <!-- inicio tab2-->
                                    <div id="tab2" class="tab-pane" style="min-height: 300px">    

                                           <div class="span12"> 
                                               <label for="tipo"  class="">Estado Evaluación:<span class="required"></span></label>
                                               <select id="tipo" readonly   type="text" name="tipo" value="" class="span12">      
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
                                      </div> 
                                       <!-- fin tab2-->  

                                  </div>  <!-- fin widget-content-->

                                           <button type="submit" class="btn btn-success">Guardar</button>
                                          <a href="http://localhost:8082/micasita_demo/index.php/panelcliente/conta" id="" class="btn btn-primary"><i class="icon-arrow-left"></i> Volver</a>
                                     

                    </form>
                    <!-- fin formulario -->
               </div> 
               <!-- fin span12 -->                   
             </div>

             <!-- fin row-fluid -->


                     <!--inicio  Modal visualizar anexo -->
                     <div id="modal-anexo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         <div class="modal-header" >
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3 id="myModalLabel">Visualizar Archivo Adjunto</h3>
                         </div>
                        <!-- <div class="modal-body" style="margin-bottom:20px;" >-->
                             <div class="span12" id="div-visualizar-anexo" style="text-align: center">
                                 <div class='progress progress-info progress-striped active'>
                                    <div class='bar' style='width: 100%'></div>
                                 </div>
                             </div>
                        <!-- </div>-->
                         
                         <div class="modal-footer" >
                         
                           <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                           <!--<a href="" id-imagem="" class="btn btn-inverse" id="download">Download</a>-->
                           <a href="" link="" class="btn btn-danger" id="excluir-anexo">Eliminar Archivo Adjunto</a>
                         </div>
                    </div>
                     <!--fin  Modal visualizar anexo -->

<script type="text/javascript">


$(document).ready(function(){

    $("#formAnexos").validate({
         submitHandler: function( form ){       
               //var dados = $( form ).serialize();
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
           var url = '<?php echo base_url(); ?>index.php/panelcliente/excluirAnexo/';
          /* $("#div-visualizar-anexo").html('<div>'+otro+'</div>');*/
          $("#div-visualizar-anexo").html('<iframe frameborder="0" src="'+link+'"></iframe>');
           $("#excluir-anexo").attr('link', url+id);
           $("#download").attr('href', "<?php echo base_url(); ?>index.php/panelcliente/downloadanexo/"+id);

       });

       
       $(document).on('click', '#excluir-anexo', function(event) {
           event.preventDefault();

           var link = $(this).attr('link'); 
           $('#modal-anexo').modal('hide');
           $("#divAnexos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");

           $.ajax({
                  type: "POST",
                  url: link,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divAnexos").load("<?php echo current_url();?> #divAnexos");
                        alert(data.mensaje);
                    }
                    else{
                        alert(data.mensaje);
                    }
                  }
            });
       });


    })


</script>







