<?php
require('conexion.php');
$usr = $_POST["email"];
$pass = $_POST["password"];  

$consulta = "SELECT * FROM `usuarios` WHERE Correo = '$usr' and Contrasena = '$pass'";

$resultado = mysqli_query($conectado,$consulta);

$filas = mysqli_fetch_array($resultado);

session_start();

if ($usr == $filas['Correo'] && $pass == $filas['Contrasena']) {

   if($filas['Rol'] == "Administrador"){
   $_SESSION['correo'] = $filas['Correo']; 
   $_SESSION['rol'] = $filas['Rol'];
   $_SESSION['nombre'] = $filas['Nombre']; 

      header("location:AvistaMascotas.php");
   
   }else if($filas['Rol'] == "Usuario"){
   $_SESSION['correo'] = $filas['Correo']; 
   $_SESSION['rol'] = $filas['Rol'];
   $_SESSION['nombre'] = $filas['Nombre']; 
   $_SESSION['apellido'] = $filas['Apellido'];

      header("location:UverMismascotas.php");
   
   } else {
   
      session_unset();
      session_destroy();
      echo "<script text='text/javascript'>
      alert('Usuario y/o Contraseña incorrecta.');
      window.location='index.php';
      </script>";
   
   }

} else {
   
   session_unset();
   session_destroy();
   echo "<script text='text/javascript'>
   alert('Usuario y/o Contraseña incorrecta.');
   window.location='index.php';
   </script>";

}

  
mysqli_free_result($resultado);
mysqli_close($conectado);
?>