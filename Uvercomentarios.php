<?php 
require('conexion.php');
session_start();
$rol = $_SESSION['rol'];
$nombre = $_SESSION['correo'];

if ($rol != 'Usuario') {
header("location:index.php");
}
include('fragmentos/menu2.php');

$id = $_GET["id"];

$consulta="SELECT `id_mascota`, `comentario`, `nombre`, `usuario` FROM `comentarios` WHERE `id_mascota` = '$id';";
$resultado = mysqli_query($conectado, $consulta);

$consulta2="SELECT `nombre`, `foto` FROM `mascotas` WHERE `id` = '$id';";
$resultado2 = mysqli_query($conectado, $consulta2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="./Estilos/estilos-principales.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <title>Buscando Huellitas</title>
</head>

<body>


    <?php
        while($row2 = mysqli_fetch_assoc($resultado2)){ 
    ?>
    <div class="container text-center" style="margin-top:5rem;">
        <div class="row">
            <div class="col">
                <span class="fs-2 fw-bold">Mi mascota: </span><span
                    class="fs-3"><?php echo $row2 ['nombre'];?></span>
            </div>
            <div class="col">
                <img src="./imagenesMascotas/<?php echo $row2 ['foto'];?>" class="img-fluid w-50 rounded" alt="">
            </div>
        </div>
    </div>
    <?php
        }
        mysqli_free_result($resultado2);
    ?>
    <br><br>
    <?php
        while($row = mysqli_fetch_assoc($resultado)){ 
    ?>
    <div class="container text-start">
        <div class="row">
            <div class="col">
                <span class="fs-4 fw-bold"><?php echo $row ['nombre'];?>: </span><span
                    class="fs-5"><?php echo $row ['comentario'];?></span>
            </div>
        </div>
    </div>
    <?php
        }
        mysqli_free_result($resultado);
    ?>
    <div class="container text-end" style="margin-bottom:7rem;">
        <div class="row">
            <div class="col">
                <a href="./UverMismascotas.php"><button type="button"
                        class="btn btn-outline-success btn-lg">Regresar</button></a>
            </div>
        </div>
    </div>
</body>
<?php include('fragmentos/footer.php');?>

</html>