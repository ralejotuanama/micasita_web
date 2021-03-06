<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/dist/excanvas.min.js"></script><![endif]-->

<script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/dist/jquery.jqplot.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/dist/jquery.jqplot.min.css" />

<script type="text/javascript" src="<?php echo base_url();?>js/dist/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/dist/plugins/jqplot.donutRenderer.min.js"></script>

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'vCliente')){ ?>
            <li class="bg_lb"> <a href="<?php echo base_url()?>index.php/clientes"> <i class="icon-group"></i> Clientes</a> </li>
        <?php } ?>
        <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'vProduto')){ ?>
            <li class="bg_lg"> <a href="<?php echo base_url()?>index.php/produtos"> <i class="icon-barcode"></i> Productos</a> </li>
        <?php } ?>
        <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'vServico')){ ?>
            <li class="bg_ly"> <a href="<?php echo base_url()?>index.php/servicos"> <i class="icon-wrench"></i> Servicios</a> </li>
        <?php } ?>
        <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'vOs')){ ?>
            <li class="bg_lo"> <a href="<?php echo base_url()?>index.php/os"> <i class="icon-tags"></i> O.S</a> </li>
        <?php } ?>
        <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'vVenda')){ ?>
            <li class="bg_ls"> <a href="<?php echo base_url()?>index.php/vendas"><i class="icon-shopping-cart"></i> Ventas</a></li>
        <?php } ?>

        
        
        
        
        

      </ul>
    </div>
  </div>  
<!--End-Action boxes-->  



<div class="row-fluid" style="margin-top: 0">
    
    <div class="span12">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Produtos Con Stock Mínimo</h5></div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Producto</th>
                            <th>Precio de Venta</th>
                            <th>Stock</th>
                            <th>Stock Mínimo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if($produtos != null){
                            foreach ($produtos as $p) {
                                echo '<tr>';
                                echo '<td>'.$p->idProdutos.'</td>';
                                echo '<td>'.$p->descricao.'</td>';
                                echo '<td>$ '.$p->precoVenda.'</td>';
                                echo '<td>'.$p->estoque.'</td>';
                                echo '<td>'.$p->estoqueMinimo.'</td>';
                                echo '<td>';
                                if($this->permission->checkPermission($this->session->userdata('permissao'),'eProduto')){
                                    echo '<a href="'.base_url().'index.php/produtos/editar/'.$p->idProdutos.'" class="btn btn-info"> <i class="icon-pencil" ></i> </a>  '; 
                                }
                                echo '</td>';
                                echo '</tr>';
                            }
                        }
                        else{
                            echo '<tr><td colspan="3">Ningún Producto con Stock Bajo.</td></tr>';
                        }    

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<div class="span12" style="margin-left: 0">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Ordenes de servicio sin tecnico asignado</h5></div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#O.S</th>
                            <th>Fecha Inicial</th>
                            <th>Estado</th>
                            <th>Cliente</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if($ordensW != null){
                            foreach ($ordensW as $w) {                              
                                echo '<tr>';
                                echo '<td>'.$w->idOs.'</td>';
                                echo '<td>'.date('d/m/Y' ,strtotime($w->dataInicial)).'</td>';
                                echo '<td>'.$w->status.'</td>';
                                echo '<td>'.$w->nomeCliente.'</td>';
                                echo '<td>';
                                if($this->permission->checkPermission($this->session->userdata('permissao'),'vOs')){
                                    echo '<a href="'.base_url().'index.php/os/visualizar/'.$w->idOs.'" class="btn"> <i class="icon-eye-open" ></i> </a> '; 
                                }
                                echo '</td>';
                                echo '</tr>';
                            }
                        }
                        else{
                            echo '<tr><td colspan="3">Ninguna OS desde la web.</td></tr>';
                        }    

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


    <div class="span12" style="margin-left: 0">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Ordenes de Servcio abiertas</h5></div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#O.S</th>
                            <th>Fecha Inicial</th>
                            <th>Fecha Final</th>
                            <th>Cliente</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if($ordens != null){
                            foreach ($ordens as $o) {
                              $dataFinal = date(('d/m/Y'),strtotime($o->dataFinal));
                                echo '<tr>';
                                echo '<td>'.$o->idOs.'</td>';
                                echo '<td>'.date('d/m/Y' ,strtotime($o->dataInicial)).'</td>';
                                if(($o->status ==  "Finalizado") || ($o->status ==  "Facturado")) {echo '<td>'.$dataFinal.'</td>';}
            elseif($o->status ==  "Cancelado") {echo '<td>O.S. cancelada</td>';}
             else {echo '<td>La orden sigue abierta</td>';}
                                echo '<td>'.$o->nomeCliente.'</td>';
                                echo '<td>';
                                if($this->permission->checkPermission($this->session->userdata('permissao'),'vOs')){
                                    echo '<a href="'.base_url().'index.php/os/visualizar/'.$o->idOs.'" class="btn"> <i class="icon-eye-open" ></i> </a> '; 
                                }
                                echo '</td>';
                                echo '</tr>';
                            }
                        }
                        else{
                            echo '<tr><td colspan="3">Ninguna OS Abierta.</td></tr>';
                        }    

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



