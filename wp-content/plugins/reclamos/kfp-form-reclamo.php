<?php
/**
* Plugin Name: KFP Reclamos
*/

// Cuando el plugin se active se crea la tabla para recoger los datos si no existe

register_activation_hook(__FILE__, 'Kfp_reclamos_init');
 
/**
 * Crea la tabla para recoger los datos del formulario
 *
 * @return void
 */
function Kfp_reclamos_init() 
{
    global $wpdb; // Este objeto global permite acceder a la base de datos de WP
    // Crea la tabla  si no existe
    // Utiliza el mismo prefijo del resto de tablas
    $tabla_reclamos = $wpdb->prefix . 'reclamo';
    // Utiliza el mismo tipo de orden de la base de datos
    $charset_collate = $wpdb->get_charset_collate();
    // Prepara la consulta
    $query = "CREATE TABLE IF NOT EXISTS $tabla_reclamos (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        dni varchar(20) NOT NULL,
        nombre varchar(200) NOT NULL,
        telefono varchar(50) NOT NULL,
        correo varchar(100) NOT NULL,
        amabilidad smallint(4) NOT NULL,
        atencion smallint(4) NOT NULL,
        capacidad smallint(4) NOT NULL,
        respuestas smallint(4) NOT NULL,
        calidad smallint(4) NOT NULL,
        tiempo text NOT NULL,
        created_at datetime NOT NULL,
        UNIQUE (id)
        ) $charset_collate;";
        // La funcion dbDelta permite crear tablas de manera segura se
        // define en el archivo upgrade.php que se incluye a continuacion
        include_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($query); // Lanza la consulta para crear la tabla de manera segura
}

// Define el shortcode y lo asocia a una funcion
add_shortcode('kfp_reclamo_form', 'Kfp_Reclamo_form');
 
