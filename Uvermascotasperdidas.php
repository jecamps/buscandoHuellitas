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
    <!-- Data table -->
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <title>Buscando Huellitas</title>
</head>

<body>

    <section class="home" style="margin-bottom:40rem;">
        <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans|Roboto');

        .title {
            text-align: center;
            font-size: 50px;
            color: orange;
            margin-top: 100px;
            font-weight: 100;
            font-family: 'Roboto', sans-serif;
        }

        .container2 {
            text-align: center;
            width: 100%;
            max-width: 1200px;
            height: 430px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: auto;
        }

        .busca:hover {
            background-color: #ffa119;
            color: white;
        }

        .container2 .card {
            background-color: rgb(224, 224, 224, 0.550);
            width: 17rem;
            height: 25rem;
            border-radius: 8px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 20px;
            text-align: center;
            transition: all 0.25s;
        }

        .container2 .card:hover {
            transform: scale(1.2);
            /*transform: translateY(-15px);*/
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
            background-color: white;

        }

        .container2 .card img {
            width: 330px;
            height: 220px;
        }


        .container2 .card h4 {
            font-weight: 600;
        }

        .container2 .card p {
            padding: 0 1rem;
            font-size: 16px;
            font-weight: 300;
        }

        .container2 .card a {
            font-weight: 500;
            text-decoration: none;
            color: #3498db;
        }


        .borde {
            text-align: center;
            width: 70%;
            margin: 0 auto;
        }

        @media screen and (max-width:800px) {
            .container2 .card img {
                width: 230px;
            }

        }
        </style>

        <div class="borde">
            <form action="./Uvermascotasperdidas.php" method="post">
                <div class="container">
                    <p for="sacramento" class="fs-3 fw-bold">Seleccione como quiere que se muestren:</p>
                    <div class="row">
                        <div class="col">
                            <label for="" class="fs-4 fw-bold">Estado:</label>
                            <select class="form-select" name="estado" id="estado">
                                <option value="Todos">Todos</option>
                                <option value="CDMX">CDMX</option>
                                <option value="EDOMEX">EDOMEX</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="" class="fs-4 fw-bold">Tipo:</label>
                            <select class="form-control" name="tipoM" id="tipoM">
                                <option value="Todos">Todos</option>
                                <option value="Perro">Perro</option>
                                <option value="Gato">Gato</option>
                                <option value="Hamster">Hamster</option>
                                <option value="Pajaro">Pajaro</option>
                                <option value="Cuyo">Cuyo</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="" class="fs-4 fw-bold">Estatus:</label>
                            <select class="form-control" name="estatus" id="estatus">
                                <option value="Todos">Todos</option>
                                <option value="1">Extraviado</option>
                                <option value="0">Encontrado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-success float-end" id="btn"><i class="bi bi-search"></i>
                    Buscar</button>
            </form>

            <div class="container2">


                <?php
                if (isset($_POST['estado']) && isset($_POST['tipoM']) && isset($_POST['estatus']) && $_POST['estado'] == "Todos" && $_POST['tipoM'] == "Todos" && $_POST['estatus'] == "Todos") {
                    $val = "SELECT `id`,`nombre`,`estado`,`dom`,`foto`,`estatus` FROM `mascotas` ;";//Todos
                  } else if (isset($_POST['estado']) && isset($_POST['tipoM']) && isset($_POST['estatus']) && $_POST['estado'] == "CDMX") {
                    $val ="SELECT `id`,`nombre`,`estado`,`dom`,`foto`,`estatus` FROM `mascotas` WHERE `estado` = 'CDMX';";//Solo CDMX
                  }else if(isset($_POST['estado']) && isset($_POST['tipoM']) && isset($_POST['estatus']) && $_POST['estado'] == "EDOMEX") {   
                    $val ="SELECT `id`,`nombre`,`estado`,`dom`,`foto`,`estatus` FROM `mascotas` WHERE `estado` = 'EDOMEX';";//Solo EDOMEX
                  } else if (isset($_POST['estado']) && isset($_POST['tipoM']) && isset($_POST['estatus']) && $_POST['estatus'] == "1") {
                    $val = "SELECT `id`,`nombre`,`estado`,`dom`,`foto`,`estatus` FROM `mascotas` WHERE `estatus` = '1';";//Solo Perdidos
                  } else if (isset($_POST['estado']) && isset($_POST['tipoM']) && isset($_POST['estatus']) && $_POST['estatus'] == "0") {
                    $val = "SELECT `id`,`nombre`,`estado`,`dom`,`foto`,`estatus` FROM `mascotas` WHERE `estatus` = '0';";//Solo encontrados
                  } else if (isset($_POST['estado']) && isset($_POST['tipoM']) && isset($_POST['estatus']) && $_POST['tipoM'] == "Perro") {
                    $val = "SELECT `id`,`nombre`,`estado`,`dom`,`foto`,`estatus` FROM `mascotas` WHERE `tipo` = 'Perro';";//Solo perros
                  } else if (isset($_POST['estado']) && isset($_POST['tipoM']) && isset($_POST['estatus']) && $_POST['tipoM'] == "Gato") {
                    $val = "SELECT `id`,`nombre`,`estado`,`dom`,`foto`,`estatus` FROM `mascotas` WHERE `tipo` = 'Gato';";//Solo gatos
                  } else if (isset($_POST['estado']) && isset($_POST['tipoM']) && isset($_POST['estatus']) && $_POST['tipoM'] == "Hamster") {
                    $val = "SELECT `id`,`nombre`,`estado`,`dom`,`foto`,`estatus` FROM `mascotas` WHERE `tipo` = 'Hamster';";//Solo hamsters
                  } else if (isset($_POST['estado']) && isset($_POST['tipoM']) && isset($_POST['estatus']) && $_POST['tipoM'] == "Pajaro") {
                    $val = "SELECT `id`,`nombre`,`estado`,`dom`,`foto`,`estatus` FROM `mascotas` WHERE `tipo` = 'Pajaro';";//Solo pajaros
                  } else if (isset($_POST['estado']) && isset($_POST['tipoM']) && isset($_POST['estatus']) && $_POST['tipoM'] == "Cuyo") {
                    $val = "SELECT `id`,`nombre`,`estado`,`dom`,`foto`,`estatus` FROM `mascotas` WHERE `tipo` = 'Cuyo';";//Solo cuyos
                  } else {
                   $val ="SELECT * FROM mascotas";
                  }
                                   
                    $consultaU ="$val";
                    $resultadoU = mysqli_query($conectado, $consultaU);
                    while($row = mysqli_fetch_assoc($resultadoU)){ 
                ?>

                <div class="card">
                    <img class="card-img-top" alt="" src="./imagenesMascotas/<?php echo $row ['foto'];?>">
                    <h4><?php echo $row ['nombre'];?></h4>
                    <p><?php echo $row ['estado'];?>,<?php echo $row ['dom'];?></p>

                    <div class="card-footer ">
                        <div class="row ">
                            <button class="btn btn-sm busca" class="tooltip-test">

                                <span class="fs-3"><i class="bi bi-search" style="color:red;"></i><a
                                        href="./UcomentarioMascota.php?id=<?php echo $row["id"];?>"
                                        style="text-decoration:none; color:red;"><?php echo $row['estatus'] ? 'Extraviado' : 'Encontrado' ?></a></span>

                            </button>
                        </div>
                    </div>
                </div>

                <?php
                    }
                    mysqli_free_result($resultadoU);
                ?>

            </div>
        </div>

    </section>

</body>
<?php include('fragmentos/footer.php');?>

</html>