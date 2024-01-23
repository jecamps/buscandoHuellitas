<?php date_default_timezone_set('UTC');
date_default_timezone_set('America/Los_Angeles'); ?>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " style="background-color: #ffa119;" id="arriba">
        <div class="container-fluid">
            <a class="navbar-brand"><img id="MDB-logo" src="./Imagenes/LogoSinFondo.png" alt="BuscandoHuellitas"
                    draggable="false" class="w-50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                style="border: 1px solid black;" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link vinculo fs-6 fw-bold text-white" aria-current="page"
                            href="./UverMismascotas.php">Ver mis
                            mascotas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link vinculo fs-6 fw-bold text-white" href="./Uvermascotasperdidas.php">Ver mascotas perdidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link vinculo fs-6 fw-bold text-white" aria-current="page" href="./UseguirMascota.php">Seguir
                            mascota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link vinculo fs-6 fw-bold text-white" aria-current="page" href="./UnuevaMascota.php">Añadir mascota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link vinculo fs-6 fw-bold text-white" aria-current="page"
                            href="./cerrarSesion.php"><i class="bi bi-box-arrow-right"></i>Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    </div>

    <style>
    .footer {
        position: fixed;
        left: 0px;
        bottom: 0px;
        height: 30px;
        width: 100%;
    }

    @media screen and (max-width:800px) {

        .footer {
            display: none;
        }
    }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>


    <script>
    $(document).ready(function() {

        setTimeout(function() {
            $(".content").fadeOut(1500);
        }, 3000);

    });
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
    </script>

    <script>
    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap4'
    });
    </script>