/** 
 * Define la función que ejecutará el shortcode
 * De momento sólo pinta un formulario que no hace nada
 * 
 * @return string
 */

                               function Kfp_Reclamo_form() 
                         {
    

                                          // Esta función de PHP activa el almacenamiento en búfer de salida (output buffer)
                                         // Cuando termine el formulario lo imprime con la función ob_get_clean

                                          global $wpdb; // Este objeto global permite acceder a la base de datos de WP
                                         // Si viene del formulario  graba en la base de datos

                                           if (($_POST['dni'] != '' && isset($_POST['dni']))
                                                   AND ($_POST['nombre1'] != '' && isset($_POST['nombre1']))
                                                    AND   ($_POST['telefono'] != '' && isset($_POST['telefono']))   
                                                                                        ) {
                                                    $tabla_reclamos = $wpdb->prefix . 'reclamo'; 
       
                                                   $primermax = 0;

                                              $dni = $_POST["dni"];
                                              $codigo = date('Ymd')."-".$_POST["dni"];
                                              $nombre = $_POST["nombre1"];
                                               $direccion = $_POST["direccion"];
                                              $departamento = $_POST["departamento"];
                                              $provincia = $_POST["provincia"];
                                              $distrito = $_POST["distrito"];
                                              $telefono = $_POST["telefono"];
                                              $correo = $_POST["correo"];
                                              $celular = $_POST["celular"];
                                              $selected = $_POST["respuesta"];
                                              $productos = $_POST["productos"];
                                              $selected2 = $_POST["tiporeclamo"];
                                              $detalle = $_POST["detalle"];      //detalle
                                              $created_at = date('Y-m-d H:i:s');  //fecha creacion registro
                                              $limiteedad = "SI";
                                              $tipodoc = $_POST["tipodoc"];
                                              $apellido1 = $_POST["apellido1"];
                                              $apellido2 = $_POST["apellido2"];
                                              $representa = $_POST["representa"];
                                              $operador = "demo";
                                              $referencia = $_POST["referencia"];
                                              $motivo = $_POST["motivo"];
                                              $rucempresa = $_POST["rucempresa"];
                                              $nombreempresa = $_POST["nombreempresa"];
                                              $montoreclamado = $_POST["montoreclamado"];


                                               //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	                                       $mysqli1 = new mysqli("localhost","root","4NRmXxwYGVUikWgL","RC*29#B@hrx^!5RE"); 
		                               if(mysqli_connect_errno()){
		                                    echo 'Conexion Fallida : ', mysqli_connect_error();
		                                exit();
	                                         }
                                               $mysqli2 = new mysqli("localhost","root","4NRmXxwYGVUikWgL","RC*29#B@hrx^!5RE"); 
		                               if(mysqli_connect_errno()){
		                                    echo 'Conexion Fallida : ', mysqli_connect_error();
		                                exit();
	                                         }
                                               $mysqli3 = new mysqli("localhost","root","4NRmXxwYGVUikWgL","RC*29#B@hrx^!5RE"); 
		                               if(mysqli_connect_errno()){
		                                    echo 'Conexion Fallida : ', mysqli_connect_error();
		                                exit();
	                                         }

                                               $sql1 = "select departamento from ubdepartamento where idDepa = " . $departamento ."";
                                               $resultado1 = $mysqli1->query($sql1);   
                                               $actor1 = $resultado1->fetch_assoc();
                                               $nombredepartamento = $actor1["departamento"];    
                                               $resultado1->free();
                                               $mysqli1->close();     

                                               $sql2 = "select provincia from ubprovincia where idProv = " . $provincia ."";
                                               $resultado2 = $mysqli2->query($sql2);   
                                               $actor2 = $resultado2->fetch_assoc();
                                               $nombreprovincia = $actor2["provincia"];    
                                               $resultado2->free();
                                               $mysqli2->close();

                                               $sql3 = "select distrito from ubdistrito where idDist = " . $distrito ."";
                                               $resultado3 = $mysqli3->query($sql3);   
                                               $actor3 = $resultado3->fetch_assoc();
                                               $nombredistrito = $actor3["distrito"];    
                                               $resultado3->free();
                                               $mysqli3->close();

                                                                                                         
                                               $wpdb->insert(
                                               $tabla_reclamos,
                                               array(
                                               'dni' => $dni,
                                               'codigo' => $codigo,
                                               'nombre' => $nombre,
                                               'direccion' => $direccion,
                                               'departamento' => $departamento,
                                               'provincia' => $provincia,
                                               'distrito' => $distrito,
                                               'telefono' => $telefono,
                                                'correo' => $correo,
                                                'celular' => $celular,
                                                'respuesta' => $selected,
                                                'productos' => $productos,
                                                'tiporeclamo' => $selected2,
                                                'detalle' => $detalle,
                                                'created_at' => $created_at,
                                                 'nombre1' => $nombre,
                                                'limiteedad' => $limiteedad,
                                                'tipodoc' => $tipodoc,
                                               'apellido1' => $apellido1,
                                                'apellido2' => $apellido2,
                                                'representa' => $representa,
                                                'operador' => $operador,
                                                'referencia' => $referencia,
                                                'motivo' => $motivo, 
                                                'rucempresa' => $rucempresa,
                                                'nombreempresa' => $nombreempresa,
                                                'montoreclamado' => $montoreclamado    
                                                     )
                                                 );

                                                 $primermax = $wpdb->get_var( "SELECT MAX(id) AS id FROM wp_reclamo");  //ultimo ingresado
      
      
                                                 if($primermax < 10){
                                                        $cod = date('Ymd')."-00000".$primermax ;
                                                 }else{
                                                       if($primermax < 100){
                                                            $cod = date('Ymd')."-0000".$primermax;
                                                           }else{
                                                                 if($primermax < 1000){
                                                                         $cod = date('Ymd')."-000".$primermax;
                                                                     }
                                                                } 
                                                     }

                                                 $wpdb->update(
                                                      $tabla_reclamos,
                                                            array(          
                                                                  'dni' => $dni,
                                                                  'codigo' => $cod,
                                                                  'nombre' => $nombre,
                                                                  'direccion' => $direccion,
                                                                  'departamento' => $departamento,
                                                                  'provincia' => $provincia,
                                                                  'distrito' => $distrito,
                                                                  'telefono' => $telefono,
                                                                   'correo' => $correo,
                                                                  'celular' => $celular,
                                                                  'respuesta' => $selected,
                                                                  'productos' => $productos,
                                                                  'tiporeclamo' => $selected2,
                                                                  'detalle' => $detalle,
                                                                  'created_at' => $created_at,
                                                                  'nombre1' => $nombre,
                                                                  'limiteedad' => $limiteedad,
                                                                    'tipodoc' => $tipodoc,
                                                                  'apellido1' => $apellido1,
                                                                  'apellido2' => $apellido2,
                                                                  'representa' => $representa,
                                                                  'operador' => $operador,
                                                                  'referencia' => $referencia,
                                                                  'motivo' => $motivo,
                                                                  'rucempresa' => $rucempresa,
                                                                  'nombreempresa' => $nombreempresa,
                                                                  'montoreclamado' => $montoreclamado
                                                                  ),
                                                                 array('id' => $primermax)
                                                                );


           
                   $recipient = "atencionalusuario@micasita.com.pe,".$correo; 

                   $typeFile = $_FILES["archivo"]["type"];
                   $nameFile = $_FILES["archivo"]["name"];
                   $tmp =      $_FILES["archivo"]["tmp_name"];  

                   $typeFile2 = $_FILES["archivo2"]["type"];
                   $nameFile2 = $_FILES["archivo2"]["name"];
                   $tmp2 =      $_FILES["archivo2"]["tmp_name"];  

                   $typeFile3 = $_FILES["archivo3"]["type"];
                   $nameFile3 = $_FILES["archivo3"]["name"];
                   $tmp3 =      $_FILES["archivo3"]["tmp_name"]; 

                  //Asunto del email
                  $subject = 'Pagina Web - Reclamos Requerimientos';
 
                  //La dirección de envio del email es la de nuestro blog por lo que agregando este header podremos responder al remitente original
                   $variable = "reclamos";
                   $headers = "From:" . $variable ." <".$correo.">\r\n" .
                            "Reply-To:". $nombre ." ".$apellido1 ." ".$apellido2 ." <" . $correo .  ">\r\n" ;
                   $headers .= "MIME-Version: 1.0\r\n";
                   $headers .= "Content-Type: multipart/mixed; boundary=\"=C=T=E=C=\"\r\n\r\n";


                  //Montamos el cuerpo de nuestro e-mail

                    $message .= "<h3>DATOS</h3>\r\n<table border = 1><tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>CÓDIGO</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $cod."</strong></td>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>DNI:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $dni."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>NOMBRE Y APELLIDOS:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $nombre." ".$apellido1." ".$apellido2."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>DEPARTAMENTO:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $nombredepartamento."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>PROVINCIA:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $nombreprovincia."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>DISTRITO:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $nombredistrito."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>DIRECCIÓN:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". htmlentities($direccion)."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>CORREO:</trong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $correo."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>TELÉFONO1:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $telefono."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>TELÉFONO2:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $celular."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>DESEO RECIBIR RESPUESTA POR:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $selected."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>PRODUCTOS:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $productos ."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>MOTIVO:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". htmlentities($motivo) ."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>TIPO RECLAMO:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $selected2."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>MONTO RECLAMADO:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". number_format($montoreclamado). "</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>DETALLE:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". htmlentities($detalle)."</strong></td></tr>\r\n";
                    $message .= "<tr><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>ADJUNTOS:</strong></td><td style=background:#4CAF50;color:white;font-family:Helvetica><strong>". $nameFile ."<br>".$nameFile2."<br>".$nameFile3."<br></strong></td></tr></table>\r\n";
                    $message .= "<p>Acepto las condiciones de tratamiento de datos personales.</p>\r\n";

                    $string_att_array = array();
                      if (isset($nameFile) & !empty($nameFile)) {
                         $str_att1 = array();
	                 $str_att1[0] =  file_get_contents($tmp);
	                 $str_att1[1] =  $nameFile;
	                 $str_att1[2] =  "base64";
	                 $str_att1[3] =  "application/octet-stream";
                         array_push ( $string_att_array , $str_att1 );
                       }

                      if (isset($nameFile2) & !empty($nameFile2)) {
                         $str_att2 = array();
	                 $str_att2[0] =  file_get_contents($tmp2);
	                 $str_att2[1] =  $nameFile2;
	                 $str_att2[2] =  "base64";
	                 $str_att2[3] =  "application/octet-stream";
                         array_push ( $string_att_array , $str_att2 );
                       }

                      if (isset($nameFile3) & !empty($nameFile3)) {
                         $str_att3 = array();
	                 $str_att3[0] =  file_get_contents($tmp3);
	                 $str_att3[1] =  $nameFile3;
	                 $str_att3[2] =  "base64";
	                 $str_att3[3] =  "application/octet-stream";
                         array_push ( $string_att_array , $str_att3 );
                       }

                      function set_html_content_type() {
                         return 'text/html';
                       }

                        add_filter('wp_mail_content_type','set_html_content_type');

                       //Por último enviamos el email
                       $envio = wp_mail2($recipient, $subject, $message, $headers, $string_att_array,$string_att_array);
                       remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

                       if ($envio) {
                         ?>
                                <div class="alert alert-success alert-dismissable" id="bot2">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" id="bot">&times;</button>
                                        El formulario ha sido enviado correctamente, su codigo de reclamo es: <?php echo $cod;  ?>.
                                        <?php   unset($dni  ,$codigo,$nombre,$direccion, $departamento,$provincia,$distrito, $telefono, $correo,$celular,$productos,$selected2,
                                          $detalle, $created_at, $limiteedad, $tipodoc,$apellido1,$apellido2,$operador, $referencia, $motivo,$nombreempresa ,$montoreclamado)  ?>
                                </div>
                          <?php }else {?>
                                 <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" id="bot" onclick="ocultar()">&times;</button>
                                        Se ha producido un error enviando el formulario. Puede intentarlo más tarde o ponerse en contacto con nosotros
                                         escribiendo un mail a "destinatario@email.com"
                                 </div>
                                <?php }
                          }
                       ob_start();
                     ?>
       
        <div class="container" >
           <div class="row">
             <div class="col-xs-12" style="border:2px solid #00ab69;">

               <form action="<?php get_the_permalink(); ?>" method="post" id="form_encuesta
                     class="cuestionario""    enctype="multipart/form-data">
                    <br>

                   <h2 style="text-align:center;">FORMULARIO DE ATENCI&Oacute;N DE RECLAMOS</h2>
                   <h2 style="text-align:center;">SISTEMA FINACIERO</h2>
                  
                   <p style="border-bottom:2px solid;"><strong>DATOS PERSONALES:</strong></p>
                   <br>
                  <!-- <p>Es menor de edad ? </p>

                   <div class="row"> 
                       <div class="col-xs-6">
                           <div class="custom-control custom-radio custom-control-inline">
                               <input type="radio" id="customRadioInlinelimiteedad1" name="limiteedad" class="custom-control-input" value="SI" required="required" checked>
                               <label class="custom-control-label" for="customRadioInlinemayor1">SI</label>
                           </div>
                       </div>

                       <div class="col-xs-6">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInlinelimiteedad2" name="limiteedad" class="custom-control-input" value="NO" required="required" >
                                <label class="custom-control-label" for="customRadioInlinemayor2">NO</label>
                            </div>
                        </div>

                    </div>
     
                      <br>
                      <br>-->

                     <div class="row"> 
                       <div class="col-xs-4">

                         <p><strong>Tipo de documento:</strong>(requerido)</p>

                          <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInlinetipodoc1" name="tipodoc" class="custom-control-input" value="DNI" required="required" checked >
                                <label class="custom-control-label" for="customRadioInlinetipodoc1" style="font-size:14px;">DNI</label>
                            </div>
                            
                           <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInlinetipodoc2" name="tipodoc" class="custom-control-input" value="PASAPORTE" required="required" >
                                <label class="custom-control-label" for="customRadioInlinetipodoc2" style="font-size:14px;">PASAPORTE</label>
                            </div>

                             <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInlinetipodoc3" name="tipodoc" class="custom-control-input" value="CE" required="required" >
                                <label class="custom-control-label" for="customRadioInlinetipodoc3" style="font-size:14px;">CE</label>
                            </div>

                             <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInlinetipodoc4" name="tipodoc" class="custom-control-input" value="OTROS" required="required" >
                                <label class="custom-control-label" for="customRadioInlinetipodoc4" style="font-size:14px;">OTROS</label>
                            </div>
                       </div>


                       <div class="col-xs-4">
                         <p><strong>Nro de Documento:</strong>(requerido)</p>
                              <input type="text" name="dni" id="dni" required   maxlength="12"  onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
                       </div>
                       </div>
                        <br>
                        <br>
                      <div class="row">
                          <div class = "col-xs-4">
                               <div class="form-input">
                                   <label for="nombre1"><strong>Nombres:</strong>(requerido)</label>
                                   <input type="text" name="nombre1" id="nombre1" required onkeypress="return soloLetras(event)">
                               </div>
                         </div>

                          <div class = "col-xs-4">
                              <div class="form-input">
                                   <label for="apellido1"><strong>Primer Apellido:</strong>(requerido)</label>
                                   <input type="text" name="apellido1" id="apellido1" required onkeypress="return soloLetras(event)">
                               </div>
                          </div>

                          <div class = "col-xs-4">
                               <div class="form-input">
                                 <label for="apellido2"><strong>Segundo Apellido:</strong>(requerido)</label>
                                 <input type="text" name="apellido2" id="apellido2" required onkeypress="return soloLetras(event)">
                               </div>
                          </div>

                      </div>
                      <br><br>

                      <div class="row">
                          <div class = "col-xs-4">
                               <div class="form-input">
                                   <label for="correo"><strong>E-mail:</strong>(requerido)</label>
                                   <input type="text" name="correo" id="correo" required >
                               </div>
                         </div>

                          <div class = "col-xs-4">
                              <div class="form-input">
                                   <label for="telefono"><strong>Tel&eacute;fono1:</strong>(requerido)</label>
                                   <input type="text" name="telefono" id="telefono" required onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" >
                               </div>
                          </div>

                          <div class = "col-xs-4">
                               <div class="form-input">
                                 <label for="celular"><strong>Tel&eacute;fono2:</strong>(opcional)</label>
                                 <input type="text" name="celular" id="celular"   onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;" >
                               </div>
                          </div>
                          <!--<div class = "col-xs-3">
                               <div class="form-input">
                                 <label for="operador"><strong>Operador:</strong>(requerido)</label>
                                 <input type="text" name="operador" id="operador" required onkeypress="return soloLetras(event)">
                               </div>
                          </div>-->


                      </div>



                        <br>
                        <br>

                       <div class="row">
                              <div class = "col-xs-6">
                                   <div class="form-input">
                                       <label for="direccion"><strong>Direcci&oacute;n:</strong>(requerido)</label>
                                       <input type="text" name="direccion" id="direccion" required >
                                   </div>
                             </div>

                             <div class = "col-xs-6">
                                  <div class="form-input">
                                      <label for="referencia"><strong>Referencia:</strong>(opcional)</label>
                                      <input type="text" name="referencia" id="referencia">
                                  </div>
                             </div>
                         </div>



                     <br><br>

                           <div class="row">
                             <div class = "col-xs-4">
                                   <div class="form-input">

                                         <?php
                                             //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	                                       $mysqli = new mysqli("localhost","root","4NRmXxwYGVUikWgL","RC*29#B@hrx^!5RE"); 
		                               if(mysqli_connect_errno()){
		                                    echo 'Conexion Fallida : ', mysqli_connect_error();
		                                exit();
	                                         }

                                               $query = "SELECT idDepa, departamento FROM ubdepartamento";
	                                       $resultado=$mysqli->query($query);

                                               ?>
                                             <label for="departamento"><strong>Departamento:</strong>(requerido)</label>
                                              <select name="departamento" id="departamento" class="departamento form-control" style="font-size:13px;">
				                <option value="0">Seleccionar departamento</option>
				                 <?php while($row = $resultado->fetch_assoc()) { ?>
					        <option value="<?php echo $row['idDepa']; ?>"><?php echo $row['departamento']; ?></option>
				                  <?php } ?>
			               </select>                                         

                                   </div>
                             </div>
                         
                             <div class = "col-xs-4">
                                  <div class="form-input">
                                      <label for="provincia"><strong>Provincia:</strong>(requerido)</label><br>
                                       <select name="provincia" id="provincia" class="provincia form-control"  style="font-size:13px;"></select>
                                  </div>
                             </div>
                             <div class = "col-xs-4">
                                  <div class="form-input">
                                      <label for="distrito"><strong>Distrito:</strong>(requerido)</label><br>
                                       <select class="form-control" style="font-size:13px;" name="distrito" id="distrito"></select>                                    
                                  </div>
                             </div>

                         </div>



                            <!--<div class="form-input">
                                       <label for="producto"><strong>Producto/Servicio:</strong>(requerido)</label>
                                        <select class="form-control" style="font-size:13px;" name="productos" id="productos">
                                               <option>Prestamo Mivivienda</option>
                                               <option>Prestamo Techo Propio</option>
                                               <option>Prestamo miCasita</option>
                                               <option>Afianzamiento</option>
                                               <option>Atenci&oacute;n al p&uacute;blico</option>
                                               <option>Seguro de desgravamen</option>
                                               <option>Seguro de inmueble</option>
                                               <option>Otros</option>
                                         </select>
                                    </div>-->


                        <br><br>
         
                           
                          <p><strong>Representa a una empresa ?</strong> </p>
                         <div class="row">
                              
                               <div class="col-xs-6">
                                     <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInlinerepre1" name="representa" class="custom-control-input" value="SI" required="required" checked>
                                        <label class="custom-control-label" for="customRadioInlinerepre1">SI</label>
                                     </div>
                               </div>

                               <div class="col-xs-6">           
                                    <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="customRadioInlinerepre2" name="representa" class="custom-control-input" value="NO" required="required" >
                                       <label class="custom-control-label" for="customRadioInlinerepre2">NO</label>
                                   </div>
                               </div>

                         </div>  

                         <br>


                          <div class="row" id="ventana" style="border:2px solid #00ab69 ;">
                                <div class="col-xs-4">

                                       <br>
                                        <div class="form-input">
                                           <label for="rucempresa"><strong>RUC:</strong>(requerido)</label>
                                           <input type="text" name="rucempresa" id="rucempresa" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
                                        </div>


                                </div>
                                <div class="col-xs-8">
                                        <br>
                                         <div class="form-input">
                                           <label for="nombreempresa"><strong>Nombre:</strong>(requerido)</label>
                                           <input type="text" name="nombreempresa" id="nombreempresa">
                                        </div>

                                <br> <br>

                                </div>
                               

      
                          </div>

                          <br>
                          <p><strong>Donde le enviamos la carta de respuesta?</strong></p>
                          <br>



                         <div class="row"> 
                       <div class="col-xs-6">
                           <div class="custom-control custom-radio custom-control-inline">
                               <input type="radio" id="customRadioInlinecartarpta1" name="respuesta" class="custom-control-input" value="e-mail" required="required" checked>
                               <label class="custom-control-label" for="customRadioInlinecartarpta1" style="font-size:14px;">E-mail</label>
                           </div>
                       </div>

                       <div class="col-xs-6">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInlinecartarpta2" name="respuesta" class="custom-control-input" value="carta en su direccion de contacto" required="required" >
                                <label class="custom-control-label" for="customRadioInlinecartarpta2" style="font-size:14px;">Carta en su direccion de contacto</label>
                            </div>
                        </div>

                    </div>
                        <!-- <p style="border-bottom:2px solid;"><strong>DATOS DEL CONTACTO:</strong></p>
                           <br> 
                           <br>-->

                         


                          <br>

                         <p style="border-bottom:2px solid;"><strong>DETALLES DEL RECLAMO:</strong></p>
                          <br>



                         <div class="row">
                              <div class = "col-xs-4">
                                   <div class="form-input">
                                       <label for="producto"><strong>Producto/Servicio:</strong>(requerido)</label>
                                        <select class="form-control" style="font-size:13px;" name="productos" id="productos">
                                               <option>Credito Mivivienda</option>
                                               <option>Credito Techo Propio</option>
                                               <option>Credito miCasita</option>
                                               <option>Adenda de Garantia AVN</option>
                                               <option>Carta Fianza</option>
                                               <option>Atencion al publico</option>
                                               <option>Seguro de desgravamen</option>
                                               <option>Seguro de inmueble</option>
                                               <option>Otros</option>
                                         </select>
                                    </div>
                             </div>

                             <div class = "col-xs-4">
                                  <div class="form-input">
                                      <label for="motivo"><strong>Motivo:</strong>(requerido)</label>
                                      <select class="form-control" style="font-size:13px;" name="motivo" id="motivo">
                                               <option>Resolucion del contrato de credito</option>
                                               <option>Cobro indebido de intereses y/o comisiones</option>
                                               <option>Operacion no procesada o mal realizada</option>
                                               <option>Dudas en el cronograma</option>
                                               <option>Solicitud de duplicado de Estado de Cuenta</option>
                                               <option>Confirmacion o detalle de operaciones</option>
                                               <option>Traslado de Credito a otra entidad financiera</option>
                                               <option>Trato inadecuado y mala atencion</option>
                                               <option>Otros</option>
                                         </select>
                                  </div>
                             </div>
                               <div class = "col-xs-4">
                                  <div class="form-input">
                                      <label for="tipo" class="label"><strong>Solicitud o Reclamo:</strong>(requerido)<span class="tooltiptext">RECLAMO:
                                       Disconformidad <br>sobre una operacion,<br> producto o servicio recibido.<br><br>REQUERIMIENTO:<br>Es una 
                                       peticion del cliente.</span>
                                      </label> 
                                     
                                         <select class="form-control" style="font-size:13px;" name="tiporeclamo" id="tiporeclamo" readonly >
                                               <option  value="Reclamo">Reclamo</option>
                                               <option  value="Requerimiento">Requerimiento</option>                                                  
                                         </select>
                                  </div>
                             </div>

                         </div>

                         <br>

                         
                        <div class="row">
                            <div class = "col-xs-4">
                                  <div class="form-input">
                                      <label for="montoreclamado"><strong>Monto Reclamado:</strong>(opcional)</label>
                                      <input type="text" name="montoreclamado" id="montoreclamado"   onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
                                  </div>
                             </div>
                        </div>
                         <br>

                         <p>Para analizar su reclamo, detalle fechas e importes de las operaciones reclamadas, nombre del comercio entre otros.
                            Tambi&eacute;n indique el n&uacute;mero de seguro, cuenta afectada u otro dato importante. Finalmente, indicar el pedido concreto.</p>

                                   
                             <br>
                            <div class="row">
                                <div class="col-xs-12">
                                 <div class="form-input">
                                        <label for="detalle"><strong>Detalle del Reclamo:</strong></label><br>
                                              <textarea rows="6" cols="154" name="detalle" id="detalle">
                                              </textarea>
                                 </div>
                                </div>
                            </div>

                            <br>
                            <p><strong>Documentos que se adjunta:</strong><br>
                          <p>Puede adjuntar vouchers, estado de cuenta, im&aacute;genes u otros documentos para sustentar su reclamo.</p>
                 
                               <!--<input type="file" name="archivo" id="archivo" multiple="true" /><br><br> 
                               <input type="file" name="archivo2" id="archivo2" multiple="true" /><br><br>
                               <input type="file" name="archivo3" id="archivo3" multiple="true" /> <br><br>-->


                            <div class="container">
                             <div class="row">
                                <div class="input-file-container">  
                                  <input class="input-file" id="archivo" name="archivo" type="file">
                                  <label tabindex="0" for="my-file" class="input-file-trigger" style="padding: 8px 10px;">Selecciona un archivo...</label>
                                </div>
                                <p class="file-return"></p>
                             </div>
                                 
                             <div class="row">
                                <div class="input-file-container2">  
                                  <input class="input-file2" id="archivo2" name="archivo2" type="file">
                                  <label tabindex="0" for="my-file" class="input-file-trigger2"  style="padding: 8px 10px;">Selecciona un archivo...</label>
                                </div>
                                <p class="file-return2"></p>
                             </div>
                               
                             <div class="row">  
                                 <div class="input-file-container3">  
                                  <input class="input-file3" id="archivo3" name="archivo3" type="file">
                                  <label tabindex="0" for="my-file" class="input-file-trigger3"  style="padding: 8px 10px;">Selecciona un archivo...</label>
                                  </div>
                                <p class="file-return3"></p>
                             </div>
                            </div>



         
                               <br>

                           <p>Si ha excedido la capacidad de los documentos para adjuntar puede enviarlos a trav&eacute;s del 
                                 buz&oacute;n: <strong>atencionalusuario@micasita.com.pe</strong> indicando en el asunto el numero de su reclamo o solicitud, 
                                  el cual obtendr&aacute; al enviar el formulario.</p>

                            <p>Le informamos que los datos personales que proporcione ser&aacute;n tratados conforme a la ley Nro 29733 y su reglamento.
                            Si desea conocer m&aacute;s sobre la ley de Protecci&oacute;n de datos personales 
                            ingrese <a href="https://www.minjus.gob.pe/registro-proteccion-datos-personales/" target="_blank">Aqu&iacute;.</a></p>

                           <input type="checkbox" name="condiciones" value="condiciones" required>He le&iacute;do y acepto las condiciones de
                            <a href="http://www.micasita.com.pe/Descargas/Reclamos/TRATAMIENTO%20DE%20DATOS%20PERSONALES.pdf" target="_blank">tratamiento de mis datos personales.</a>
                             
                            <br><br>
 
                            <div class="row">
                              <div class="col-xs-4"></div>
                              <div class="col-xs-4">

                                        <div class = "g-recaptcha" data-sitekey ="6LePQMgUAAAAAPM1gwc-J6ZlH4Piv-iHeBOOI_Er">
                                        </div> 

                              </div>
                              <div class="col-xs-4"></div>
                            </div>
                            

                          <br>
                          <div class="row">
                                 <div class="col-xs-4"></div>
                                 <div class="col-xs-4" style="text-align:center;" >
                                    <div class="form-input">
                                         <input type="submit" value="Enviar" id="boton3" name="boton3" style="background:#00AB69; color:#fff;padding:10px 25px;">
                                    </div>
                                  </div>
                                 <div class="col-xs-4"></div>
                          </div>
                          <br>
                          <p>Si no encuentra en esta pagina, el motivo de su reclamo o solicitud, agradeceremos contactarse al 221 8899 o acercarse a 
                           nuestra oficina a nivel nacional.</p>
        
                         <link rel="stylesheet" type="text/css" href="http://www.micasita.com.pe/wp-content/themes/micasita/css/bootstrap.min.css" media="screen" />                            
                         <link rel="stylesheet" type="text/css" href="http://micasita.com.pe/personalizado.css" media="screen" />


                             <style>
                            /* Tooltip container */
                             .label {
                                     position: relative;
                                     display: inline-block;
                                                                        }

                              /* Tooltip text */
                             .label .tooltiptext {
                                              visibility: hidden;
                                              width: 140px;
                                              background-color: black;
                                              color: #fff;
                                              text-align: center;
                                              padding: 5px 0;
                                              border-radius: 6px;
 
                                             /* Position the tooltip text - see examples below! */
                                              position: absolute;
                                               z-index: 1;
                                               }

                                      /* Show the tooltip text when you mouse over the tooltip container */
                                   .label:hover .tooltiptext {
                                                             visibility: visible;
                                               }
                              </style>

                               <script src='https://www.google.com/recaptcha/api.js'></script>
                              <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->


                               <script src="http://www.micasita.com.pe/personalizado1.js"></script>
                               <!--<script src="http://www.micasita.com.pe/personalizado2.js"></script>-->

                                   <script>
                                    (function($) {

                                               $("#customRadioInlinerepre2").click(function(){
                                                        $("#ventana").css("display", "none");
                                                     });
                                               $("#customRadioInlinerepre1").click(function(){
                                                        $("#ventana").css("display", "block");
                                                     });

                                             $("#motivo").on("change",function(){
                                                       // alert($(this).val());
                                                          
                                                       if($(this).val() == "Cuestionamiento en el Reporte Crediticio"){
                                                          $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                          $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                       }else if($(this).val() == "Disconformidad con cobro de intereses y comisiones"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                           }else if($(this).val() == "Operacion no procesada o mal realizada"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                        } else if($(this).val() == "Producto no contratado"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                        }   else if($(this).val() == "Pedido de duplicado de Estado de Cuenta"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",true);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",false);

                                                        }     else if($(this).val() == "Confirmacion o detalle de operaciones"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",true);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",false);

                                                        }      else if($(this).val() == "Demora/Incumplimiento en envios de correspondencia"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                        }      
                                                           else if($(this).val() == "Trato inadecuado y mala atencion"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",true);
                                                        }                                                             
                                                        
                                                  });

                                                        $(".departamento").on("change",function(){

                                                        var countryID = $(this).val();
                                                          if(countryID){
                                                               $.ajax({
                                                               type:"POST",
                                                               url:"../demo2.php",
                                                               data:"idDepa="+countryID,
                                                                success:function(html){
                                                                     $("#provincia").html(html);
                                                          }
                                                       }); 
      
                                                    }
                                                     });

                                                      $('#provincia').on('change',function(){
                                                       var stateID = $(this).val();
                                                           if(stateID){
                                                                  $.ajax({
                                                                  type:'POST',
                                                             url:'../demo2.php',
                                                             data:'idProv='+stateID,
                                                             success:function(html){
                                                             $('#distrito').html(html);
                                                                 }
                                                                 }); 
                                                             }else{
                                                           $('#distrito').html('<option value="">Selecciona distrito first</option>'); 
                                                            }
                                                                });

                                       })( jQuery );
                                   </script>

                               <!--<script src="http://www.micasita.com.pe/wp-content/themes/micasita/js/bootstrap.js"></script>
                               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>-->

                            <br>
                </form>
                       
                      </div>
                    </div>
                  </div>
                                                            
    <?php 
    // Devuelve el contenido del buffer de salida
    return ob_get_clean();
 }