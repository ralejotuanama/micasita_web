<?php
/*
 * Template Name: Contacto456
 */
 
// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );?>
 
<?php get_header();?>

  


                               <link rel="stylesheet" type="text/css" href="http://www.micasita.com.pe/wp-content/themes/micasita/css/bootstrap.min.css" media="screen" />
                               <link rel="stylesheet" type="text/css" href="http://micasita.com.pe/personalizado.css" media="screen" />

                             


                                          
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
                                <label class="custom-control-label" for="customRadioInlinetipodoc1">DNI</label>
                            </div>
                            
                           <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInlinetipodoc2" name="tipodoc" class="custom-control-input" value="PASAPORTE" required="required" >
                                <label class="custom-control-label" for="customRadioInlinetipodoc2">PASAPORTE</label>
                            </div>

                                                         <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInlinetipodoc3" name="tipodoc" class="custom-control-input" value="CE" required="required" >
                                <label class="custom-control-label" for="customRadioInlinetipodoc3">CE</label>
                            </div>

                                                          <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInlinetipodoc4" name="tipodoc" class="custom-control-input" value="OTROS" required="required" >
                                <label class="custom-control-label" for="customRadioInlinetipodoc4">OTROS</label>
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
                                   <input type="text" name="correo" id="correo" required onkeypress="return soloLetras(event)">
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
                               <label class="custom-control-label" for="customRadioInlinecartarpta1">E-mail</label>
                           </div>
                       </div>

                       <div class="col-xs-6">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInlinecartarpta2" name="respuesta" class="custom-control-input" value="carta en su direccion de contacto" required="required" >
                                <label class="custom-control-label" for="customRadioInlinecartarpta2">Carta en su direccion de contacto</label>
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
                                               <option>Prestamo Mivivienda</option>
                                               <option>Prestamo Techo Propio</option>
                                               <option>Prestamo miCasita</option>
                                               <option>Afianzamiento</option>
                                               <option>Atenci&oacute;n al p&uacute;blico</option>
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
                                               <option>Cuestionamiento en el Reporte Crediticio</option>
                                               <option>Disconformidad con cobro de intereses y comisiones</option>
                                               <option>Operaci&oacute;n no procesada o mal realizada</option>
                                               <option>Producto no contratado</option>
                                               <option>Pedido de duplicado de Estado de Cuenta</option>
                                               <option>Confirmaci&oacute;n o detalle de operaciones</option>
                                               <option>Demora/Incumplimiento en env&iacute;os de correspondencia</option>
                                               <option>Trato inadecuado y mala atenci&oacute;n</option>

                                         </select>
                                  </div>
                             </div>
                               <div class = "col-xs-4">
                                  <div class="form-input">
                                      <label for="tipo"><strong>Solicitud o Reclamo:</strong>(requerido)
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
                                  <label tabindex="0" for="my-file" class="input-file-trigger">Selecciona un archivo...</label>
                                </div>
                                <p class="file-return"></p>
                             </div>
                                 
                             <div class="row">
                                <div class="input-file-container2">  
                                  <input class="input-file2" id="archivo2" name="archivo2" type="file">
                                  <label tabindex="0" for="my-file" class="input-file-trigger2">Selecciona un archivo...</label>
                                </div>
                                <p class="file-return2"></p>
                             </div>
                               
                             <div class="row">  
                                 <div class="input-file-container3">  
                                  <input class="input-file3" id="archivo3" name="archivo3" type="file">
                                  <label tabindex="0" for="my-file" class="input-file-trigger3">Selecciona un archivo...</label>
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
        
                                

                            <br>
                </form>
                       
                      </div>
                    </div>
                  </div>
                                                            

                               <script src='https://www.google.com/recaptcha/api.js'></script>
<script>
jQuery(document).ready(function($) {
  alert("xx");
});  </script>                            

<?php get_footer();?>
 