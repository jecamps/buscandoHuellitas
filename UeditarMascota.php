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

    <div class="container" style="margin-bottom:10rem;margin-top:5rem;">
        <form action="./BDCatalogoMascota.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" value="2" hidden name="bandera">

                <input type="text" value="<?php echo $id?>" name="id" hidden>
                <span class="fs-4 fw-bold">Tipo de mascota: </span><span class="fs-5"><?php echo $row ['tipo'];?></span>
                <select class="form-control" name="tipoM" id="tipoM" onchange="tipomascota();">
                    <option value="<?php echo $row ['tipo'];?>"><?php echo $row ['tipo'];?></option>
                    <option value="Perro">Perro</option>
                    <option value="Gato">Gato</option>
                    <option value="Hamster">Hamster</option>
                    <option value="Pajaro">Pajaro</option>
                    <option value="Cuyo">Cuyo</option>
                </select>
            </div>
            <br>
            <div class="form-group" id="mascota">
            <span class="fs-4 fw-bold">Mascota: </span><span class="fs-5"><?php echo $row ['mascotaP'];?></span>
                <select class="form-control" name="mascotaP" id="mascotaP">
                    <option value="<?php echo $row ['mascotaP'];?>"><?php echo $row ['mascotaP'];?></option>
                </select>
            </div>
            <br>
            <div class="form-group">
            <span class="fs-4 fw-bold">Estado de extravio: </span><span class="fs-5"><?php echo $row ['estado'];?></span>
                <select class="form-control" id="estado" name="estado" onchange="estadoa();">
                    <option value="<?php echo $row ['estado'];?>"><?php echo $row ['estado'];?></option>
                    <option value="CDMX">CDMX</option>
                    <option value="EDOMEX">EDOMEX</option>
                </select>
            </div>
            <br>
            <div class="form-group">
            <span class="fs-4 fw-bold">Delegación/Municipio: </span><span class="fs-5"><?php echo $row ['dom'];?></span>
                <select class="form-control" id="delegacion/municipio" name="delegacion/municipio">
                    <option value="<?php echo $row ['dom'];?>"><?php echo $row ['dom'];?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="formFile" class="form-label">Selecciona tu foto</label>
                <input class="form-control form-control-sm" name="foto" id="foto" type="file">
            </div>
            <br>
            <div class="row g-3">
                <div class="col">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre:" value="<?php echo $row ['nombre'];?>">
                </div>
                <div class="col">
                    <select class="form-control" id="estatus" name="estatus">
                        <option value="<?php echo $row ['estatus'];?>"><?php echo $row ['estatus'] ? "Extraviado" : "Encontrado" ;?></option>
                        <option value="1">Extraviado</option>
                        <option value="0">Encontrado</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" name="edad" placeholder="Edad(en años):" aria-label="First name" value="<?php echo $row ['edad'];?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" id="recompensa" name="recompensa" placeholder="Recompensa:" value="<?php echo $row ['recompensa'];?>">
                </div>
            </div>
            <br>
            <div class="form-floating">
                <textarea class="form-control" name="descripcion" placeholder="Descripción"
                    id="floatingTextarea" value="<?php echo $row ['descripcion'];?>"><?php echo $row ['descripcion'];?></textarea>
                <label for="floatingTextarea">Descripción</label>
            </div>

            <br>
            <button type="submit" class="btn btn-danger float-end">Guardar</button>
        </form>
    </div>
    <?php
    }
    mysqli_free_result($resultado);
    ?>

    <script>
    function estadoa() {
        var esadoss = document.getElementById('estado').value;
        //console.log(esadoss);
        var dele = document.getElementById('delegacion/municipio');
        if (esadoss == 'EDOMEX') {
            dele.innerHTML =
                '<select class="form-control" id="delegacion/municipio" name="delegacion/municipio"><option value="Amecameca">Amecameca</option><option value="Atlacomulco">Atlacomulco</option><<option value="Chimalhuacan">Chimalhuacan</option><option value="Cuautitlan izacalli">Cuautitlan izacalli</option><option value="Ecatepec">Ecatepec</option><option value="Ixtlahuaca">Ixtlahuaca</option><option value="Ixtapan de la sal">Ixtapan de la sal</option><option value="Lerma">Lerma</option><option value="Metepec">Metepec</option><option value="Naucalpan">Naucalpan</option><option value="Nezahualcoyotl">Nezahualcoyotl</option><option value="Otumba">Otumba</option><option value="Tejupilco">Tejupilco</option><option value="Tenancingo">Tenancingo</option><option value="Tepoztlan">Tepoztlan</option><option value="Texcoco">Texcoco</option><option value="Tlanepantla">Tlanepantla</option><option value="Toluca">Toluca</option><option value="Tultitlan">Tultitlan</option><option value="Valle de bravo">Valle de bravo</option><option value="Zumpango">Zumpango</option></select>';
        } else if (esadoss == 'CDMX') {
            dele.innerHTML =
                '<select class="form-control" id="delegacion/municipio" name="delegacion/municipio"><option value="Iztapalapa">Iztapalapa</option><option value="Alvaro obregon">Alvaro obregon</option><option value="Azcapotzalco">Azcapotzalco</option><option value="Benito Juarez">Benito Juarez</option><option value="Coyoacan">Coyoacan</option><option value="Cuajimalpa de morelos">Cuajimalpa de morelos</option><option value="Cuauhtemoc">Cuauhtemoc</option><option value="Gustavo A. Madero">Gustavo A. Madero</option><option value="Iztacalco">Iztacalco</option><option value="Magdalena Contreras">Magdalena Contreras</option><option value="Miguel Hidalgo">Miguel Hidalgo</option><option value="Milpa Alta">Milpa Alta</option><option value="Tlahuac">Tlahuac</option><option value="Tlalpan">Tlalpan</option><option value="Venustiano Carranza">Venustiano Carranza</option><option value="Xochimilco">Xochimilco</option></select>';
        }
    }

    function tipomascota() {
        var mascotaM = document.getElementById('tipoM').value;
        //console.log(mascotaM);
        var mascotas = document.getElementById('mascotaP');
        if (mascotaM == 'Perro') {
            mascotas.innerHTML =
                '<select class="form-control" name="mascotaP" id="mascotaP"><option value="Labrador">Labrador</option><option value="Pug">Pug</option><option value="Schnauzer">Schnauzer</option><option value="Husky Siberiano">Husky Siberiano</option><option value="Pastor Alemán">Pastor Alemán</option><option value="Chihuahua">Chihuahua</option><option value="Pitbull">Pitbull</option><option value="Bulldog ingles">Bulldog ingles</option><option value="Bulldog frances">Bulldog frances</option><option value="Yorkshire terrier">Yorkshire terrier</option><option value="Pomerania">Pomerania</option><option value="Rottweiler">Rottweiler</option><option value="Gran danés">Gran danés</option><option value="Doberman">Doberman</option><option value="Xoloitzcuintle">Xoloitzcuintle</option></select>';
        } else if (mascotaM == 'Gato') {
            mascotas.innerHTML =
                '<select class="form-control" name="mascotaP" id="mascotaP"><option value="Gato mestizo">Gato mestizo</option><option value="Americano de pelo corto">Americano de pelo corto</option><option value="Europeo de pelo corto">Europeo de pelo corto</option><option value="Gato bombay">Gato bombay</option><option value="Azul ruso">Azul ruso</option><option value="Persa">Persa</option><option value="Siamés">Siamés</option><option value="Angora turco">Angora turco</option><option value="Siberiano">Siberiano</option><option value="Bengalí">Bengalí</option><option value="Maine coon">Maine coon</option></select>';
        } else if (mascotaM == 'Hamster') {
            mascota.innerHTML =
                '<select class="form-control" name="mascotaP" id="mascotaP"><option value="Ruso">Ruso</option><option value="Roborowski">Roborowski</option><option value="Sirio o dorado">Sirio o dorado</option><option value="Chino">Chino</option><option value="Enano de campbell">Enano de campbell</option></select>';
        } else if (mascotaM == 'Pajaro') {
            mascota.innerHTML =
                '<select class="form-control" name="mascotaP" id="mascotaP"><option value="Canario">Canario</option><option value="Jilgueros">Jilgueros</option><option value="Agaporni">Agaporni</option><option value="Periquito">Periquito</option><option value="Ninfas">Ninfas</option><option value="Cacatuas">Cacatuas</option><option value="Loro">Loro</option></select>';
        } else if (mascotaM == 'Cuyo') {
            mascota.innerHTML =
                '<select class="form-control" name="mascotaP" id="mascotaP"><option value="Cobayo abisinia">Cobayo abisinia</option><option value="Cobayo americao">Cobayo americano</option><option value="Cobaya coronet">Cobaya coronet</option><option value="Cobayas de cresta blanca">Cobayas de cresta blanca</option><option value="Cobaya himalaya">Cobaya himalaya</option><option value="Cobayos peruanos">Cobayos peruanos</option><option value="Cobayo rex">Cobayo rex</option><option value="Cobayas sheltie">Cobayas sheltie</option><option value="Cobaya skinny o sin pelo">Cobaya skinny o sin pelo</option><option value="Cobaya teddy">Cobaya teddy</option><option value="Cobayas texel">Cobayas texel</option></select>';
        }
    }
    </script>

</body>
<?php include('fragmentos/footer.php');?>

</html>