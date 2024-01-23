<?php
require('conexion.php');

$name = $_POST["nombre"]; 
$apellido = $_POST["ap"];
$idmex = $_POST["idmex"];
$email = $_POST["email2"]; 
$password = $_POST["pass"]; 


   $insertar = "INSERT INTO `usuarios` (`id`, `Nombre`, `Apellido`, `Idmex`, `Correo`, `Contrasena`, `Rol`) 
   VALUES (NULL, '$name', '$apellido', '$idmex', '$email', '$password', 'Usuario');";
   $rta = mysqli_query($conectado, $insertar);

   if(!$rta){
   echo ("No se inserto!");
   }else{
   echo "<script text='text/javascript'>
         alert('!Registro realizado con exito!');
         window.location='index.php';
         </script>";
   } 

mysqli_free_result($rta); 
mysqli_close($conectado);
?>