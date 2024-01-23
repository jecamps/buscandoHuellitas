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

<div style="max-width: 800px; margin: 0 auto; margin-bottom:5rem;">

    <div class="card formulario">
        <div class="card-body">
            <h3 class="card-title">Agrega los datos de tu mascota</h3>
            <br>

            <form action="./BDCatalogoMascota.php" method="post" >

                <div class="form-group">
                    <input type="text" value="1" hidden name="bandera">
                    <select class="form-control" name="raza" id="raza">
                        <option>Raza</option>
                        <option value="Pitbul">Pitbul</option>
                        <option value="Chihuahua ">Chihuahua </option>
                        <option value="Pastor Alemán">Pastor Alemán</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" id="estado" name="estado">
                        <option value="Prueba">Ciudad/Estado</option>
                        <option value="Nezahualcoyotl">Nezahualcoyotl</option>
                        <option value="Chimalhuacan">Chimalhuacan</option>
                        <option value="Iztapalapa">Iztapalapa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Seleccionar foto</label>
                    <input class="form-control form-control-sm" name="foto" id="foto" 
                        type="file" >
                </div>

                <div class="row g-3">
                    <div class="col">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre:">
                    </div>
                    <div class="col">
                        <?php date_default_timezone_set('America/Los_Angeles');?>
                        <input class="form-control" id="datepicker" name="fecha" type="date">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="edad" placeholder="Edad:" aria-label="First name">
                    </div>
                    <div class="col">
                        <input class="form-control" id="datepicker" name="recompensa" placeholder="Recompensa:">
                        <input type="text" value="<?php echo $nombre?>" name="usuario" hidden>
                    </div>
                </div>
                <br>
                <div class="form-floating">
                    <textarea class="form-control" name="descripcion" placeholder="Descripción"
                        id="floatingTextarea"></textarea>
                </div>

                <br>
                <button type="submit" class="btn btn-danger">Guardar</button>
            </form>
        </div>
    </div>
</div>

<!-- <script>
function img_pathUrl(input) {
    $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
}
</script> -->