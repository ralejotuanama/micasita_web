<?php

sql = 'select dni,codigo,nombre,direccion from wp_reclamo limit 20';
function connectDB(){

        $server = "localhost";
        $user = "root";
        $pass = "4NRmXxwYGVUikWgL";
        $bd = "RC*29#B@hrx^!5RE";

    $conexion = mysqli_connect($server, $user, $pass,$bd);

        if($conexion){
            echo 'La conexion de la base de datos se ha hecho satisfactoriamente
';
        }else{
            echo 'Ha sucedido un error inexperado en la conexion de la base de datos
';
        }

    return $conexion;
}

function disconnectDB($conexion){

    $close = mysqli_close($conexion);

        if($close){
            echo 'La desconexion de la base de datos se ha hecho satisfactoriamente
';
        }else{
            echo 'Ha sucedido un error inexperado en la desconexion de la base de datos
';
        }   

    return $close;
}

function getArraySQL($sql){
    //Creamos la conexi�n con la funci�n anterior
    $conexion = connectDB();

    //generamos la consulta

        mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

    if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexi�n cancelar programa

    $rawdata = array(); //creamos un array

    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;

    while($row = mysqli_fetch_array($result))
    {
        $rawdata[$i] = $row;
        $i++;
    }

    disconnectDB($conexion); //desconectamos la base de datos

    return $rawdata; //devolvemos el array
}

        $myArray = getArraySQL($sql);
        echo json_encode($myArray);
?>