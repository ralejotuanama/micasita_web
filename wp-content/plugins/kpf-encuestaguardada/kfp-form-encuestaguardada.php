<?php
/**
* Plugin Name: KFP Encuesta Guardada
*/
// Cuando el plugin se active se crea la tabla para recoger los datos si no existe
register_activation_hook(__FILE__, 'Kfp_encuestaguardada_init');
 
/*<script src = "https://www.google.com/recaptcha/api.js"></script>*/

/**
 * Crea la tabla para recoger los datos del formulario
 *
 * @return void
 */
function Kfp_encuestaguardada_init() 
{
    global $wpdb; // Este objeto global permite acceder a la base de datos de WP
    // Crea la tabla sólo si no existe
    // Utiliza el mismo prefijo del resto de tablas
    $tabla_encuestas = $wpdb->prefix . 'encuesta';
    // Utiliza el mismo tipo de orden de la base de datos
    $charset_collate = $wpdb->get_charset_collate();
    // Prepara la consulta
    $query = "CREATE TABLE IF NOT EXISTS $tabla_encuestas (
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
    // La función dbDelta permite crear tablas de manera segura se
    // define en el archivo upgrade.php que se incluye a continuación
    include_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($query); // Lanza la consulta para crear la tabla de manera segura
}


// Define el shortcode y lo asocia a una función
add_shortcode('kfp_encuestaguardada_form', 'Kfp_EncuestaGuardada_form');
 
/** 
 * Define la función que ejecutará el shortcode
 * De momento sólo pinta un formulario que no hace nada
 * 
 * @return string
 */
