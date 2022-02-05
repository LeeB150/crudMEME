<?php
    include "conexion.php";
    $sql = "SELECT * FROM `persona`";
    $result = mysqli_query($conexion, $sql);
?>