<?php if($estatisticas_financeiro != null){ 
      if($estatisticas_financeiro->total_ingreso != null || $estatisticas_financeiro->total_gasto != null || $estatisticas_financeiro->total_ingreso_pendente != null || $estatisticas_financeiro->total_gasto_pendente != null){  ?>
<div class="row-fluid" style="margin-top: 0">

    <div class="span4">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estadísticas Financeiras/Realizado</h5></div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                      <div id="chart-financeiro" style=""></div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>

    <div class="span4">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estadísticas Financeiras/Pendiente</h5></div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                      <div id="chart-financeiro2" style=""></div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>


    <div class="span4">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Total en Caja/Previsto</h5></div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                      <div id="chart-financeiro-caixa" style=""></div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>

</div>
<?php } } ?>

<?php if($os != null){ ?>
<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estadísticas de O.S</h5></div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                      <div id="chart-os" style=""></div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estadísticas del Sistema</h5></div>
            <div class="widget-content">
                <div class="row-fluid">           
                    <div class="span12">
                        <ul class="site-stats">
                            <li class="bg_lh"><i class="icon-group"></i> <strong><?php echo $this->db->count_all('clientes');?></strong> <small>Clientes</small></li>
                            <li class="bg_lh"><i class="icon-barcode"></i> <strong><?php echo $this->db->count_all('produtos');?></strong> <small>Productos </small></li>
                            <li class="bg_lh"><i class="icon-tags"></i> <strong><?php echo $this->db->count_all('os');?></strong> <small>Ordenes de Servicio</small></li>
                            <li class="bg_lh"><i class="icon-wrench"></i> <strong><?php echo $this->db->count_all('servicos');?></strong> <small>Servicios</small></li>
                            
                        </ul>
                 
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>


<?php if($os != null) {?>
<script type="text/javascript">
    
    $(document).ready(function(){
      var data = [
        <?php foreach ($os as $o) {
            echo "['".$o->status."', ".$o->total."],";
        } ?>
       
      ];
      var plot1 = jQuery.jqplot ('chart-os', [data], 
        { 
          seriesDefaults: {
            // Make this a pie chart.
            renderer: jQuery.jqplot.PieRenderer, 
            rendererOptions: {
              // Put data labels on the pie slices.
              // By default, labels show the percentage of the slice.
              showDataLabels: true
            }
          }, 
          legend: { show:true, location: 'e' }
        }
      );

    });
 
</script>

<?php } ?>



<?php if(isset($estatisticas_financeiro) && $estatisticas_financeiro != null) { 
         if($estatisticas_financeiro->total_ingreso != null || $estatisticas_financeiro->total_gasto != null || $estatisticas_financeiro->total_ingreso_pendente != null || $estatisticas_financeiro->total_gasto_pendente != null){
?>
<script type="text/javascript">
    
    $(document).ready(function(){

      var data2 = [['Total Ingresos',<?php echo ($estatisticas_financeiro->total_ingreso != null ) ?  $estatisticas_financeiro->total_ingreso : '0.00'; ?>],['Total Gastos', <?php echo ($estatisticas_financeiro->total_gasto != null ) ?  $estatisticas_financeiro->total_gasto : '0.00'; ?>]];
      var plot2 = jQuery.jqplot ('chart-financeiro', [data2], 
        {  

          seriesColors: [ "#9ACD32", "#FF8C00", "#EAA228", "#579575", "#839557", "#958c12","#953579", "#4b5de4", "#d8b83f", "#ff5800", "#0085cc"],   
          seriesDefaults: {
            // Make this a pie chart.
            renderer: jQuery.jqplot.PieRenderer, 
            rendererOptions: {
              // Put data labels on the pie slices.
              // By default, labels show the percentage of the slice.
              dataLabels: 'value',
              showDataLabels: true
            }
          }, 
          legend: { show:true, location: 'e' }
        }
      );


      var data3 = [['Total Ingresos',<?php echo ($estatisticas_financeiro->total_ingreso_pendente != null ) ?  $estatisticas_financeiro->total_ingreso_pendente : '0.00'; ?>],['Total Gastos', <?php echo ($estatisticas_financeiro->total_gasto_pendente != null ) ?  $estatisticas_financeiro->total_gasto_pendente : '0.00'; ?>]];
      var plot3 = jQuery.jqplot ('chart-financeiro2', [data3], 
        {  

          seriesColors: [ "#90EE90", "#FF0000", "#EAA228", "#579575", "#839557", "#958c12","#953579", "#4b5de4", "#d8b83f", "#ff5800", "#0085cc"],   
          seriesDefaults: {
            // Make this a pie chart.
            renderer: jQuery.jqplot.PieRenderer, 
            rendererOptions: {
              // Put data labels on the pie slices.
              // By default, labels show the percentage of the slice.
              dataLabels: 'value',
              showDataLabels: true
            }
          }, 
          legend: { show:true, location: 'e' }
        }

      );


      var data4 = [['Total en Caja',<?php echo ($estatisticas_financeiro->total_ingreso - $estatisticas_financeiro->total_gasto); ?>],['Total a Entrar', <?php echo ($estatisticas_financeiro->total_ingreso_pendente - $estatisticas_financeiro->total_gasto_pendente); ?>]];
      var plot4 = jQuery.jqplot ('chart-financeiro-caixa', [data4], 
        {  

          seriesColors: ["#839557","#d8b83f", "#d8b83f", "#ff5800", "#0085cc"],   
          seriesDefaults: {
            // Make this a pie chart.
            renderer: jQuery.jqplot.PieRenderer, 
            rendererOptions: {
              // Put data labels on the pie slices.
              // By default, labels show the percentage of the slice.
              dataLabels: 'value',
              showDataLabels: true
            }
          }, 
          legend: { show:true, location: 'e' }
        }

      );


    });
 
</script>

<?php } } ?>