function Kfp_EncuestaGuardada_form() 
{
    // Esta función de PHP activa el almacenamiento en búfer de salida (output buffer)
    // Cuando termine el formulario lo imprime con la función ob_get_clean

global $wpdb; // Este objeto global permite acceder a la base de datos de WP
    // Si viene del formulario  graba en la base de datos
    // Cuidado con el último igual de la condición del if que es doble
     if (($_POST['dni'] != '' && isset($_POST['dni']))
        AND ($_POST['nombre'] != '' && isset($_POST['nombre']))
        AND   ($_POST['telefono'] != '' && isset($_POST['telefono']))
        
       
    ) {
        $tabla_encuestas = $wpdb->prefix . 'encuesta'; 
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $amabilidad  = $_POST["amabilidad"];
        $atencion = $_POST["atencion"];
        $capacidad = $_POST["capacidad"];
        $respuestas = $_POST["respuestas"];
        $calidad = $_POST["calidad"];
        $tiempo = $_POST["tiempo"];
        $recomendacion = $_POST["recomendacion"];
        $created_at = date('Y-m-d H:i:s');
        $wpdb->insert(
            $tabla_encuestas,
            array(
                 'dni' => $dni,
                 'nombre' => $nombre,
                 'telefono' => $telefono,
                 'correo' => $correo,
                 'amabilidad' => $amabilidad,
                 'atencion' => $atencion,
                 'capacidad' => $capacidad,
                 'respuestas' => $respuestas,
                 'calidad' => $calidad,
                 'tiempo' => $tiempo,
                 'recomendacion' => $recomendacion,
                 'created_at' => $created_at,
            )
        );

                  $recipient = "".$_POST["correo"].", atencionalusuario@micasita.com.pe";
                  
                  //Asunto del email
                  $subject = 'Pagina Web - Encuesta';
                  //La dirección de envio del email es la de nuestro blog por lo que agregando este header podremos responder al remitente original

                   $headers = "From:" . $nombre ." <" . $correo. ">\r\n" .
                            "Reply-To:". $nombre . " <" . $correo .  ">\r\n" ;
 
                  //Montamos el cuerpo de nuestro e-mail
                    $message = "<table><tr><td>DNI :</td><td>" . $dni . "</td></tr>";
                    $message .= "<tr><td>Nombre :</td><td>" . $nombre . "</td></tr>";
                    $message .= "<tr><td>Telefono :</td><td>" . $telefono . "</td></tr>";
                    $message .= "<tr><td>Correo :</td><td>" . $correo . "</td></tr>";  
                    $message .= "<tr><td>Amabilidad :</td><td>" . $amabilidad . "</td></tr>";
                    $message .= "<tr><td>Atenci�n :</td><td>" . $atencion . "</td></tr>";
                    $message .= "<tr><td>Capacidad :</td><td>" . $capacidad . "</td></tr>";
                    $message .= "<tr><td>Respuestas :</td><td>" . $respuestas . "</td></tr>";
                    $message .= "<tr><td>Calidad :</td><td>" . $calidad . "</td></tr>";
                    $message .= "<tr><td>Tiempo :</td><td>" . $tiempo . "</td></tr>";
                    $message .= "<tr><td>Recomendaci�n :</td><td>" . $recomendacion . "</td></tr></table>"; 
                    $message .= "<br>--<br>";
                    $message .= "Este mensaje se ha enviado desde un formulario de encuesta en miCasita hipotecaria<br>";
                    $message .= "(http://www.micasita.com.pe)";
    
                  //Filtro para indicar que email debe ser enviado en modo HTML
                  add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
                                    
                  //Por último enviamos el email
                  $envio = wp_mail( $recipient, $subject, $message, $headers, "mnmnmnmnmnmnmn");
 
              if ($envio) {
                    unset($dni);

                    unset($nombre);
                     unset($telefono);

                    unset($correo);
                    unset($amabilidad);
                    unset($atencion);

                     unset($capacidad);
                    unset($respuestas);
                    unset($calidad);
                        unset($tiempo);
                    unset($recomendacion);

if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
         $captcha=$_POST['g-recaptcha-response'];
		if(!$captcha){
         // echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LePQMgUAAAAAFVKSJVlNRgXStCQttz7QrwuuLOI&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
       //   echo '<h2>You are spammer ! Get out</h2>';
        }else
        {
         // echo '<h2>Thanks for posting comment.</h2>';
        }		

                    //unset($f_message);?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      El formulario ha sido enviado correctamente.
                    </div>
                  <?php }else {?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Se ha producido un error enviando el formulario. Puede intentarlo más tarde o ponerse en contacto con nosotros escribiendo un mail a "destinatario@email.com"
                    </div>
                  <?php }

     /*  echo "<p class='exito'><b>Tus datos han sido registrados</b>. Gracias 
            por tu interés. En breve contactaré contigo.<p>";*/
    }

    ob_start();

    ?>
 <div class="container">

    <div class="row">

      <div class="col-xs-7">
       <form action="<?php get_the_permalink(); ?>" method="post" id="form_encuesta"
         class="cuestionario">
           <div class="form-group">
                 <label for="dni">DNI:</label>
                 <input type="text" name="dni" id="dni" class="form-control" required>

           </div>
         <br>
           <div class="form-group">
                 <label for="nombre">Nombre:</label>
                 <input type="text" name="nombre" id="nombre" class="form-control" required>
           </div>
          <br>

         <div class="form-group">
                <label for="telefono">Teléfono:</label>

                <input type="text" name="telefono" id="telefono" class="form-control" required>

         </div>
         
         <br>
         <div class="form-group">
            <label for='correo'>Correo Electr&oacute;nico:</label>
            <input type="email" name="correo" id="correo" class="form-control" style="width:100% ;height:34px;" required>

         </div>
          <br>




         <div class="form-group">
         <input type="checkbox" name="datos" value="">Si acepto el<a href="http://micasita.com.pe/Descargas/Reclamos/TRATAMIENTO%20DE%20DATOS%20PERSONALES.pdf" target="_blank"> Tratamiento de mis datos personales</a><br>
         </div>

<br>
         <p>En una escala del 1 al 5, siendo 1 la menor calificación y 5 la mayor, evalúe las siguientes condiciones del servicio brindado.
         </p>
          <br>
        <div class="form-input">
            <label for="amabilidad">¿Cómo calificaría la amabilidad de la persona que lo atendió?</label>
            <br><input type="radio" name="amabilidad" value="1" required>  1
            <br><input type="radio" name="amabilidad" value="2" required> 2
            <br><input type="radio" name="amabilidad" value="3" required> 3
            <br><input type="radio" name="amabilidad" value="4" required> 4
            <br><input type="radio" name="amabilidad" value="5" required> 5
        </div>
          <br>
        <div class="form-input">
            <label for="atencion">¿Cómo calificaría la atención recibida, por parte de nuestro personal?</label>
            <br><input type="radio" name="atencion" value="1" required>  1
            <br><input type="radio" name="atencion" value="2" required> 2
            <br><input type="radio" name="atencion" value="3" required> 3
            <br><input type="radio" name="atencion" value="4" required> 4
                <br><input type="radio" name="atencion" value="5" required> 5
        </div>
          <br>
        <div class="form-input">
            <label for="capacidad">¿Cómo evaluaría la capacidad de la persona, que le atendió para resolver su duda?</label>
            <br> <input type="radio" name="capacidad" value="1" required>  1
            <br><input type="radio" name="capacidad" value="2" required> 2
            <br><input type="radio" name="capacidad" value="3" required> 3
            <br><input type="radio" name="capacidad" value="4" required> 4
            <br><input type="radio" name="capacidad" value="5" required> 5
        </div>
          <br>
        <div class="form-input">
            <label for="respuestas">¿Cómo calificaría las respuestas brindadas sobre el tema consultado?</label>
            <br><input type="radio" name="respuestas" value="1" required>  1
            <br><input type="radio" name="respuestas" value="2" required> 2
            <br><input type="radio" name="respuestas" value="3" required> 3
            <br><input type="radio" name="respuestas" value="4" required> 4
            <br><input type="radio" name="respuestas" value="5" required> 5
        </div>
          <br>
         <div class="form-input">
            <label for="calidad">¿Cómo percibe la calidad del servicio recibido en general?</label>
            <br><input type="radio" name="calidad" value="1" required>  1
            <br><input type="radio" name="calidad" value="2" required> 2
            <br><input type="radio" name="calidad" value="3" required> 3
            <br><input type="radio" name="calidad" value="4" required> 4
            <br><input type="radio" name="calidad" value="5" required> 5
        </div>
         <br>
       <div class="form-input">
            <label for="tiempo">¿Cuánto tiempo esperó para ser atendido?</label>
            <br> <input type="radio" name="tiempo" value="menos de 5 minutos" required> menos de 5 minutos
            <br> <input type="radio" name="tiempo" value="de 5 a 10 minutos" required> de 5 a 10 minutos
            <br><input type="radio" name="tiempo" value="de 10 a 15 minutos" required> de 10 a 15 minutos
            <br><input type="radio" name="tiempo" value="más de 15 minutos" required> más de 15 minutos  
        </div>
        <br>

        <div class="form-input">
            <label for="recomendacion">¿Qué recomendación nos daría para mejorar el servicio brindado?</label>
        <br>
           <textarea rows="4" cols="50" name="recomendacion" id="recomendacion">
           </textarea>
        </div>

        <br>
           <div class = "g-recaptcha" data-sitekey ="6LePQMgUAAAAAPM1gwc-J6ZlH4Piv-iHeBOOI_Er">
           </div>
        <br>

        <div class="form-input">
            <input type="submit" value="Enviar" class="form-control" style="background:#00AB69; color:#fff;padding:10px 25px;" id="boton3">
        </div>

<style>
#boton3 {
  color: #5B666F !important;
  font-size: 20px;
  font-weight: 500;
  padding: 6px 20px !important;
  background: rgba(0,0,0,0);
  border: 2px solid;
  border-color: #318aac;
  transition: all 1s ease;
  position: relative;
  border-radius: 6px;
}
#boton3:hover {
  background: #318aac;
  color: #fff !important;
  border-radius: 6px;
  cursor: pointer;

}

</style>


        <p>Gracias por su colaboración</p>
    </form>

<script src='https://www.google.com/recaptcha/api.js'></script>
</div>

<div class="col-xs-5">

<img alt src="http://www.micasita.com.pe/wp-content/uploads/2019/03/data_update-1024x1024.png" class="img-responsive">

</div>
</div>
</div>
    <?php
     
    // Devuelve el contenido del buffer de salida
    return ob_get_clean();
}