<?php 
 require('conexion.php');
 session_start();
 $rol = $_SESSION['rol'];
 $nombre = $_SESSION['correo'];

 if ($rol != 'Usuario') {
   header("location:index.php");
 }
 include('fragmentos/menu2.php');


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

    <!-- Button trigger modal -->
    <div class="container position-relative" style="margin-bottom:25rem;">
        <div class="position-absolute top-0 start-0">
            <div class="fs-4 fw-bold">
                Mascotas con chip:
            </div>
            <br>
            <div>
                <ol class="list-group list-group-numbered">
                    <?php
                        $consultaU ="SELECT `id`,`nombre` FROM `chips` WHERE `usuario` = '$nombre'";
                        $resultadoU = mysqli_query($conectado, $consultaU);
                        while($row = mysqli_fetch_assoc($resultadoU)){ 
                    ?>
                    <li class="list-group-item"> <a href="./UmapaMascota.php?id=<?php echo $row["id"];?>" clasS="text-reset text-decoration-none"> <?php echo $row['nombre']; ?> </a></li>
                    <?php
                        }
                        mysqli_free_result($resultadoU);
                    ?>
                </ol>
            </div>
        </div>
        <div class="position-absolute top-0 end-0">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                Añadir mascota
            </button>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Chip</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./BDchipMascota.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="text" value="1" hidden name="bandera">
                            <input type="text" value="<?php echo $nombre?>" name="usuario" hidden>
                            <input type="text" name="idChip" class="form-control" placeholder="Id del chip:">
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre:">
                            </div>
                        </div>
                        <br>
                        <div class="row g-3">
                            <div class="col">
                                <label for="formFile" class="form-label">Selecciona tu foto:</label>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input class="form-control form-control-sm" name="foto" id="foto" type="file">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger float-end">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include('fragmentos/footer.php');?>

</html>