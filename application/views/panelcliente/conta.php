<div class="widget-box">
       <div class="widget-title">
              <ul class="nav nav-tabs">
                   <li class="active"><a data-toggle="tab" href="#tab1">Lineas</a></li>
                   <li class=""><a data-toggle="tab" href="#tab2">Solicitudes</a></li>
             </ul>
      </div>

        <div class="widget-content tab-content">
                    <!-- inicio tab1-->
                     <div id="tab1" class="tab-pane active" style="min-height: 300px">
                          <a href="<?php echo base_url();?>index.php/panelcliente/agregarlineas" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar Linea</a>
                          <br><br>

                        <table class="table table-bordered ">
                           <thead>
                               <tr>
                                    <th>#</th>
                                    <th>Estado de Línea</th> 
                                    <th>Fecha Inicio Vigencia</th>
                                    <th>Fecha Final Vigencia</th>
                                    <th>Dias Pendientes para fin de vigencia</th>
                                    <th>Acciones</th>      
                              </tr>
                           </thead>
                      

                            <tbody>
        <?php foreach ($results3 as $r) {


          if($r->estadolinea == '0'){
             $res = "pendiente";
          }elseif($r->estadolinea == '1'){
            $res = "aprobado";
          }else{
            $res = "rechazado";
          }

       
           $fe = date("d-m-Y");
           $fe1 =  date('d-m-Y');

           $dias = (strtotime($r->fechafin)-strtotime($fe1))/86400;
           $dias = abs($dias); $dias = floor($dias);


           $val1 = ($r->fechainicio == '0000-00-00' ) ? '' : $r->fechainicio ;
           $val2 = ($r->fechafin == '0000-00-00' ) ? '' : $r->fechafin ;
           $val3 = ($dias > '5000' ) ? '0' : $dias ;

            echo '<tr>';
            echo '<td style=text-align:center;>'.$r->idlinea.'</td>';
         
            echo '<td style=text-align:center;>'. $res .'</td>';
            echo '<td style=text-align:center;>'.$val1.'</td>';
            echo '<td style=text-align:center;>'.$val2.'</td>' ; 
            echo '<td style=text-align:center;>'.$val3.'</td>' ; 
           echo '<td style=text-align:center;>';
            echo '<a href="'.base_url().'index.php/panelcliente/visualizarLineas/'.$r->idlinea.'" style="margin-right: 1%" class="btn tip-top" title="Ver mas detalles"><i class="icon-eye-open"></i></a>'; 
           echo '<a href="'.base_url().'index.php/panelcliente/editarLineas/'.$r->idlinea.'" style="margin-right: 1%" class="btn btn-info tip-top" title="Editar Linea"><i class="icon-pencil icon-white"></i></a>'; 
        
           ?>
          
            
        </tr>
          <?php } ?> 
    </tbody>
                        </table>
                       <?php
                        echo $this->pagination->create_links();

                        ?>

                     </div> 
                      <!-- fin tab1-->


                        <!-- inicio tab2-->
                        <div id="tab2" class="tab-pane" style="min-height: 300px">

                        <a href="<?php echo base_url();?>index.php/panelcliente/agregarsolicitudes" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar Solicitud</a>

                          <br><br>

                            <table class="table table-bordered ">
                                <thead>
                                       <tr>
                                          <th>#</th>
                                       
                                           <th>Estado de Solicitud</th> 
                                           <th>Fecha Inicio Vigencia</th>
                                          <th>Fecha Fin Vigencia</th>
                                          <th>Dias Pendientes para fin de Vigencia</th>
                                           <th>Acciones</th> 
          
                                        </tr>
                                </thead>




                                
          
                            <tbody>
        <?php foreach ($results4 as $r) {
           $res = (($r->estadosolicitud == '0') || ($r->estadosolicitud == 'NULL')) ? 'pendiente' : 'aprobado' ;
           $fe = date("d-m-Y");
           $fe1 =  date('d-m-Y');

           $dias = (strtotime($r->fechafin)-strtotime($fe1))/86400;
           $dias = abs($dias); $dias = floor($dias);


           $val1 = ($r->fechainicio == '0000-00-00' ) ? '' : $r->fechainicio ;
           $val2 = ($r->fechafin == '0000-00-00' ) ? '' : $r->fechafin ;
           $val3 = ($dias > '5000' ) ? '0' : $dias ;

            echo '<tr>';
            echo '<td style=text-align:center;>'.$r->idsolicitud.'</td>';
        
            echo '<td style=text-align:center;>'. $res .'</td>';
            echo '<td style=text-align:center;>'.$val1.'</td>';
            echo '<td style=text-align:center;>'.$val2.'</td>' ; 
            echo '<td style=text-align:center;>'.$val3.'</td>' ; 
           echo '<td style=text-align:center;>';
            echo '<a href="'.base_url().'index.php/panelcliente/visualizarSolicitudes/'.$r->idsolicitud.'" style="margin-right: 1%" class="btn tip-top" title="Ver mas detalles"><i class="icon-eye-open"></i></a>'; 
         echo '<a href="'.base_url().'index.php/panelcliente/editarsolicitud/'.$r->idsolicitud.'" style="margin-right: 1%" class="btn btn-info tip-top" title="Editar solicitud"><i class="icon-pencil icon-white"></i></a>'; 
        
           ?>
         
        </tr>
          <?php } ?> 
    </tbody>
                             
                                 </table>

                                 <?php
                        echo $this->pagination->create_links();

                        ?>
                        </div> 
                          <!-- fin tab2-->

               </div>

</div>



















       








       

        
        



<script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>js/maskmoney.js"></script>




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
                  url: "<?php echo base_url();?>index.php/panelcliente/anexar",
                  data: dados,
                  mimeType:"multipart/form-data",
                  contentType: false,
                  cache: false,
                  processData:false,
                  dataType: 'json',
                  success: function(data)
                  {


                      alert(data);
                    if(data.result == true){
                        $("#divAnexos" ).load("<?php echo current_url();?> #divAnexos" );
                        $("#userfile").val('');

                    }
                    else{
                        $("#divAnexos").html('<div class="alert fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atención!</strong> '+data.mensagem+'</div>');      
                    }
                  },
                  error : function() {
                      $("#divAnexos").html('<div class="alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atención!</strong> Ocurrio un error. Verifique los archivo(s).</div>');      
                  }

                  });

                  $("#form-anexos").show('1000');
                  return false;
                }

        });
 
});

</script>