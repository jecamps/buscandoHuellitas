<?php
$servidor = "localhost";
$usuario = "root";
$pass = "";
$BD = "huellitas";

$conectado = new mysqli($servidor,$usuario,$pass,$BD);

mysqli_set_charset($conectado,'utf8');

if($conectado -> connect_error){
    echo ("<script text= 'text/javascript'>
    alert('ERROR!, la conexión no se pudo establecer');
    window.location = 'index.php';
    </script>");
}
?>