<?php 
 require('conexion.php');
 session_start();
 $rol = $_SESSION['rol'];

 if ($rol != 'Administrador') {
   header("location:index.php");
 }
 include('fragmentos/menu3.php');
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
    <!-- Tabla mascotas -->
    <div class="container table-responsive" style="margin-tpo:4rem;margin-bottom:4rem;">
        <table id="tablax" class="display table table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha de registro</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Correo</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consultaU ="SELECT `id`, `nombre`, `edad`, `fecha`, `recompensa`, `descripcion`, `tipo`, `mascotaP`, `estado`, `dom`, `foto`, `nombreI`, `estatus`, `diaRegistro`, `usuario` 
                    FROM `mascotas`";
                    $resultadoU = mysqli_query($conectado, $consultaU);
                    $cont = 1;
                    while($row = mysqli_fetch_assoc($resultadoU)){ 
                ?>
                <tr>
                    <th scope="row"><?php echo $cont++ ?></th>
                    <td><?php echo $row ['nombre'];?></td>
                    <td><?php echo $row ['diaRegistro'];?></td>
                    <td><?php echo $row ['tipo'];?></td>
                    <td><?php echo $row ['mascotaP'];?></td>
                    <td><?php echo $row ['edad'];?></td>
                    <td><?php echo $row ['usuario'];?></td>
                    <td><a href="./BDeliminarMascota.php?id=<?php echo $row["id"];?>" onclick="return confirmDelete()"><i
                                class="bi bi-chat-right fw-bold" style="color:green; font-size:1.5rem;"></i></a>
                    </td>
                    <td><a href="./AdetallesMascota.php?id=<?php echo $row["id"];?>"><i class="bi bi-pencil-square"
                                style="color:blue; font-size:1.5rem;"></i></a></td>
                </tr>
                <?php
              }
              mysqli_free_result($resultadoU);
            ?>
            </tbody>
        </table>
    </div>

    <script>
    function confirmDelete() {
        var respuesta = confirm("¿Estas seguro de que deseas eliminarlo?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }

    $(document).ready(function() {
        $('#tablax').DataTable({
            language: {
                processing: "Tratamiento en curso...",
                search: "Buscar&nbsp;:",
                lengthMenu: "Agrupar de _MENU_ items",
                info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                infoEmpty: "No existen datos.",
                infoFiltered: "(filtrado de _MAX_ elementos en total)",
                infoPostFix: "",
                loadingRecords: "Cargando...",
                zeroRecords: "No se encontraron datos con tu busqueda",
                emptyTable: "No hay datos disponibles en la tabla.",
                paginate: {
                    first: "Primero",
                    previous: "Anterior",
                    next: "Siguiente",
                    last: "Ultimo"
                },
                aria: {
                    sortAscending: ": active para ordenar la columna en orden ascendente",
                    sortDescending: ": active para ordenar la columna en orden descendente"
                }
            },
            scrollY: 400,
            lengthMenu: [
                [10, 25, -1],
                [10, 25, "All"]
            ],
        });
    });
    </script>
</body>
<?php include('fragmentos/footer.php');?>

</html>