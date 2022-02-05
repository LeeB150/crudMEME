<!doctype html>
<html lang="es">
<head>
<title>CREATE</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<!-- Bootstrap CSS v5.0.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <form action="php/create.php" method="post"> 
            <?php
                // include "php/conexion.php";
                $nombre = "";
                $cedula = "";
                $fechnac = "";
                $numcel = "";
                $cargo = "";
            ?> 
            <h4 class="text-muted text-center">CREATE</h4> <hr>
            <?php if (isset($_GET['error'])){ ?> 
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>                
            <?php } ?>

            <div class="mb-3">
                <label for="" class="form-label"> Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre" required id="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label"> Cédula</label>
                <input type="text" class="form-control" name="cedula" placeholder="Ingrese Cédula"  required id="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label"> Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fechnac"  required id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label"> Número de Celular</label>
                <input type="tel" class="form-control" name="numcel" placeholder="Ingrese Número de Celular "  required id="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Cargo</label>
                <select name="cargo" class="form-control"  required id="">
                    <option value="" selected disabled>--Select Choice--</option>
                    <option value="Ingeniero">Ingeniero</option>
                    <option value="Analista">Analista</option>
                    <option value="Consultor">Consultor</option>
                    <option value="Director">Director</option>
                    <option value="Gerente">Gerente</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="create">CREATE</button>
            <a href="php/read.php" class="link-primary">View</a>
        </form>
    </div>
    
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>