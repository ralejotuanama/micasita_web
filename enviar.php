<?php
function form_mail($sPara, $sAsunto, $sTexto, $sDe)
{
         //Asunto del email
         $sAsunto = 'Pagina Web - Reclamos';

         $bHayFicheros = 0;
         $sCabeceraTexto = "";
         $sAdjuntos = "";

         $nombre =    $_POST["nombre"];
         $correo =    $_POST["correo"];
         $dni =       $_POST["dni"];
         $direccion = $_POST["direccion"];
         $telefono =  $_POST["telefono"];
         $celular =   $_POST["celular"];

         /* recuperar datos de checkbo respuestas*/
        if (is_array($_POST['respuesta'])) {
        $selected = '';
        $num_respuesta = count($_POST['respuesta']);
        $current = 0;
        foreach ($_POST['respuesta'] as $key => $value) {
            if ($current != $num_respuesta-1)
                $selected .= $value.', ';
            else
                $selected .= $value.'.';
            $current++;
        }
       }
      
        $productos = $_POST["productos"];
         /* recuperar datos de check box tipo reclamo*/
        if (is_array($_POST['tipore'])) {
        $selected2 = '';
        $num_tipore = count($_POST['tipore']);
        $current = 0;
        foreach ($_POST['tipore'] as $key => $value) {
            if ($current != $num_tipore-1)
                $selected2 .= $value.', ';
            else
                $selected2 .= $value.'.';
            $current++;
            }
         }

        $detalle = $_POST["detalle"];      //detalle
        $created_at = date('Y-m-d H:i:s');  //fecha creacion registro

           $sCabeceras = "From:" . $nombre ."<".$correo.">\r\n" .
                            "Reply-To:". $nombre . " <" . $correo .  ">\r\n" ;

/*if ($sDe)$sCabeceras = "From:" . $nombre ." ". $sDe."\n Reply-To: ".$nombre." ".$sDe;
else $sCabeceras = "";*/

$sCabeceras .= "MIME-version: 1.0\n";
/*foreach ($_POST as $sNombre => $sValor)
$sTexto = $sTexto."\n".$sNombre." = ".$sValor;*/

$sTexto = $sTexto."\n".$nombre."\n".$correo ."\n".$dni."\n".$direccion."\n".$telefono."\n".$celular."\n".$selected ;

foreach ($_FILES as $vAdjunto)
{
if ($bHayFicheros == 0)
{
$bHayFicheros = 1;
$sCabeceras .= "Content-type: multipart/mixed;";
$sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

$sCabeceraTexto = "----_Separador-de-mensajes_--\n";
$sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n";
$sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

$sTexto = $sCabeceraTexto.$sTexto;
}
if ($vAdjunto["size"] > 0)
{
$sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
$sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";;
$sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
$sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";

$oFichero = fopen($vAdjunto["tmp_name"], 'r');
$sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"]));
$sAdjuntos .= chunk_split(base64_encode($sContenido));
fclose($oFichero);
}
}

if ($bHayFicheros)
$sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";
return(mail($sPara, $sAsunto, $sTexto, $sCabeceras));
}

//cambiar aqui el email
/*if (form_mail("ronald152515@gmail.com", $_POST[asunto],
"Los datos introducidos en el formulario son:\n\n", $_POST[email]))
echo "Su formulario ha sido enviado con exito";*/

$envio = form_mail("ronald152515@hotmail.com", $_POST[asunto],
"Los datos introducidos en el formulario son:\n\n", $_POST[email]);

                 if ($envio) {
                  ?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true" id="bot">&times;</button>
                      El formulario ha sido enviado correctamente, su codigo de reclamo es: <?php echo $cod;  ?>.
                    </div>
                  <?php }else {?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Se ha producido un error enviando el formulario. Puede intentarlo más tarde o ponerse en contacto con nosotros escribiendo un mail a "destinatario@email.com"
                    </div>
                  <?php }   
?>