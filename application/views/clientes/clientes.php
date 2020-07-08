<?php if($this->permission->checkPermission($this->session->userdata('permissao'),'aCliente')){ ?>
   <!-- <a href="<?php echo base_url();?>index.php/clientes/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar Cliente</a>   --> 
<?php } ?>



<div class="widget-box">
                    <div class="widget-title">
                       <span class="icon">
                           <i class="icon-user"></i>
                        </span>
                      <h5>Clientes</h5>
                    </div>

    <div class="widget-content nopadding">
                     
<table class="table table-bordered ">
<thead>
                                       <tr>
                                          <th>#</th>
                                         <!-- <th>Descripcion</th>-->
                                           <th>Estado de Solicitud</th> 
                                           <th>Fecha Inicio Vigencia</th>
                                          <th>Fecha Fin Vigencia</th>
                                          <th>Dias Pendientes para fin de Vigencia</th>
                                           <th>Acciones</th> 
          
                                        </tr>
                                </thead>
                                <tbody>
        <?php foreach ($results3 as $r) {
           $res = (($r->estadolinea == '0') || ($r->estadolinea == 'NULL')) ? 'pendiente' : 'aprobado' ;
           $fe = date("d-m-Y");
           $fe1 =  date('d-m-Y');

           $dias = (strtotime($r->fechafin)-strtotime($fe1))/86400;
           $dias = abs($dias); $dias = floor($dias);


           $val1 = ($r->fechainicio == '0000-00-00' ) ? '' : $r->fechainicio ;
           $val2 = ($r->fechafin == '0000-00-00' ) ? '' : $r->fechafin ;
           $val3 = ($dias > '5000' ) ? '0' : $dias ;

            echo '<tr>';
            echo '<td style=text-align:center;>'.$r->idlinea.'</td>';
           /* echo '<td style=text-align:center;>'.$r->nombre.'</td>';*/
            echo '<td style=text-align:center;>'. $res .'</td>';
            echo '<td style=text-align:center;>'.$val1.'</td>';
            echo '<td style=text-align:center;>'.$val2.'</td>' ; 
            echo '<td style=text-align:center;>'.$val3.'</td>' ; 
           echo '<td style=text-align:center;>';
           /* if($this->permission->checkPermission($this->session->userdata('permissao'),'vCliente')){*/
                echo '<a href="'.base_url().'index.php/clientes/visualizarLineas/'.$r->idlinea.'" style="margin-right: 1%" class="btn tip-top" title="Ver mas detalles"><i class="icon-eye-open"></i></a>'; 
           /* }*/
   /* if($this->permission->checkPermission($this->session->userdata('permissao'),'eCliente')){*/
                echo '<a href="'.base_url().'index.php/clientes/editarLineas/'.$r->idlinea.'" style="margin-right: 1%" class="btn btn-info tip-top" title="Editar Linea"><i class="icon-pencil icon-white"></i></a>';
                echo '<a href="'.base_url().'index.php/clientes/SolicitudesVinculadas/'.$r->idClientes.'" style="margin-right: 1%" class="btn btn-success tip-top" title="Editar solicitud"><i class="icon-eye-open"></i></a>';  

                
          /*  }*/
           ?>
         
        </tr>
          <?php } ?> 
    </tbody>
</table>
</div>
</div>
<?php  echo $this->pagination->create_links(); ?>



 
    <!-- Modal -->
   <div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <form action="<?php echo base_url() ?>index.php/clientes/excluir" method="post" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h5 id="myModalLabel">Eliminar Cliente</h5>
         </div>
          <div class="modal-body">
           <input type="hidden" id="idCliente" name="id" value="" />
          <h5 style="text-align: center">¿Realmente deseas eliminar este cliente y los datos asociados con él ?</h5>
         </div>
         <div class="modal-footer">
               <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
               <button class="btn btn-danger">Eliminar</button>
         </div>
      </form>
   </div>





             




        





