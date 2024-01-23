<?php
require('conexion.php');

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$usuario = $_POST["usuario"];

$insertar = "INSERT INTO `comentarios`(`id`, `id_mascota`, `comentario`, `nombre`, `usuario`) VALUES ('','$id','$descripcion','$nombre','$usuario')";
$rta = mysqli_query($conectado, $insertar);

if(!$rta){
    echo "<script text='text/javascript'>
    alert('!No se inserto!');
    window.location='Uvermascotasperdidas.php';
    </script>";;
}else{
    move_uploaded_file($temp,'imagenesMascotas/'.$foto);
    echo "<script text='text/javascript'>
        alert('!Comentario registrado con exito!!!!!');
        window.location='Uvermascotasperdidas.php';
        </script>";
    
} 

mysqli_free_result($rta);
mysqli_close($conectado);
?>