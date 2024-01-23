<?php 
 require('conexion.php');
 session_start();
 $rol = $_SESSION['rol'];
 $nombre = $_SESSION['correo'];

 if ($rol != 'Usuario') {
   header("location:index.php");
 }
 include('fragmentos/menu2.php');
 $mascota = $_GET['id'];
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
    <div class="container position-relative" style="margin-bottom:16rem;">
        <div class="position-absolute top-0 start-0">
            <div class="fs-4 fw-bold">
                Mascotas con chip:
            </div>
            <br>
            <div>
                <ol class="list-group list-group-numbered">
                    <?php
                        $consultaU ="SELECT `id`,`nombre`,`foto` FROM `chips` WHERE `id` = '$mascota'";
                        $resultadoU = mysqli_query($conectado, $consultaU);
                        while($row = mysqli_fetch_assoc($resultadoU)){ 
                    ?>
                    <li class="list-group-item"> <a href="./UmapaMascota.php" clasS="text-reset text-decoration-none">
                            <?php echo $row['nombre']; ?> </a></li>

                </ol>
            </div>
        </div>
        <div class="position-absolute top-0 end-0">
            <img class="card-img-top" alt="" src="./imagenesMascotas/<?php echo $row ['foto'];?>">
        </div>
    </div>


    <div class="container" style="margin-bottom:13rem;">
        <div id="map"></div>
        <div id="content" class="fw-bold fs-6">Aqui se encuentra <?php echo $row['nombre']; ?> !</div>
    </div>
    <?php
        }
        mysqli_free_result($resultadoU);
    ?>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }

        .popup-bubble {
            position: absolute;
            top: 0;
            left: 0;
            transform: translate(-50%, -100%);
            background-color: white;
            padding: 5px;
            border-radius: 5px;
            font-family: sans-serif;
            overflow-y: auto;
            max-height: 60px;
            box-shadow: 0px 2px 10px 1px rgba(0, 0, 0, 0.5);
        }

        .popup-bubble-anchor {
            position: absolute;
            width: 100%;
            bottom: 8px;
            left: 0;
        }

        .popup-bubble-anchor::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            transform: translate(-50%, 0);
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 8px solid white;
        }

        .popup-container {
            cursor: auto;
            height: 0;
            position: absolute;
            width: 200px;
        }
    </style>

    <script src="./script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC592upqqaGLIbdmVoApdvjDIOFUPfu7ig&callback=initMap&v=weekly" defer></script>
</body>
<?php include('fragmentos/footer.php');?>

</html>