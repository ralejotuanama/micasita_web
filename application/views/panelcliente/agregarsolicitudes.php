
  <div class="row-fluid" style="margin-top:0">
    <div class="span12">
        
             <h5>Registrar Solicitud</h5>
                <form action="<?php echo base_url()?>index.php/panelcliente/guardarsolicitud" id="guardarsolicitud" method="post" enctype="multipart/form-data">

                      <div class="widget-title">
                                <ul class="nav nav-tabs">
                                     <li class="active"><a data-toggle="tab" href="#tab1">Datos</a></li> 
                                </ul>
                      </div>
                              
                    <div class="widget-content tab-content" style="border-bottom:0px;">
                       <div id="tab1" class="tab-pane active" style="min-height: 300px">
        
                                <div class="span5"> 
                                    <label for="tipo" class="">Tipo Solicitud:<span class="required"></span></label>
                                      <select id="tipo" required type="text" name="tipo" value="" class="span12">
                                        <option value="">Seleccione</option>
                                        <option value="CARTA FIANZA ">CARTA FIANZA</option>
                                        <option value="CARTA DE OFERTA">CARTA DE SERIEDAD DE OFERTA </option>          
                                      </select>    
                                 </div> 
                                 
                               
                                 <div class="span10">
                                 <p style="text-align:center;font-weight:bold;">SOLO SE DEBEN CARGAR ARCHIVOS CON EXTENSION .pfd</p>
                                 </div>
                                
                            
                            <table class="table table-bordered ">

                            
                             <thead class="background-color:blue;">
                                 <tr>
                                       <th>Descripcion</th>
                                       <th>Archivo Adjunto</th> 
                                       
                                  </tr>
                              </thead>
                              <tbody>

                                <tr>
                                     <td style="text-align:center;">descripcion de archivo1</td>
                                     <td style="text-align:center;"><input type="hidden" name="oculto1" id="oculto1" value="archivo solicitud1" /> <input type="file" class="" name="userfile1" id="uploadPDF" size="20" style="line-height:0px;"/><input type="button" value="ver" onclick="PreviewImage();" data-toggle="modal" data-target="#myModalx" class="btn btn-primary"  /></td>

                                </tr>

                                <tr>
                                     <td style="text-align:center;">descripcion de archivo2</td>
                                     <td style="text-align:center;"><input type="hidden" name="oculto2" id="oculto2" value="archivo solicitud2" /> <input type="file" class="" name="userfile2" id="uploadPDF2" size="20"  style="line-height:0px;" /><input type="button" value="ver" onclick="PreviewImage2();" data-toggle="modal" data-target="#myModal2x" class="btn btn-primary" /></td>

                                </tr>


                                <tr>
                                     <td style="text-align:center;">descripcion de archivo3</td>
                                     <td style="text-align:center;"><input type="hidden" name="oculto3" id="oculto3" value="archivo solicitud3" /> <input type="file" class="" name="userfile3" id="uploadPDF3" size="20"  style="line-height:0px;" /><input type="button" value="ver" onclick="PreviewImage3();" data-toggle="modal" data-target="#myModal3x" class="btn btn-primary" /></td>

                                </tr>


                                <tr>
                                     <td style="text-align:center;">descripcion de archivo4</td>
                                     <td style="text-align:center;"><input type="hidden" name="oculto4" id="oculto4" value="archivo solicitud4" /> <input type="file" class="" name="userfile4" id="uploadPDF4" size="20"  style="line-height:0px;"  /><input type="button" value="ver" onclick="PreviewImage4();" data-toggle="modal" data-target="#myModal4x" class="btn btn-primary" /></td>

                                </tr>
                              </tbody>

                             </table>  
                        </div>               
                     </div>  
                        
                                

                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success">Guardar</button>
                              <a href="http://localhost:8082/micasita_demo/index.php/panelcliente/conta" 
                              id="" class="btn btn-primary"><i class="icon-arrow-left"></i> Volver</a>
                            </div>
                        </div>
                  

                    
                </form>
                  
     </div>
 </div>



 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Archivo 1</h4>
      </div>-->
      <div class="modal-body" style="text-align: center;">
      <iframe id="viewer" frameborder="0" scrolling="no" allowfullscreen scrolling="si" style="zoom: 1.50;" ></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Archivo 2</h4>
      </div>-->
      <div class="modal-body" style="text-align: center;">
      <iframe id="viewer2" frameborder="0" scrolling="no"  allowfullscreen scrolling="si" style="zoom: 1.50;" ></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Archivo 3</h4>
      </div>-->
      <div class="modal-body" style="text-align: center;">
      <iframe id="viewer3" frameborder="0" scrolling="no" allowfullscreen scrolling="si" style="zoom: 1.50;" ></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Archivo 4</h4>
      </div>-->
      <div class="modal-body" style="text-align: center;">
      <iframe id="viewer4" frameborder="0" scrolling="no"  allowfullscreen scrolling="si" style="zoom: 1.50;" ></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
            function PreviewImage() {
                pdffile=document.getElementById("uploadPDF").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#viewer').attr('src',pdffile_url);
                window.open(pdffile_url,"nueva ventana");
            }
            function PreviewImage2() {
                pdffile=document.getElementById("uploadPDF2").files[0];
               pdffile_url=URL.createObjectURL(pdffile);
                $('#viewer2').attr('src',pdffile_url);
                window.open(pdffile_url,"nueva ventana");
            }
            function PreviewImage3() {
                pdffile=document.getElementById("uploadPDF3").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#viewer3').attr('src',pdffile_url);
                window.open(pdffile_url,"nueva ventana");
            }
            function PreviewImage4() {
                pdffile=document.getElementById("uploadPDF4").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
               //video.srcObject=stream;
               //srcObject=stream;
                $('#viewer4').attr('src',pdffile_url);
                window.open(pdffile_url,"nueva ventana");
            }
        </script>







