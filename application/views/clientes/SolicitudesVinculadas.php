<link rel="stylesheet" href="<?php echo base_url();?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.js"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12" >
     


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
        <?php foreach ($result4 as $r) {
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
           
            echo '<a href="'.base_url().'index.php/clientes/editarSolicitudes/'.$r->idsolicitud.'" style="margin-right: 1%" class="btn btn-info tip-top" title="Editar solicitud"><i class="icon-pencil icon-white"></i></a>'; 
        
           ?>
         
        </tr>
          <?php } ?> 
    </tbody>
   
       </table>
       <a href="http://localhost:8082/micasita_demo/index.php/clientes" id="" class="btn btn-sucess">Regresar</a>
 
     </div>
</div>







 





