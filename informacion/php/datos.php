<?php

include "conexion.php";
$telefono = $_REQUEST['telefono'];
$user_id=null;
$sql1= "SELECT  departamento,provincia FROM wp_reclamo   where telefono ='$telefono'";

$query = $con->query($sql1);

        $data = array();
        while($r = $query->fetch_assoc()){
             $data[] = $r;
	}
           echo json_encode($data);
?>



