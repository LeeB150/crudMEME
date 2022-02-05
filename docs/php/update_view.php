<?php include "update_backend.php";?>
<?php include "conexion.php";?>
<!doctype html>
<html lang="es">
<head>
<title>UPDATE</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS v5.0.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
        <form action="update_backend.php" method="post"> 
            <h4 class="text-muted text-center">UPDATE</h4> <hr>
            <?php if (isset($_GET['error'])){ ?> 
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error'];?>
                </div>                
            <?php } ?>

            <div class="mb-3">
                <label for="" class="form-label"> Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre" value = "<?=$row['nombre'];?>" required id="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label"> Cédula</label>
                <input type="text" class="form-control" name="cedula" placeholder="Ingrese Cédula" value = "<?=$row['cedula'];?>" required id="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label"> Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fechnac" value = "<?=$row['fechnac'];?>" required id="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label"> Número de Celular</label>
                <input type="tel" class="form-control" name="numcel" placeholder="Ingrese Número de Celular " value = "<?=$row['numcel'];?>" required id="">
            </div>

            <div class="mb-3">            
                <label for="" class="form-label">Cargo</label>
                <select name="cargo" class="form-control" required id="">
                    <option value="" selected disabled>--Select Choice--</option>
                    <option <?php if($row['cargo'] == "Ingeniero"){echo "selected";};?> value="Ingeniero">Ingeniero</option>
                    <option <?php if($row['cargo'] == "Analista"){echo "selected";};?> value="Analista">Analista</option>
                    <option <?php if($row['cargo'] == "Consultor"){echo "selected";};?> value="Consultor">Consultor</option>
                    <option <?php if($row['cargo'] == "Director"){echo "selected";};?> value="Director">Director</option>
                    <option <?php if($row['cargo'] == "Gerente"){echo "selected";};?> value="Gerente">Gerente</option>
                </select>                
            </div>
            <div class="mb-3">
                <input type="text" hidden name="id" value="<?=$row['id']?>">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <a href="read.php" class="link-primary">View</a>
        </form>
    </div>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>