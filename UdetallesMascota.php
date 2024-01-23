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
    $consulta="SELECT * FROM mascotas WHERE id = '$id'";
    $resultado = mysqli_query($conectado, $consulta);
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
    while($row = mysqli_fetch_assoc($resultado)){ 
?>

    <div class="container text-center" style="margin-top:5rem;">
        <div class="row">
            <div class="col">
                <span class="fs-2 fw-bold">Mi mascota: </span><span class="fs-3"><?php echo $row ['nombre'];?></span>
            </div>
            <div class="col">
                <img src="./imagenesMascotas/<?php echo $row ['foto'];?>" class="img-fluid w-50 rounded"
                    alt="<?php echo $row ['nombreI'];?>">
            </div>
        </div>
    </div>
    <br><br>
    <div class="container text-start">
        <div class="row">
            <div class="col">
                <span class="fs-4 fw-bold">Edad: </span><span class="fs-5"><?php echo $row ['edad'];?> años</span>
            </div>
            <div class="col">
                <span class="fs-4 fw-bold">Recompensa: </span><span
                    class="fs-5">$ <?php echo number_format($row ['recompensa']);?></span>
            </div>
            <div class="col">
                <span class="fs-4 fw-bold">Descripción: </span><span
                    class="fs-5"><?php echo $row ['descripcion'];?></span>
            </div>
        </div>
    </div>

    <div class="container text-start">
        <div class="row">
            <div class="col">
                <span class="fs-4 fw-bold">Fecha de extravio: </span><span
                    class="fs-5"><?php echo $row ['fecha'];?></span>
            </div>
            <div class="col">
                <span class="fs-4 fw-bold">Tipo de mascota: </span><span class="fs-5"><?php echo $row ['tipo'];?></span>
            </div>
            <div class="col">
                <span class="fs-4 fw-bold">Mascota: </span><span class="fs-5"><?php echo $row ['mascotaP'];?></span>
            </div>
        </div>
    </div>

    <div class="container text-start">
        <div class="row">
            <div class="col">
                <span class="fs-4 fw-bold">Estado de extravio: </span><span
                    class="fs-5"><?php echo $row ['estado'];?></span>
            </div>
            <div class="col">
                <span class="fs-4 fw-bold">Delegación/Municipio: </span><span
                    class="fs-5"><?php echo $row ['dom'];?></span>
            </div>
            <div class="col">
                <span class="fs-4 fw-bold">Estatus: </span><span
                    class="fs-5"><?php echo $row ['estatus'] = 1 ? "Extraviado" : "Encontrado";?></span>
            </div>
        </div>
    </div>

    <div class="container text-start">
        <div class="row">
            <div class="col">
                <span class="fs-4 fw-bold">Fecha de registro: </span><span
                    class="fs-5"><?php echo $row ['diaRegistro'];?></span>
            </div>
        </div>
    </div>

    <div class="container text-end" style="margin-bottom:7rem;">
        <div class="row">
            <div class="col">
                <a href="./UeditarMascota.php?id=<?php echo $row["id"];?>"><button type="button"
                        class="btn btn-outline-success btn-lg">Editar</button></a>
            </div>
        </div>
    </div>


    <?php
}
mysqli_free_result($resultado);
?>
</body>
<?php include('fragmentos/footer.php');?>

</html>