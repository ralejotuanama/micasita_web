
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
                                     <td style="text-align:center;"> <input type="file" class="" name="userfile1"  size="20" style="line-height:0px;"  /></td>

                                </tr>

                                <tr>
                                     <td style="text-align:center;">aqui va descripcion de archivo2</td>
                                     <td style="text-align:center;"> <input type="file" class="" name="userfile2"  size="20"  style="line-height:0px;" /></td>

                                </tr>


                                <tr>
                                     <td style="text-align:center;">aqui va descripcion de archivo3</td>
                                     <td style="text-align:center;"> <input type="file" class="" name="userfile3"  size="20"  style="line-height:0px;" /></td>

                                </tr>


                                <tr>
                                     <td style="text-align:center;">aqui va descripcion de archivo4</td>
                                     <td style="text-align:center;"> <input type="file" class="" name="userfile4"  size="20"  style="line-height:0px;" value="xx" /></td>

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







