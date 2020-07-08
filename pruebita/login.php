




<?php
/*
* Convertir datos de la tabla contact en JSON
* Powered by @evilnapsis
*/
$con = new mysqli("localhost","root","4NRmXxwYGVUikWgL","RC*29#B@hrx^!5RE");
if($con){
	$sql = "select * from wp_reclamo limit 5";
	$query = $con->query($sql);
	$data = array();
	while($r = $query->fetch_assoc()){
		$data[] = $r;
	}

print_r($r);

	
}
?>
