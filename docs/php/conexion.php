<?php
$name = "localhost";
$userName = "root";
$password = "";
$db_name = "prueba";
$conexion = mysqli_connect($name,$userName,$password,$db_name);
if (!$conexion) {
    echo "Connecion Failled";
}else{
    // echo "connected";
}
?>