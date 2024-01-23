<?php require('conexion.php'); include('fragmentos/menu.php');?>
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
    <!-- Grid -->
    <div class="container-fluid hijo" style="margin-top:4rem; margin-bottom:10rem;">
        <div class="row">
            <div class="col-sm-5 d-md-block">
                <h1 style="color: orange;" class="fs-2">Ayudanos a encontrar a tu mascota</h1>
                <h2 class="fs-3" style="margin-bottom:2rem;">Cada mascota que tu ayudes a encontrar es una vida que
                    puedes
                    salvar.</h2>
                <a class="registrobtn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight" href=""><i class="bi bi-arrow-up-right-square"></i>Registrate
                    Aquí</a>
            </div>
            <div class="col-sm-7">
                <br><br><br>
                <div class="col order-2 fs-4">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                                $foto = mysqli_query($conectado, "SELECT `foto` FROM `mascotas` LIMIT 4;");
                                $imagen = mysqli_fetch_array($foto);
                            ?>
                            <div class='carousel-item active' data-bs-interval='2000'>
                                <img src="./imagenesMascotas/<?php echo $imagen['foto']?>"
                                    class="mx-auto d-block img-fluid img-thumbnail" style='width:70%; height:70%;'>
                            </div>
                            <?php
                                while($fotos = mysqli_fetch_array($foto)){
                            ?>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="./imagenesMascotas/<?php echo $fotos['foto']?>"
                                    class="mx-auto d-block img-fluid img-thumbnail" style="width:70%; height:70%;">
                            </div>
                            <?php
                                }
                                mysqli_free_result($foto);
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include('fragmentos/footer.php');?>

</html>