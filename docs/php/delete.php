<?php 
if(isset($_GET['id'])){ 
    include "conexion.php";

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $id = validate($_GET['id']);

        $sql = "DELETE FROM `persona` WHERE `id`='$id'";
            $result = mysqli_query($conexion, $sql);
            if ($result) {
                header ("Location: read.php");
                header ("Location: read.php?success=Successfully Deleted");
            }else{
                header ("Location: read.php?id=$id&error=unknow error ocurred");
            }
}else{
    header ("Location: read.php");
}
?>