<!-- Navbar -->
<nav class="navbar navbar-expand-lg " style="background-color: #ffa119;" id="arriba">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php"><img id="MDB-logo" src="./Imagenes/LogoSinFondo.png"
                alt="BuscandoHuellitas" draggable="false" class="w-50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            style="border: 1px solid black;" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link vinculo fs-6 fw-semibold text-white" aria-current="page"
                        href="./informacion.php">¿Quiénes somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link vinculo fs-6 fw-semibold text-white" th href="./ayuda.php">¿Como
                        ayudarnos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link vinculo fs-6 fw-semibold text-white"
                        href="https://www.paypal.com/donate/?hosted_button_id=B2VJHR4MBCNTQ"
                        target="_blank">Donaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link vinculo fs-6 fw-semibold text-white" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"><i class="bi bi-box-arrow-in-right"></i> Iniciar
                        sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link vinculo fs-6 fw-semibold text-white" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                            class="bi bi-arrow-up-right-square"></i> Registrarse</a>

                </li>
            </ul>
        </div>
    </div>
</nav>


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

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
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

<!-- Modal login -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Iniciar sesión</h1>
            </div>
            <div class="modal-body">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-xl-10">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="row g-0">
                                    <div class="col-md-6 col-lg-5 d-none d-md-block"><img src="./Imagenes/Logo.jpg"
                                            alt="login form"
                                            style="border-radius: 1rem 0 0 1rem; margin: 2vw; margin-top: 9vw;" />
                                    </div>
                                    <div class="col-md-6 col-lg-7 d-flex align-items-center"
                                        style="background-color: #ffa119; ">
                                        <div class="card-body p-4 p-lg-5 text-black" style="background-color: #ffa119;">
                                            <form method="post" action="./BDLogin.php">
                                                <div class="d-flex align-items-center mb-3 pb-1"
                                                    style="background-color: #ffa119; ">
                                                    <span class="h1 fw-bold mb-0"
                                                        style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif; color: #ffffff;">
                                                        Buscando Huellitas </span>
                                                </div>
                                                <h5 class="fw-normal mb-3 pb-3"
                                                    style="letter-spacing: 1px; color: #ffffff;">Por favor
                                                    llena todos los datos solicitados</h5>
                                                <div class="form-outline mb-4">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            placeholder="name@example.com">
                                                        <label for="floatingInputGrid">Correo electronico</label>
                                                    </div>
                                                </div>
                                                <div class="form-outline mb-4">
                                                    <div class="form-floating">
                                                        <input type="password" class="form-control" id="password"
                                                            name="password" placeholder="********">
                                                        <label for="floatingInputGrid">Contraseña</label>
                                                    </div>
                                                </div>
                                                <div class="pt-1">
                                                    <button type="submit" class="btn btn-outline-light btn-lg">Iniciar
                                                        Sesión</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Canvas registro -->
<div class="offcanvas offcanvas-end" style="width:50%;" data-bs-backdrop="static" tabindex="-1" id="offcanvasRight"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="container text-center" style="margin-top:4rem;">
            <div class="row ">
                <div class="col d-none d-sm-none d-md-block">
                    <span class="fw-bold fs-3">Ayuda a tu amigo a regresar a casa !!!</span>
                    <img src="./Imagenes/mapa.png" alt="mapa" class="w-50" style="margin-top:2rem;">
                </div>
                <div class="col">
                    <h1 class="fw-bold fs-3">Registro</h1>
                    <br>
                    <div class="col order-2 fs-4" style="padding-bottom:3rem;">
                        <form method="POST" action="./BDregistroUsuario.php">
                            <div class="container">
                                <div id="alert1"></div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="pwd" class="form-label is-invalid">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre"
                                            name="nombre" pattern="[A-Za-zÀ-ÿ\u00f1\u00d1]+"
                                            title="El campo solo acepta letras">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="pwd" class="form-label is-invalid">Apellido:</label>
                                        <input type="text" class="form-control" id="ap" placeholder="Apellido" name="ap"
                                            pattern="[A-Za-zÀ-ÿ\u00f1\u00d1]+" title="El campo solo acepta letras">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo:</label>
                                        <input type="email" class="form-control" placeholder="example@example.com"
                                            pattern="[a-zA-Z0-9!#$%&'*_+-]([\.]?[a-zA-Z0-9!#$%&'*_+-])+@[a-zA-Z0-9]([^@&%$\/()=?¿!.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?"
                                            id="email2" name="email2" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
                                        <input type="password" class="form-control" id="pass" name="pass"
                                            placeholder="Contraseña">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="pwd" class="form-label">IDMEX: <button type="button" class="btn"
                                                data-toggle="modal" data-target="#myModal2" data-target="#myModal2"><i
                                                    class="bi bi-question-circle"></i></button></label>
                                        <input type="text" class="form-control" id="idmex" placeholder="IDMEX"
                                            name="idmex">

                                    </div>
                                </div>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-outline-dark float-end" id="btnfrm">Registrarme</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade " id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content my" style="width: 100%;">
            <div class="modal-header">
                <h4 class="modal-title">IDMEX</h4>
            </div>
            <div class="modal-body">
                <img src="./imagenes/IDMEx.png" style="width: 100%;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger my" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>