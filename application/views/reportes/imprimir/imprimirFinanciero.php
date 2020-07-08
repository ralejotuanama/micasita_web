  <head>
    <title>MAP OS </title>
    <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/fullcalendar.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/blue.css" class="skin-color" />
    <script type="text/javascript"  src="<?php echo base_url();?>js/jquery-1.10.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
 
  <body style="background-color: transparent">



      <div class="container-fluid">
    
          <div class="row-fluid">
              <div class="span12">

                  <div class="widget-box">
                      <div class="widget-title">
                          <h4 style="text-align: center">Informe Financiero</h4>
                      </div>
                      <div class="widget-content nopadding">

                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th style="font-size: 1.2em; padding: 5px;">Cliente/Proveedor/Empresa</th>
                              <th style="font-size: 1.2em; padding: 5px;">Tipo</th>
                              <th style="font-size: 1.2em; padding: 5px;">Valor</th>
                              <th style="font-size: 1.2em; padding: 5px;">Vencimiento</th>
                              <th style="font-size: 1.2em; padding: 5px;">Pagado</th>
                              <th style="font-size: 1.2em; padding: 5px;">Forma de Pago</th>
                              <th style="font-size: 1.2em; padding: 5px;">Situación</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          $totalingreso = 0;
                          $totalgasto = 0;
                          $saldo = 0;
                          foreach ($lancamentos as $l) {
                              $vencimento = date('d/m/Y', strtotime($l->data_vencimento));
                              $pagamento = date('d/m/Y', strtotime($l->data_pagamento));
                              if($l->baixado == 1){$situacao = 'Pago';}else{ $situacao = 'Pendente';}
                              if($l->tipo == 'ingreso'){ $totalingreso += $l->valor;} else{ $totalgasto += $l->valor;}
                              echo '<tr>';
                              echo '<td>' . $l->cliente_fornecedor . '</td>';
                              echo '<td>' . $l->tipo . '</td>';
                              echo '<td>' . $l->valor . '</td>';
                              echo '<td>' . $vencimento. '</td>';
                              echo '<td>' . $pagamento. '</td>';
                              echo '<td>' . $l->forma_pgto . '</td>';
                              echo '<td>' . $situacao. '</td>';
                              echo '</tr>';
                          }
                          ?>
                      </tbody>
                       <tfoot>
                          <tr>
                            <td colspan="5" style="text-align: right; color: green"> <strong>Total Ingresos:</strong></td>
                            <td colspan="2" style="text-align: left; color: green"><strong>€ <?php echo number_format($totalingreso,2,',','.') ?></strong></td>
                          </tr>
                          <tr>
                            <td colspan="5" style="text-align: right; color: red"> <strong>Total Gastos:</strong></td>
                            <td colspan="2" style="text-align: left; color: red"><strong>€ <?php echo number_format($totalgasto,2,',','.') ?></strong></td>
                          </tr>
                          <tr>
                            <td colspan="5" style="text-align: right"> <strong>Saldo:</strong></td>
                            <td colspan="2" style="text-align: left;"><strong>€ <?php echo number_format($totalingreso - $totalgasto,2,',','.') ?></strong></td>
                          </tr>
                        </tfoot>
                  </table>
                  
                  </div>
                   
              </div>
                  <h5 style="text-align: right">Fecha del informe: <?php echo date('d/m/Y');?></h5>

          </div>
     


      </div>
</div>




            <!-- Arquivos js-->

            <script src="<?php echo base_url();?>js/excanvas.min.js"></script>
            <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
            <script src="<?php echo base_url();?>js/sosmc.js"></script>
            <script src="<?php echo base_url();?>js/dashboard.js"></script>
  </body>
</html>








