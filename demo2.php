<?php


$db = new mysqli("localhost","root","4NRmXxwYGVUikWgL","RC*29#B@hrx^!5RE"); 
		if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
;

//echo "<script> alert('".$var."'); </script>";

if(isset($_POST["idDepa"]) && !empty($_POST["idDepa"])){
    //Get all state data
    $query = $db->query("SELECT * FROM ubprovincia WHERE idDepa = ". $_POST['idDepa'] ."");
   

    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Selecciona provincia</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['idProv'].'">'.$row['provincia'].'</option>';
        }
    }else{
        echo '<option value="">provincia no habilitada</option>';
    }

}

if(isset($_POST["idProv"]) && !empty($_POST["idProv"])){
    //Get all city data
    $query = $db->query("SELECT * FROM ubdistrito WHERE idProv = ".$_POST['idProv']."");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Selecciona distrito</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['idDist'].'">'.$row['distrito'].'</option>';
        }
    }else{
        echo '<option value="">distrito no habilitado</option>';
    }
}

?>

