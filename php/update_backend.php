<?php
    if (isset($_GET['id'])) {
        include "conexion.php";

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $id = validate($_GET['id']);
        $sql = "SELECT `id`, `nombre`, `cedula`, `fechnac`, `numcel`, `cargo` FROM `persona` WHERE `id`= $id";

        $result = mysqli_query($conexion, $sql); 

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        }else{
            header ("Location: read.php");
        }
    }else if(isset($_POST['update'])){
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
        $id = validate($_POST['id']);
            
        if(empty($nombre)){
            header("Location:../update.php?id=$id&error=Name is required");
        }elseif (empty($cedula)) {
            header("Location:../update.php?id=$id&error=Cédula is required");
        }elseif (empty($fechnac)) {
            header("Location:../update.php?id=$id&error=Fecha de Nacimiento is required");
        }elseif (empty($numcel)) {
            header("Location:../update.phpid=$id&error=Número de Celular is required");
        }elseif ($cargo=="") {
            header("Location:../update.php?id=$id&error=Cargo is required");
        }else{
            $sql = "UPDATE `persona` SET `nombre`='$nombre',`cedula`='$cedula',`fechnac`='$fechnac',`numcel`='$numcel',`cargo`='$cargo' WHERE `id`='$id'";
            $result = mysqli_query($conexion, $sql);
            if ($result) {
                header ("Location: read.php");
                header ("Location: read.php?success=Successfully Updated");
            }else{
                header ("Location: update_view.php?id=$id&error=unknow error ocurred");
            }
        }
    }else{
        header ("Location: read.php");
    }
?>