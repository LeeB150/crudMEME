<?php
if (isset($_POST['create'])) {
    include "conexion.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $nombre = validate($_POST['nombre']);
    $cedula = validate($_POST['cedula']);
    $fechnac = validate($_POST['fechnac']);
    $numcel = validate($_POST['numcel']);
    $cargo = validate($_POST['cargo']);

    $user_data = "name=".$nombre."&cédula=".$cedula."&fechanac=".$fechnac."&numcel=".$numcel."&cargo=".$cargo;
    
    if(empty($nombre)){
        header("Location:../index.php?error=Name is required&$user_data");
    }elseif (empty($cedula)) {
        header("Location:../index.php?error=Cédula is required&$user_data");
    }elseif (empty($fechnac)) {
        header("Location:../index.php?error=Fecha de Nacimiento is required&$user_data");
    }elseif (empty($numcel)) {
        header("Location:../index.php?error=Número de Celular is required&$user_data");
    }elseif ($cargo=="") {
        header("Location:../index.php?error=Cargo is required&$user_data");
    }else{
        $sql = "INSERT INTO persona(nombre, cedula, fechnac, numcel, cargo) VALUES ('$nombre','$cedula','$fechnac','$numcel','$cargo')";
        $result = mysqli_query($conexion, $sql);
        if ($result) {
            header ("Location: read.php");
            header ("Location: read.php?success=Successfully Created");
        }else{
            header ("Location: ../index.php?error=unknow error ocurred&$user_data");
        }
    }
}
?>