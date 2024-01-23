<?php
require('conexion.php');
date_default_timezone_set('UTC');
date_default_timezone_set('America/Los_Angeles');

$bandera = $_POST["bandera"];

if ($bandera == 1) {

    $nombre = $_POST["nombre"]; 
    $chip = $_POST["idChip"]; 
    $usuario = $_POST["usuario"];
    $foto = $_FILES['foto']['name']; 

    //insertar
    if (isset($foto) && $foto != "") {
        $tipoI = $_FILES['foto']['type'];
        $temp = $_FILES['foto']['tmp_name'];

        if ( !(strpos($tipoI,'jpg') || strpos($tipoI,'png') || strpos($tipoI,'jpeg'))) {
            echo "<script text='text/javascript'>
                alert('!Solo se adminten imagenes en jpg y png!');
                window.location='UseguirMascota.php';
                </script>";
        } else {
            $insertar = "INSERT INTO `chips`(`id`, `id_chip`, `nombre`, `foto`, `usuario`) VALUES ('','$chip','$nombre','$foto','$usuario')";
            $rta = mysqli_query($conectado, $insertar);

            if(!$rta){
                echo "<script text='text/javascript'>
                alert('!No se inserto!');
                window.location='UseguirMascota.php';
                </script>";;
            }else{
                move_uploaded_file($temp,'imagenesMascotas/'.$foto);
                echo "<script text='text/javascript'>
                    alert('!Registro realizado con exito!');
                    window.location='UseguirMascota.php';
                    </script>";
                
            } 
            mysqli_free_result($rta);
        }
    }
//actualizar
} else if( $bandera == 2){

    // $id = $_POST["id"]; 
    // $nombre = $_POST["nombre"]; 
    // $edad = $_POST["edad"]; 
    // $recompensa = $_POST["recompensa"]; 
    // $descripcion = $_POST["descripcion"]; 
    // $tipo = $_POST["tipoM"];
    // $mascotaP = $_POST["mascotaP"]; 
    // $estado = $_POST["estado"]; 
    // $dom = $_POST["delegacion/municipio"]; 
    // $estatus = $_POST["estatus"];

    // $foto = $_FILES['foto']['name']; 

    // if (isset($foto) && $foto != "") {
    //     $tipoI = $_FILES['foto']['type'];
    //     $temp = $_FILES['foto']['tmp_name'];
    
    //     if ( !(strpos($tipoI,'jpg') || strpos($tipoI,'png') || strpos($tipoI,'jpeg'))) {
    //         echo "<script text='text/javascript'>
    //             alert('!Solo se adminten imagenes en jpg y png!');
    //             window.location='UverMismascotas.php';
    //             </script>";
    //     } else {
    //         //actualizar con foto
    //         $actualizar = "UPDATE `mascotas` SET `nombre`='$nombre',`edad`='$edad',`recompensa`='$recompensa',`descripcion`='$descripcion',`tipo`='$tipo',`mascotaP`='$mascotaP',`estado`='$estado',
    //         `dom`='$dom',`foto`='$foto',`estatus`='$estatus' WHERE `id`='$id'";
    //         $rta = mysqli_query($conectado, $actualizar);

    //         if(!$rta){
    //             echo "<script text='text/javascript'>
    //             alert('!No se actualizo!');
    //             window.location='UverMismascotas.php';
    //             </script>";
    //         }else{
    //             move_uploaded_file($temp,'imagenesMascotas/'.$foto);
    //             echo "<script text='text/javascript'>
    //                 alert('!Actualización realizada con exito!');
    //                 window.location='UverMismascotas.php';
    //                 </script>";
    //         } 
    //         mysqli_free_result($rta);
    //     } 
    // } else {
    //     //actualizar sin imagen cambiada
    //     $actualizar = "UPDATE `mascotas` SET `nombre`='$nombre',`edad`='$edad',`recompensa`='$recompensa',`descripcion`='$descripcion',`tipo`='$tipo',`mascotaP`='$mascotaP',`estado`='$estado',
    //     `dom`='$dom',`estatus`='$estatus' WHERE `id`='$id'";
    //     $rta = mysqli_query($conectado, $actualizar);

    //     if(!$rta){
    //         echo "<script text='text/javascript'>
    //         alert('!No se actualizo!');
    //         window.location='UverMismascotas.php';
    //         </script>";
    //     }else{
    //         echo "<script text='text/javascript'>
    //             alert('!Actualización realizada con exito!');
    //             window.location='UverMismascotas.php';
    //             </script>";
            
    //     } 
    //     mysqli_free_result($rta);
    // }
} 



mysqli_close($conectado);
?>