<?php
require('conexion.php');

$Id = $_GET['id'];

$eliminar ="DELETE FROM mascotas WHERE id='$Id'";
$resultado=$conectado->query($eliminar);

$eliminar2 ="DELETE FROM comentarios WHERE id_mascota='$Id'";
$resultado2=$conectado->query($eliminar2);

if(!$resultado) {
    
    echo "<script text='text/javascript'>
        alert('Error!, no se pudo eliminar 😢');
        window.location='AvistaMascotas.php';
        </script>";

}
else {
    echo "<script text='text/javascript'>
        alert('Eliminado satisfactoriamente');
        window.location='AvistaMascotas.php';
        </script>";
}

mysqli_close($conectado);
?>