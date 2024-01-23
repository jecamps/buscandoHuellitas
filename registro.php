<?php include('fragmentos/menu.php');?>

<!-- Grid -->
<div class="container text-center" style="margin-top:4rem;">
    <div class="row ">
        <div class="col d-none d-sm-none d-md-block">
            <span class="fw-bold fs-2">Ayuda a tu amigo a regresar a casa !!!</span>
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
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre"
                                    pattern="[A-Za-zÀ-ÿ\u00f1\u00d1]+" title="El campo solo acepta letras" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="pwd" class="form-label is-invalid">Apellido:</label>
                                <input onchange="validaLetras()"  type="text" class="form-control" id="ap" placeholder="Apellido" name="ap"
                                    pattern="[A-Za-zÀ-ÿ\u00f1\u00d1]+" title="El campo solo acepta letras" required>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo:</label>
                                <input type="email" class="form-control" placeholder="example@example.com"
                                    pattern="[a-zA-Z0-9!#$%&'*_+-]([\.]?[a-zA-Z0-9!#$%&'*_+-])+@[a-zA-Z0-9]([^@&%$\/()=?¿!.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?"
                                    id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="pass" name="pass"
                                    placeholder="Contraseña" required>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="pwd" class="form-label">IDMEX: </label>

                                <button type="button" class="btn" data-toggle="modal" data-target="#staticBackdrop"><i
                                        class="bi bi-question-circle"></i></button>
                                <input type="text" class="form-control" id="idmex" placeholder="IDMEX" name="idmex" required>
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

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">IDMEX</h1>
                <button type="button" style="background-color: red;" class="close" data-dismiss="modal"
                    aria-label="Close"><i class="bi bi-x-lg" style="color: white;"></i>
            </div>
            <div class="modal-body">
                <img src='./Imagenes/IDMEx.png' alt='IDMEX' width="89%">
            </div>
        </div>
    </div>
</div>
</div>

<script>

    

</script>